<?php

declare(strict_types=1);

namespace Gadget\Http\Client;

use Gadget\Http\Message\RequestFactoryInterface;
use Gadget\Http\Message\ResponseHandlerInterface;
use Psr\Http\Client\ClientInterface as PsrHttpClientInterface;

interface ClientInterface extends PsrHttpClientInterface
{
    /**
     * @template TResponse
     * @param RequestFactoryInterface $requestFactory
     * @param ResponseHandlerInterface<TResponse> $responseHandler
     * @return TResponse
     */
    public function sendHttpRequest(
        RequestFactoryInterface $requestFactory,
        ResponseHandlerInterface $responseHandler
    ): mixed;
}
