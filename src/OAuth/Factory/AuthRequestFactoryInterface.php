<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\AuthRequestInterface;
use Gadget\OAuth\Entity\AuthServerInterface;
use Gadget\OAuth\Entity\PkceInterface;

interface AuthRequestFactoryInterface
{
    /**
     * @param mixed $values
     * @return AuthRequestInterface
     */
    public function create(mixed $values): AuthRequestInterface;


    /**
     * @param AuthServerInterface|null $authServer
     * @param string|null $redirectUri
     * @param string|null $scope
     * @param string|null $state
     * @param PkceInterface|null $pkce
     *
     * @return AuthRequestInterface
     */
    public function createAuthCodeRequest(
        AuthServerInterface|null $authServer = null,
        string|null $redirectUri = null,
        string|null $scope = null,
        string|null $state = null,
        PkceInterface|null $pkce = null
    ): AuthRequestInterface;


    /**
     * @param AuthServerInterface|null $authServer
     * @param string $responseType
     * @param string|null $redirectUri
     * @param string|null $scope
     * @param string|null $state
     * @param PkceInterface|null $pkce
     * @param string|null $responseMode
     * @param string|null $nonce
     * @param string|null $display
     * @param string|null $prompt
     * @param int|null $maxAge
     * @param string|null $uiLocales
     * @param string|null $idTokenHint
     * @param string|null $loginTokenHint
     *
     * @return AuthRequestInterface
     */
    public function createImplicitFlowRequest(
        AuthServerInterface|null $authServer = null,
        string $responseType = 'id_token',
        string|null $redirectUri = null,
        string|null $scope = null,
        string|null $state = null,
        PkceInterface|null $pkce = null,
        string|null $responseMode = null,
        string|null $nonce = null,
        string|null $display = null,
        string|null $prompt = null,
        int|null $maxAge = null,
        string|null $uiLocales = null,
        string|null $idTokenHint = null,
        string|null $loginTokenHint = null
    ): AuthRequestInterface;
}
