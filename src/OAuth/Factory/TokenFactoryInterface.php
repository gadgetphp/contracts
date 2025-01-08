<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\AuthRequestInterface;
use Gadget\OAuth\Entity\AuthResponseInterface;
use Gadget\OAuth\Entity\AuthServerInterface;
use Gadget\OAuth\Entity\TokenInterface;

interface TokenFactoryInterface
{
    /**
     * @param mixed $values
     * @return TokenInterface
     */
    public function create(mixed $values): TokenInterface;


    /**
     * @param AuthResponseInterface $authResponse
     * @return TokenInterface
     */
    public function createToken(
        AuthRequestInterface $authRequest,
        AuthResponseInterface $authResponse
    ): TokenInterface;


    /**
     * @param AuthServerInterface $authServer
     * @param TokenInterface $token
     * @return TokenInterface
     */
    public function refreshToken(
        AuthServerInterface $authServer,
        TokenInterface $token
    ): TokenInterface;
}
