<?php

return [
    'db' => [
        'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'dbname' => 't4-1',
        ],
    ],

    'extensions' => [
        'bootstrap' => [
            'theme' => 'readable'
        ]
    ],

    'errors' => [
        404 => '//Errors/404',
        403 => '//Errors/403'
    ]
];