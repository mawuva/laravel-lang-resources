<?php

namespace Mawuekom\LangResources;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LangResources\Skeleton\SkeletonClass
 */
class LangResourcesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lang-resources';
    }
}
