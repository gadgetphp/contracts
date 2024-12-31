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
     * @param bool $replace
     * @return self
     */
    public function withNamespace(
        string|array $namespace,
        bool $replace = false
    ): self;


    /**
     * @template T
     * @param string $key
     * @param (callable(mixed $v):(T|null)) $toValue
     * @param mixed $default
     * @return T|null
     */
    public function getT(
        string $key,
        callable $toValue,
        mixed $default = null
    ): mixed;
}
