<?php

declare(strict_types=1);

namespace Gadget\OAuth\Token;

interface TokenInterface
{
    /**
     * @return IdTokenInterface|null
     */
    public function getIdToken(): IdTokenInterface|null;


    /**
     * @return string
     */
    public function getTokenType(): string;


    /**
     * @return string|null
     */
    public function getAccessToken(): string|null;


    /**
     * @return string|null
     */
    public function getRefreshToken(): string|null;


    /**
     * @return int
     */
    public function getExpiresIn(): int|null;


    /**
     * @return string
     */
    public function getScope(): string|null;
}
