<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\AuthResponseInterface;
use Psr\Http\Message\RequestInterface;

interface AuthResponseFactoryInterface
{
    /**
     * @param string $code
     * @param string $state
     * @param string|null $error
     * @param string|null $errorDescription
     * @param string|null $errorUri
     *
     * @return AuthResponseInterface
     */
    public function createAuthResponse(
        string $code,
        string $state,
        string|null $error = null,
        string|null $errorDescription = null,
        string|null $errorUri = null
    ): AuthResponseInterface;


    /**
     * @param RequestInterface $request
     * @return AuthResponseInterface
     */
    public function createFromRequest(RequestInterface $request): AuthResponseInterface;
}
