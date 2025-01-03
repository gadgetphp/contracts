<?php

declare(strict_types=1);

namespace Gadget\OAuth\Factory;

use Gadget\OAuth\Entity\AuthRequestInterface;
use Gadget\OAuth\Entity\AuthServerInterface;
use Gadget\OAuth\Entity\PkceInterface;
use Psr\Http\Message\ResponseInterface;

interface AuthRequestFactoryInterface
{
    /**
     * @param AuthServerInterface|null $authServer
     * @param string|null $redirectUri
     * @param string|null $scope
     * @param string|null $state
     * @param PkceInterface|null $pkce
     *
     * @return AuthRequestInterface
     */
    public function createOAuthRequest(
        AuthServerInterface|null $authServer = null,
        string|null $redirectUri = null,
        string|null $scope = null,
        string|null $state = null,
        PkceInterface|null $pkce = null
    ): AuthRequestInterface;


    /**
     * @param AuthServerInterface|null $authServer
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
    public function createOIDCRequest(
        AuthServerInterface|null $authServer = null,
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


    /**
     * @param AuthRequestInterface $authRequest
     * @return ResponseInterface
     */
    public function toHttpResponse(AuthRequestInterface $authRequest): ResponseInterface;
}
