<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\PkceInterface;

interface PkceFactoryInterface
{
    /**
     * @param string $method
     * @return PkceInterface
     */
    public function createPkce(string $method = 'S256'): PkceInterface;
}
