<?php

return [

    'defaultController' => 'Home',

    // Just put null value if you has enable .htaccess file
    'indexFile' => INDEX_FILE . '/',

    'module' => [
        'path' => APP,
        'domainMapping' => [],
    ],

    'vendor' => [
        'path' => '../vendor/'
    ],

    'alias' => [
        /*
        'controller' => array(
            'class' => 'Alias',
            'method' => 'index'
        ),
        */
        'method' => 'alias'
    ],
];
