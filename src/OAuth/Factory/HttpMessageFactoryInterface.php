<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\AuthRequestInterface;
use Gadget\OAuth\Entity\AuthResponseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

interface HttpMessageFactoryInterface
{
    /**
     * @param AuthRequestInterface $authRequest
     * @return UriInterface
     */
    public function createAuthRequestUri(AuthRequestInterface $authRequest): UriInterface;


    /**
     * @param RequestInterface $request
     * @return AuthResponseInterface
     */
    public function createAuthResponse(RequestInterface $request): AuthResponseInterface;
}
