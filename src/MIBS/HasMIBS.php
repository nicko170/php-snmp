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

use Nicko170\PhpSnmp\MIBS\ExtremeXOS\ExtremeXOS;
use Nicko170\PhpSnmp\MIBS\Generic\Iface;

trait HasMIBS
{
    protected array $mibs = [];

    public function system(): System
    {
        if (array_key_exists('system', $this->mibs) && $this->mibs['system'] instanceof System) {
            return $this->mibs['system'];
        }

        return $this->mibs['system'] = new System($this);
    }

    public function iface(): Iface
    {
        if (array_key_exists('iface', $this->mibs) && $this->mibs['iface'] instanceof Iface) {
            return $this->mibs['iface'];
        }

        return $this->mibs['iface'] = new Iface($this);
    }

    public function extremeXOS(): ExtremeXOS
    {
        if (array_key_exists('extremeXOS', $this->mibs) && $this->mibs['extremeXOS'] instanceof ExtremeXOS) {
            return $this->mibs['extremeXOS'];
        }

        return $this->mibs['extremeXOS'] = new ExtremeXOS($this);
    }
}
