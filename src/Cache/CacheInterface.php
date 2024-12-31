<?php

declare(strict_types=1);

namespace Gadget\Cache;

use Psr\SimpleCache\CacheInterface as PsrSimpleCacheInterface;

interface CacheInterface extends PsrSimpleCacheInterface
{
    /**
     * @return string[]
     */
    public function getNamespace(): array;


    /**
     * @param string|string[] $namespace
     * @return self
     */
    public function withNamespace(string|array $namespace): self;
}
