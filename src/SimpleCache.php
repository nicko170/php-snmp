<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices.
 *
 * @link      https://github.com/nicko170/php-snmp
 *
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 *
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 */

namespace Nicko170\PhpSnmp;

use Carbon\Carbon;
use Nicko170\PhpSnmp\Contracts\SNMPCache;

class SimpleCache implements SNMPCache
{
    private array $_cache = [];

    public function set(string $key, mixed $value, ?int $timeout = null): bool
    {
        $this->_cache[$key] = [
            'value' => $value,
            'timeout' => $timeout ? Carbon::now()->addSeconds($timeout) : null,
        ];

        return true;
    }

    public function get($key): mixed
    {
        if (! array_key_exists($key, $this->_cache)) {
            return false;
        }

        /** @var ?Carbon $timeout */
        $timeout = $this->_cache[$key]['timeout'];

        // If the cache is expired
        if ($timeout && $timeout->isPast()) {
            $this->delete($key);

            return false;
        }

        return $this->_cache[$key]['value'];
    }

    public function delete($key): bool
    {
        if (array_key_exists($key, $this->_cache)) {
            unset($this->_cache[$key]);

            return true;
        }

        return false;
    }

    public function reset(): bool
    {
        $this->_cache = [];

        return true;
    }

    public function exists(string $key): bool
    {
        if (! array_key_exists($key, $this->_cache)) {
            return false;
        }

        /** @var ?Carbon $timeout */
        $timeout = $this->_cache[$key]['timeout'];

        // If the cache is expired we may as well delete the item here, save another lookup / call
        if ($timeout && $timeout->isPast()) {
            $this->delete($key);

            return false;
        }

        return true;
    }
}
