<?php

namespace Nicko170\PhpSnmp\Models;

use Nicko170\PhpSnmp\SNMP;

abstract class Device
{
    protected SNMP $snmp;

    public function __construct(SNMP $snmp)
    {
        $this->snmp = $snmp;
    }
}
