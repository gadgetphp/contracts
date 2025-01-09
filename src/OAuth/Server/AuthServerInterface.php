<?php

declare(strict_types=1);

namespace Gadget\OAuth\Server;

interface AuthServerInterface
{
    /**
     * @return string
     */
    public function getAuthUri(): string;


    /**
     * @return string
     */
    public function getTokenUri(): string;


    /**
     * @return string
     */
    public function getJwksUri(): string;


    /**
     * @return string
     */
    public function getClientId(): string;


    /**
     * @return string
     */
    public function getClientSecret(): string;
}
