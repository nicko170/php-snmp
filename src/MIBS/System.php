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

namespace Nicko170\PhpSnmp\MIBS;

class System extends Base
{
    const SYSTEM_DESCRIPTION = '.1.3.6.1.2.1.1.1.0';
    const SYSTEM_OBJECT_ID = '.1.3.6.1.2.1.1.2.0';
    const SYSTEM_UPTIME = '.1.3.6.1.2.1.1.3.0';
    const SYSTEM_CONTACT = '.1.3.6.1.2.1.1.4.0';
    const SYSTEM_NAME = '.1.3.6.1.2.1.1.5.0';
    const SYSTEM_LOCATION = '.1.3.6.1.2.1.1.6.0';
    const SYSTEM_SERVICES = '.1.3.6.1.2.1.1.7.0';

    public function description(): mixed
    {
        return $this->snmp->get(self::SYSTEM_DESCRIPTION);
    }

    public function objectId(): mixed
    {
        return $this->snmp->get(self::SYSTEM_OBJECT_ID);
    }

    public function uptime(): mixed
    {
        return $this->snmp->get(self::SYSTEM_UPTIME);
    }

    public function contact(): mixed
    {
        return $this->snmp->get(self::SYSTEM_CONTACT);
    }

    public function name(): mixed
    {
        return $this->snmp->get(self::SYSTEM_NAME);
    }

    public function location(): mixed
    {
        return $this->snmp->get(self::SYSTEM_LOCATION);
    }

    public function services(): mixed
    {
        return $this->snmp->get(self::SYSTEM_SERVICES);
    }
}
