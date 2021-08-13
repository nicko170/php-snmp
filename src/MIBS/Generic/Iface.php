<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices.
 *
 * @link      https://github.com/nicko170/php-snmp
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 */

namespace Nicko170\PhpSnmp\MIBS\Generic;

use Nicko170\PhpSnmp\MIBS\Base;

class Iface extends Base
{
    const OID_IF_INDEX = '.1.3.6.1.2.1.2.2.1.1';
    const OID_IF_DESCRIPTION = '.1.3.6.1.2.1.2.2.1.2';
    const OID_IF_TYPE = '.1.3.6.1.2.1.2.2.1.3';
    const OID_IF_MTU = '.1.3.6.1.2.1.2.2.1.4';
    const OID_IF_SPEED = '.1.3.6.1.2.1.2.2.1.5';
    const OID_IF_PHYS_ADDRESS = '.1.3.6.1.2.1.2.2.1.6';
    const OID_IF_ADMIN_STATUS = '.1.3.6.1.2.1.2.2.1.7';
    const OID_IF_OPER_STATUS = '.1.3.6.1.2.1.2.2.1.8';

    const OID_IF_NAME = '.1.3.6.1.2.1.31.1.1.1.1';
    const OID_IF_ALIAS = '.1.3.6.1.2.1.31.1.1.1.18';

    const IF_ADMIN_STATUS_UP = 1;
    const IF_ADMIN_STATUS_DOWN = 2;

    const IF_OPER_STATUS_UP = 1;
    const IF_OPER_STATUS_DOWN = 2;
    const IF_OPER_STATUS_TESTING = 3;
    const IF_OPER_STATUS_UNKNOWN = 4;
    const IF_OPER_STATUS_DORMANT = 5;
    const IF_OPER_STATUS_NOT_PRESENT = 6;
    const IF_OPER_STATUS_LOWER_LAYER_DOWN = 7;

    /**
     * Text representation of interface operating status.
     *
     * @see operationStates()
     * @var array Text representations of interface operating status.
     */
    public function indexes(): array | false
    {
        return $this->snmp->walk(self::OID_IF_INDEX);
    }

    public function descriptions(): array | false
    {
        return $this->snmp->walk(self::OID_IF_DESCRIPTION);
    }

    public function types(): array | false
    {
        return $this->snmp->walk(self::OID_IF_TYPE);
    }

    public function mtus(): array | false
    {
        return $this->snmp->walk(self::OID_IF_MTU);
    }

    public function speeds(): array | false
    {
        return $this->snmp->walk(self::OID_IF_SPEED);
    }

    public function physAddresses(): array | false
    {
        return $this->snmp->walk(self::OID_IF_PHYS_ADDRESS);
    }

    public function admins(): array | false
    {
        return $this->snmp->walk(self::OID_IF_ADMIN_STATUS);
    }

    public function opers(): array | false
    {
        return $this->snmp->walk(self::OID_IF_OPER_STATUS);
    }

    public function names(): array | false
    {
        return $this->snmp->walk(self::OID_IF_NAME);
    }

    public function aliases(): array | false
    {
        return $this->snmp->walk(self::OID_IF_ALIAS);
    }

    /**
     * @return array<\Nicko170\PhpSnmp\Models\Iface>
     */
    public function all(): array
    {
        return array_map(
            fn (int $index) => (new \Nicko170\PhpSnmp\Models\Iface($index))
                ->description($this->descriptions()[self::OID_IF_DESCRIPTION.'.'.$index])
                ->type($this->types()[self::OID_IF_TYPE.'.'.$index])
                ->mtu($this->mtus()[self::OID_IF_MTU.'.'.$index])
                ->speed($this->speeds()[self::OID_IF_SPEED.'.'.$index])
                ->physAddress($this->physAddresses()[self::OID_IF_PHYS_ADDRESS.'.'.$index])
                ->admin($this->admins()[self::OID_IF_ADMIN_STATUS.'.'.$index])
                ->oper($this->opers()[self::OID_IF_OPER_STATUS.'.'.$index])
                ->name($this->names()[self::OID_IF_NAME.'.'.$index])
                ->alias($this->aliases()[self::OID_IF_ALIAS.'.'.$index]),

            array_values($this->indexes())
        );
    }
}
