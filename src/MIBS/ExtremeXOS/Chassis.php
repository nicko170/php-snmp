<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices.
 *
 * @link      https://github.com/nicko170/php-snmp
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 */

namespace Nicko170\PhpSnmp\MIBS\ExtremeXOS;

use Nicko170\PhpSnmp\MIBS\Base;

class Chassis extends Base
{
    const OID_SYSTEM_ID = '.1.3.6.1.4.1.1916.1.1.1.16.0';
    const OID_SYSTEM_MODEL = '.1.3.6.1.2.1.47.1.1.1.1.2.1';

    public function systemId() : string
    {
        return $this->snmp->get(self::OID_SYSTEM_ID);
    }

    public function systemModel() : string
    {
        return $this->snmp->get(self::OID_SYSTEM_MODEL);
    }
}