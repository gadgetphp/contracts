<?php

declare(strict_types=1);

namespace Gadget\Http\Message;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;

interface RequestFactoryInterface
{
    /**
     * @param list<MiddlewareInterface> $middleware
     * @return list<MiddlewareInterface>
     */
    public function getMiddleware(array $middleware): array;


    /**
     * @param MessageFactoryInterface $messageFactory
     * @return ServerRequestInterface
     */
    public function createRequest(MessageFactoryInterface $messageFactory): ServerRequestInterface;
}
