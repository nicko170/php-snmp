<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices.
 *
 * @link      https://github.com/nicko170/php-snmp
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 */

namespace Nicko170\PhpSnmp\Contracts;

interface SNMPCache
{
    /**
     * Ads an Item to the Cache, with an optional expiry time.
     *
     * @param string $key
     * @param mixed $value
     * @param int|null $timeout
     * @return bool If adding to the cache was successful
     */
    public function set(string $key, mixed $value, ?int $timeout = null): bool;

    /**
     * Returns true if key exists in cache, and is not expired.
     *
     * @param string $key
     * @return bool
     */
    public function exists(string $key): bool;

    /**
     * Gets an item from the cache. If the timeout has been reached, False should be returned.
     *
     * @param $key
     * @return mixed
     */
    public function get($key): mixed;

    /**
     * Deletes an item from the cache
     *
     * @param $key
     * @return bool
     */
    public function delete($key): bool;

    /**
     * Deletes all entries from the cache
     *
     * @return bool
     */
    public function reset(): bool;
}