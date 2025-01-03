<?php

declare(strict_types=1);

namespace Gadget\OAuth\Entity;

interface TokenInterface
{
    /**
     * @param 'access'|'refresh'|'id' $name
     * @return string
     */
    public function getToken(string $name): string|null;


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
