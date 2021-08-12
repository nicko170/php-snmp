<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices.
 *
 * @link      https://github.com/nicko170/php-snmp
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 */

namespace Nicko170\PhpSnmp;

use Exception;
use Nicko170\PhpSnmp\Contracts\DeviceContract;
use Nicko170\PhpSnmp\Contracts\SNMPCache;
use Nicko170\PhpSnmp\MIBS\HasMIBS;
use Nicko170\PhpSnmp\Models\ExtremeNetworks;

class SNMP
{
    use HasMIBS;

    protected string $community;
    protected string $host;
    protected string $version;

    protected int $retry;
    protected int $timeout = 1000000;

    protected SNMPCache $cache;

    /**
     * Constructor.
     *
     * @param string $host The target host IP address
     * @param string $community The SNMP community
     * @param string $version The SNMP version
     * @return SNMP
     * @throws Exception
     */
    public function __construct(string $host = '127.0.0.1', string $community = 'public', string $version = '2c', int $retry = 5, SNMPCache $cache = null)
    {
        if (! function_exists('snmp2_get')) {
            throw new Exception('You need to install the PHP SNMP package.');
        }

        snmp_set_oid_output_format(SNMP_OID_OUTPUT_NUMERIC);

        $this->host = $host;
        $this->community = $community;
        $this->version = $version;
        $this->retry = $retry;
        $this->cache = $cache ?: new SimpleCache;

        return $this;
    }

    /**
     * @throws Exception
     */
    public function get(string $oid): mixed
    {
        if ($result = $this->cache->get($oid)) {
            return $result;
        }

        $result = match ($this->version) {
            '1' => @snmpget($this->host, $this->community, $oid, $this->timeout, $this->retry),
            '2c' => @snmp2_get($this->host, $this->community, $oid, $this->timeout, $this->retry),
            default => throw new Exception('SNMP v3 has not been implemented yet.')
        };

        $parsed = $this->parse($result);
        $this->cache->set($oid, $parsed);

        return $parsed;
    }

    /**
     * @throws Exception
     */
    public function walk(string $oid): array | false
    {
        if ($result = $this->cache->get($oid)) {
            return $result;
        }

        $result = match ($this->version) {
            '1' => @snmprealwalk($this->host, $this->community, $oid, $this->timeout, $this->retry),
            '2c' => @snmp2_real_walk($this->host, $this->community, $oid, $this->timeout, $this->retry),
            default => throw new Exception('SNMP v3 has not been implemented yet.')
        };

        array_walk($result, fn (&$val) => $val = $this->parse($val));
        $this->cache->set($oid, $result);

        return $result;
    }

    /**
     * Parses the return value from the SNMP query.
     * eg, [STRING: "ASDF"] => string "ASDF";
     * or, [INTEGER: 11] => int 11;.
     *
     * @param string $result
     * @return string|int|bool|null
     * @throws Exception
     */
    public function parse(string $result): string | int | bool | null
    {
        if (empty(trim($result, '"'))) {
            return '';
        }

        $type = substr($result, 0, strpos($result, ':'));
        $value = trim(substr($result, strpos($result, ':') + 1));

        if ($type === 'INTEGER') {
            if (! is_numeric($value)) {
                preg_match('/\d/', $value, $m, PREG_OFFSET_CAPTURE);
                $value = (int) substr($value, $m[0][1]);
            }
        }

        return match ($type) {
            'STRING', 'OID', 'IpAddress', 'INTEGER' => $value,
            'Timeticks' => (int) substr($value, 1, strrpos($value, ')') - 1),
            'Counter32', 'Counter64', 'Gauge32' => (int) $value,
            default => throw new Exception("Not implemented: [$type: $value]")
        };
    }

    /**
     * @throws Exception
     */
    public function device(): DeviceContract
    {
        // Return a new Device Class
        if (str_starts_with($this->system()->description(), 'ExtremeXOS')) {
            return new ExtremeNetworks($this);
        }

        throw new Exception('Vendor not implemented');
    }
}
