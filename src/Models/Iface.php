<?php
/**
 * PHP SNMP - A fluent interface to SNMP network devices.
 *
 * @link      https://github.com/nicko170/php-snmp
 * @author    Nick Pratley <nick@npratley.net>
 * @licence   https://github.com/nicko170/php-snmp/blob/main/LICENSE.md
 * @copyright Copyright (c) 2021 - 2021 Nick Pratley - (https://devlan.io)
 */

namespace Nicko170\PhpSnmp\Models;

class Iface
{
    public int $ifIndex;
    public ?string $description;
    public ?string $name;
    public ?int $type;
    public ?int $mtu;
    public ?int $speed;
    public ?string $physAddress;
    public ?int $admin;
    public ?int $oper;
    public ?string $alias;

    public function __construct(int $ifIndex)
    {
        $this->ifIndex($ifIndex);
    }

    public function ifIndex(int $ifIndex): self
    {
        $this->ifIndex = $ifIndex;

        return $this;
    }

    public function alias(?string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function description(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function name(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function type(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function mtu(?int $mtu): self
    {
        $this->mtu = $mtu;

        return $this;
    }

    public function speed(?int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function physAddress(?string $physAddress): self
    {
        $this->physAddress = $physAddress;

        return $this;
    }

    public function admin(?int $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function oper(?int $oper): self
    {
        $this->oper = $oper;

        return $this;
    }
}
