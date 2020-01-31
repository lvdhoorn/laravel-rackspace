<?php

namespace Invato\Rackspace;

/**
 * @method static \Invato\Rackspace\Api\Debtors debtors()
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
