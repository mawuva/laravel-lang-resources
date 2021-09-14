<?php

namespace Mawuekom\LaravelLangResources;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LaravelLangResources\Skeleton\SkeletonClass
 */
class LaravelLangResourcesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-lang-resources';
    }
}
