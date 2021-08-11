<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices.
 *
 * @link      https://github.com/nicko170/php-snmp
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 */

namespace Nicko170\PhpSnmp\Device;

use Carbon\Carbon;
use JetBrains\PhpStorm\Pure;
use Nicko170\PhpSnmp\Contracts\DeviceContract;

class ExtremeNetworks extends Device implements DeviceContract
{
    public string $vendor;
    public string $os;
    public string $serial_number;
    public string $os_version;
    public ?Carbon $os_date;
    public string $model;


    #[Pure] public function __construct()
    {
        parent::__construct(...func_get_args());

        $this->vendor = 'Extreme Networks';
        $this->os = 'ExtremeXOS';
        $this->parse();
    }

    function parse(): void
    {
        $this->serial_number = $this->snmp->extremeXOS()->chassis()->systemId();
        if (str_starts_with($this->snmp->system()->description(), 'ExtremeXOS (')) {
            preg_match( '/ExtremeXOS\s\((.+)\)\sversion\s([a-zA-Z0-9\.\-]+\s[a-zA-Z0-9\.\-]+)\sby\srelease-manager\son\s([a-zA-Z]+)\s([a-zA-Z]+)\s(\d+)\s((\d\d):(\d\d):(\d\d))\s([a-zA-Z]+)\s(\d\d\d\d)/',
                $this->snmp->system()->description(), $matches );

            $this->model = $matches[1];
            $this->os_version = $matches[2];
            $this->os_date = new Carbon( "{$matches[5]}/{$matches[4]}/{$matches[11]}:{$matches[6]} +0000");
            //$this->model = $this->snmp->extremeXOS()->chassis()->systemModel();

        } else {
            $this->model = '';
            $this->os_version = '';
            $this->os_date = null;
        }
    }

    public function serialNumber(): string
    {
        return $this->serial_number;
    }


    public function vendor(): string
    {
        return $this->vendor;
    }

    public function os(): string
    {
        return $this->os;
    }

    public function osVersion(): string
    {
        return $this->os_version;
    }

    public function osDate(): ?Carbon
    {
        return $this->osDate();
    }

    public function model(): string
    {
        return $this->model;
    }
}