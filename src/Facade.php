<?php

namespace Invato\Rackspace;

/**
 * Class Facade
 * @package Invato\Rackspace
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'Rackspace';
    }
}
