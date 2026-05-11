<?php

$container->loadFromExtension('framework', [
    'cache' => [
        'app' => 'redis://example.com:6380',
        'system' => 'memcached://example.com:11211',
    ],
]);
