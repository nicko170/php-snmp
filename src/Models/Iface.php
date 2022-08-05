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

    public ?int $inOctets;
    public ?int $inUcastPkts;
    public ?int $inNUcastPkts;
    public ?int $inDiscards;
    public ?int $inErrors;
    public ?int $inUnknownProtos;
    public ?int $outOctets;
    public ?int $outUcastPkts;
    public ?int $outNUcastPkts;
    public ?int $outDiscards;
    public ?int $outErrors;

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

    public function inOctets(?int $inOctets): self
    {
        $this->inOctets = $inOctets;

        return $this;
    }

    public function inUcastPkts(?int $inUcastPkts): self
    {
        $this->inUcastPkts = $inUcastPkts;

        return $this;
    }

    public function inNUcastPkts(?int $inNUcastPkts): self
    {
        $this->inNUcastPkts = $inNUcastPkts;

        return $this;
    }

    public function inDiscards(?int $inDiscards): self
    {
        $this->inDiscards = $inDiscards;

        return $this;
    }

    public function inErrors(?int $inErrors): self
    {
        $this->inErrors = $inErrors;

        return $this;
    }

    public function inUnknownProtos(?int $inUnknownProtos): self
    {
        $this->inUnknownProtos = $inUnknownProtos;

        return $this;
    }

    public function outOctets(?int $outOctets): self
    {
        $this->outOctets = $outOctets;

        return $this;
    }

    public function outUcastPkts(?int $outUcastPkts): self
    {
        $this->outUcastPkts = $outUcastPkts;

        return $this;
    }

    public function outNUcastPkts(?int $outNUcastPkts): self
    {
        $this->outNUcastPkts = $outNUcastPkts;

        return $this;
    }

    public function outDiscards(?int $outDiscards): self
    {
        $this->outDiscards = $outDiscards;

        return $this;
    }

    public function outErrors(?int $outErrors): self
    {
        $this->outErrors = $outErrors;

        return $this;
    }

}
