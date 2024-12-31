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
     * @return ServerRequestInterface
     */
    public function createRequest(): ServerRequestInterface;


    /** @var string */
    public const HEAD = 'HEAD';
    /** @var string */
    public const GET = 'GET';
    /** @var string */
    public const POST = 'POST';
    /** @var string */
    public const PUT = 'PUT';
    /** @var string */
    public const PATCH = 'PATCH';
    /** @var string */
    public const DELETE = 'DELETE';
    /** @var string */
    public const PURGE = 'PURGE';
    /** @var string */
    public const OPTIONS = 'OPTIONS';
    /** @var string */
    public const TRACE = 'TRACE';
    /** @var string */
    public const CONNECT = 'CONNECT';
}
