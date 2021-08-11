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

trait HasMIBS {
    protected array $mibs = [];

    public function system() : System
    {
        if(array_key_exists('system', $this->mibs) && $this->mibs['system'] instanceof System){
            return $this->mibs['system'];
        }

        return $this->mibs['system'] = new System($this);
    }
}