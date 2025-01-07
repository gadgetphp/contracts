<?php

declare(strict_types=1);

namespace Gadget\OAuth\Entity;

interface TokenInterface
{
    /**
     * @return string|null
     */
    public function getAccessToken(): string|null;


    /**
     * @return string|null
     */
    public function getIdToken(): string|null;


    /**
     * @return string|null
     */
    public function getRefreshToken(): string|null;


    /**
     * @return string
     */
    public function getTokenType(): string;


    /**
     * @return int
     */
    public function getExpiresIn(): int|null;


    /**
     * @return string
     */
    public function getScope(): string|null;
}
