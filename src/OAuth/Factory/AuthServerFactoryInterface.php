<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\AuthServerInterface;

interface AuthServerFactoryInterface
{
    /**
     * @param mixed $values
     * @return AuthServerInterface
     */
    public function create(mixed $values): AuthServerInterface;


    /**
     * @param string|null $authUri
     * @param string|null $tokenUri
     * @param string|null $jwksUri
     * @param string|null $clientId
     * @param string|null $clientSecret
     */
    public function createAuthServer(
        string|null $authUri = null,
        string|null $tokenUri = null,
        string|null $jwksUri = null,
        string|null $clientId = null,
        string|null $clientSecret = null
    ): AuthServerInterface;
}
