<?php

namespace Nicko170\PhpSnmp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nicko170\PhpSnmp\Skeleton\SkeletonClass
 */
class PhpSnmpFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'php-snmp';
    }
}
