<?php

declare(strict_types=1);

namespace Gadget\OAuth\Token;

use Gadget\OAuth\Request\AuthRequestInterface;
use Gadget\OAuth\Response\AuthResponseInterface;
use Gadget\OAuth\Server\AuthServerInterface;

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
