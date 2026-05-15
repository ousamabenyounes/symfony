<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\ObjectMapper;

use Symfony\Component\ObjectMapper\Attribute\Map;

/**
 * Allows a transformer to receive the {@see Map} metadata describing the
 * property currently being mapped (target/source name, condition, transform).
 */
interface MappingAwareTransformCallableInterface
{
    /**
     * Returns a clone of the original instance, configured with the given mapping.
     */
    public function withMapping(Map $mapping): static;
}
