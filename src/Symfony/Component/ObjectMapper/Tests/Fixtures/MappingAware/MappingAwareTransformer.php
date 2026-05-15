<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\ObjectMapper\Tests\Fixtures\MappingAware;

use Symfony\Component\ObjectMapper\Attribute\Map;
use Symfony\Component\ObjectMapper\MappingAwareTransformCallableInterface;
use Symfony\Component\ObjectMapper\TransformCallableInterface;

/**
 * @implements TransformCallableInterface<A>
 */
class MappingAwareTransformer implements TransformCallableInterface, MappingAwareTransformCallableInterface
{
    private ?Map $mapping = null;

    public function withMapping(Map $mapping): static
    {
        $clone = clone $this;
        $clone->mapping = $mapping;

        return $clone;
    }

    public function __invoke(mixed $value, object $source, ?object $target): mixed
    {
        if (null === $this->mapping) {
            return $value;
        }

        return $this->mapping->target;
    }
}
