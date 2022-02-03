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

namespace Nicko170\PhpSnmp\MIBS\ExtremeXOS;

use Nicko170\PhpSnmp\MIBS\Base;

class ExtremeXOS extends Base
{
    protected array $mibs = [];

    public function chassis(): Chassis
    {
        if (array_key_exists('chassis', $this->mibs) && $this->mibs['chassis'] instanceof Chassis) {
            return $this->mibs['chassis'];
        }

        return $this->mibs['chassis'] = new Chassis($this->snmp);
    }
}
