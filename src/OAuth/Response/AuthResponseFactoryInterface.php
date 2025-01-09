<?php

declare(strict_types=1);

namespace Gadget\OAuth\Response;

interface AuthResponseFactoryInterface
{
    /**
     * @param mixed $values
     * @return AuthResponseInterface
     */
    public function create(mixed $values): AuthResponseInterface;


    /**
     * @param string $state
     * @param string $code
     * @param string|null $error
     * @param string|null $errorDescription
     * @param string|null $errorUri
     *
     * @return AuthResponseInterface
     */
    public function createAuthCodeResponse(
        string $state,
        string $code,
        string|null $error = null,
        string|null $errorDescription = null,
        string|null $errorUri = null
    ): AuthResponseInterface;


    /**
     * @param string $state
     * @param string $idToken
     * @param string|null $tokenType
     * @param string|null $accessToken
     * @param int|null $expiresIn
     * @param string|null $error
     * @param string|null $errorDescription
     * @param string|null $errorUri
     *
     * @return AuthResponseInterface
     */
    public function createImplicitFlowResponse(
        string $state,
        string $idToken,
        string|null $tokenType = null,
        string|null $accessToken = null,
        int|null $expiresIn = null,
        string|null $error = null,
        string|null $errorDescription = null,
        string|null $errorUri = null
    ): AuthResponseInterface;
}
