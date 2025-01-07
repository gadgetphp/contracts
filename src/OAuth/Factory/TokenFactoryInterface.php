<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\AuthResponseInterface;
use Gadget\OAuth\Entity\TokenInterface;
use Psr\Http\Message\RequestInterface;

interface TokenFactoryInterface
{
    /**
     * @param AuthResponseInterface $authResponse
     * @return TokenInterface
     */
    public function createToken(AuthResponseInterface $authResponse): TokenInterface;


    /**
     * @param RequestInterface $request
     * @return TokenInterface
     */
    public function fromHttpRequest(RequestInterface $request): TokenInterface;


    /**
     * @param TokenInterface $token
     * @return TokenInterface
     */
    public function refreshToken(TokenInterface $token): TokenInterface;
}
