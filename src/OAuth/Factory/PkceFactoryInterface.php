<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\PkceInterface;

interface PkceFactoryInterface
{
    /**
     * @param mixed $values
     * @return PkceInterface
     */
    public function create(mixed $values): PkceInterface;


    /**
     * @param string $method
     * @return PkceInterface
     */
    public function createPkce(string $method = 'S256'): PkceInterface;
}
