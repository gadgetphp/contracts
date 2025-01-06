<?php

declare(strict_types=1);

namespace Gadget\Process;

interface ProcessInterface
{
    /**
     * Gets the command line to be executed.
     *
     * @return string
     */
    public function getCommandLine(): string;


    /**
     * Gets the environment variables.
     *
     * @return (string|\Stringable)[]
     */
    public function getEnv(): array;


    /**
     * Sets the environment variables.
     *
     * @param (string|\Stringable)[] $env The new environment variables
     * @return self
     */
    public function setEnv(array $env): self;


    /**
     * Gets the working directory.
     *
     * @return string
     */
    public function getWorkingDirectory(): string;


    /**
     * Sets the current working directory.
     *
     * @return self
     */
    public function setWorkingDirectory(string $cwd): self;


    /**
     * Gets the Process input.
     *
     * @return resource|string|\Iterator|null
     */
    public function getInput(): mixed;


    /**
     * Sets the input.
     *
     * @param resource|string|\Iterator|null
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


    public function getTimeout(): float|null;
    public function setTimeout(float|null $timeout): self;


    public function getIdleTimeout(): float|null;
    public function setIdleTimeout(float|null $timeout): static;


    public function getExitCode(): int|null;
    public function getExitCodeText(): string|null;


    public function hasBeenSignaled(): bool;
    public function getSignal(): int|null;


    public function getStatus(): string;


    /**
     * Runs the process.
     *
     * @param bool $throwOnError
     * @return int
     */
    public function run(bool $throwOnError = false): int;


    /**
     * Starts the process and returns after writing the input to `STDIN`.
     *
     * @return int
     */
    public function start(): int;


    public function wait(): int;


    public function waitUntil(callable $callback): bool;


    public function signal(int $signal): self;


    public function stop(float $timeout = 10, int|null $signal = null): ?int;
}
