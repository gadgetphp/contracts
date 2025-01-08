<?php

declare(strict_types=1);

namespace Gadget\Process;

interface ProcessInterface
{
    /**
     * @param bool $throwOnError
     * @return self
     */
    public function run(bool $throwOnError = false): self;


    /**
     * @return self
     */
    public function start(): self;


    /**
     * @return self
     */
    public function wait(): self;


    /**
     * @param callable $callback
     * @return self
     */
    public function waitUntil(callable $callback): self;


    /**
     * @param int $signal
     * @return self
     */
    public function signal(int $signal): self;


    /**
     * @param float $timeout
     * @param int|null $signal
     * @return self
     */
    public function stop(
        float $timeout = 10,
        int|null $signal = null
    ): self;

    /**
     * @return string[]
     */
    public function getCommand(): array;


    /**
     * @param string[] $command
     * @return self
     */
    public function setCommand(array $command): self;


    /**
     * @return (string|\Stringable)[]
     */
    public function getEnv(): array;


    /**
     * @param (string|\Stringable)[] $env The new environment variables
     * @return self
     */
    public function setEnv(array $env): self;


    /**
     * @return string
     */
    public function getWorkingDirectory(): string;


    /**
     * @return self
     */
    public function setWorkingDirectory(string $cwd): self;


    /**
     * @return resource|string|\Iterator|null
     */
    public function getInput(): mixed;


    /**
     * @param resource|string|\Iterator|null $input
     * @return self
     */
    public function setInput(mixed $input): self;


    /**
     * @return (callable(string $type, string $data): mixed)|null
     */
    public function getOutputCallback(): callable|null;


    /**
     * @param (callable(string $type, string $data): mixed)|null $output
     * @return self
     */
    public function setOutputCallback(callable|null $output): self;


    /**
     * @return float|null
     */
    public function getTimeout(): float|null;


    /**
     * @param float|null $timeout
     * @return self
     */
    public function setTimeout(float|null $timeout): self;


    /**
     * @return float|null
     */
    public function getIdleTimeout(): float|null;


    /**
     * @param float|null $timeout
     * @return static
     */
    public function setIdleTimeout(float|null $timeout): static;


    /**
     * @return int|null
     */
    public function getExitCode(): int|null;


    /**
     * @return string|null
     */
    public function getExitCodeText(): string|null;


    /**
     * @return bool
     */
    public function hasBeenSignaled(): bool;


    /**
     * @return int|null
     */
    public function getSignal(): int|null;


    /**
     * @return string
     */
    public function getStatus(): string;
}
