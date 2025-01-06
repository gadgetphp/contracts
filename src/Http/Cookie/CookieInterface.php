<?php

declare(strict_types=1);

namespace Gadget\Http\Cookie;

interface CookieInterface
{
    /**
     * @return string
     */
    public function getKey(): string;


    /**
     * @return string
     */
    public function getName(): string;


    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name): self;


    /**
     * @return string|null
     */
    public function getValue(): string|null;


    /**
     * @param string|null $value
     * @return self
     */
    public function setValue(string|null $value): self;


    /**
     * @return string|null
     */
    public function getDomain(): string|null;


    /**
     * @param string|null $domain
     * @return self
     */
    public function setDomain(string|null $domain): self;


    /**
     * @return string
     */
    public function getPath(): string;


    /**
     * @param string $path
     */
    public function setPath(string $path): static;


    /**
     * @return int|null
     */
    public function getMaxAge(): int|null;


    /**
     * @param int|null $maxAge
     * @return self
     */
    public function setMaxAge(int|null $maxAge): self;


    /**
     * @return int|null
     */
    public function getExpires(): int|null;


    /**
     * @param int|string|null $timestamp
     * @return self
     */
    public function setExpires(int|string|null $timestamp): self;


    /**
     * @return bool
     */
    public function getSecure();


    /**
     * @param bool $secure
     * @return self
     */
    public function setSecure(bool $secure): self;


    /**
     * @return bool
     */
    public function getHttpOnly();


    /**
     * @param bool $httpOnly
     * @return self
     */
    public function setHttpOnly(bool $httpOnly): self;


    /**
     * @return array<string,string|int|bool|null>
     */
    public function getValues(): array;


    /**
     * @param array<string,string|int|bool|null> $values
     * @return self
     */
    public function setValues(array $values): self;


    /**
     * @return string
     */
    public function __toString(): string;


    /**
     * @return bool
     */
    public function isExpired(): bool;


    /**
     * @param string $scheme
     * @param string $host
     * @param string $path
     * @return bool
     */
    public function matches(
        string $scheme,
        string $host,
        string $path
    ): bool;


    /**
     * @param string $domain
     * @return bool
     */
    public function matchesDomain(string $domain): bool;


    /**
     * @param string $path
     * @return bool
     */
    public function matchesPath(string $path): bool;
}
