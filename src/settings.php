<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        /*Databases*/
        'db' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'DB_01',
            'username' => 'root',
            'password' => 'solonopole',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
        'db2' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'DB_02',
            'username' => 'root',
            'password' => 'solonopole',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
];
