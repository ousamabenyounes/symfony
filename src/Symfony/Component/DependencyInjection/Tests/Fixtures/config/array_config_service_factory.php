<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\DependencyInjection\Tests\Fixtures\Bar;
use Symfony\Component\DependencyInjection\Tests\Fixtures\InvokableFactory;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return [
    'services' => [
        '_defaults' => [
            'public' => true,
        ],
        InvokableFactory::class => null,
        'bar_from_invokable' => [
            'class' => Bar::class,
            'factory' => service(InvokableFactory::class),
        ],
    ],
];
