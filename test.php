<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices
 *
 * @link      https://github.com/nicko170/php-snmp
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 *
 */

require 'vendor/autoload.php';

use Nicko170\PhpSnmp\SNMP;

$device = new SNMP(host: '103.2.119.110', community: 'public', version: '2c');

var_dump($device->system()->name());
var_dump($device->system()->description());
var_dump($device->system()->objectId());
var_dump($device->system()->contact());
var_dump($device->system()->location());
var_dump($device->system()->uptime());
