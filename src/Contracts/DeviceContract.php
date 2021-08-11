<?php

namespace Nicko170\PhpSnmp\Contracts;

use Carbon\Carbon;

interface DeviceContract
{
    public function vendor(): string;

    public function os(): string;

    public function serialNumber(): string;

    public function osVersion(): string;

    public function osDate(): ?Carbon;

    public function model(): string;
}
