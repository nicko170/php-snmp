<?php

require_once 'vendor/autoload.php';

use Nicko170\PhpSnmp\SNMP;

$snmp = new SNMP(host: '10.2.1.1', community: getenv('SNMP_COMMUNITY'));

dump($snmp->iface()->stats(1001));
