<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices.
 *
 * @link      https://github.com/nicko170/php-snmp
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 */

namespace Nicko170\PhpSnmp\MIBS;

use Nicko170\PhpSnmp\SNMP;

abstract class Base
{
    protected SNMP $snmp;

    public function __construct(SNMP $snmp)
    {
        $this->snmp = $snmp;
    }
}
