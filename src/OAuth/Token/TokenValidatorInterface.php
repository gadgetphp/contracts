<?php

declare(strict_types=1);

namespace Gadget\OAuth\Token;

interface TokenValidatorInterface
{
    public function validate(TokenInterface $token): bool;
}
