<?php

use Invato\Rackspace\Rackspace;

if (!function_exists('Rackspace')) {
    function rackspace()
    {
        return app(Rackspace::class);
    }
}
