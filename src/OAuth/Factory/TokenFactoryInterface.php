<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\AuthRequestInterface;
use Gadget\OAuth\Entity\AuthResponseInterface;
use Gadget\OAuth\Entity\TokenInterface;

interface TokenFactoryInterface
{
    /**
     * @param AuthResponseInterface $authResponse
     * @return TokenInterface
     */
    public function createToken(
        AuthRequestInterface $authRequest,
        AuthResponseInterface $authResponse
    ): TokenInterface;


    /**
     * @param TokenInterface $token
     * @return TokenInterface
     */
    public function refreshToken(TokenInterface $token): TokenInterface;
}
