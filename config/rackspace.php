<?php

return [

    'default' => env('RACKSPACE_CONNECTION', 'default'),

    'connections' => [

        'default' => [
            'url' => env('RACKSPACE_DEFAULT_URL', 'https://api.emailsrvr.com/v1/'),
            'key' => env('RACKSPACE_DEFAULT_USERKEY'),
            'secret' => env('RACKSPACE_DEFAULT_USERSECRET'),
        ],

    ],

];