<?php

declare(strict_types=1);

namespace Gadget\Http\Cookie;

interface CookieJarInterface
{
    /**
     * @return int
     */
    public function getDefaultMagAge(): int|null;


    /**
     * @param int|null $defaultMaxAge
     * @return self
     */
    public function setDefaultMagAge(int|null $defaultMaxAge): self;


    /**
     * @return CookieInterface[]
     */
    public function getCookies(): array;


    /**
     * @param (string|array<string,string|int|bool|null>|CookieInterface)[] $cookies
     * @return self
     */
    public function setCookies(array $cookies): self;


    /**
     * @param string $domain
     * @param string $path
     * @param string $name
     * @return CookieInterface
     */
    public function getCookie(string $domain, string $path, string $name): CookieInterface|null;


    /**
     * @param string|array<string,string|int|bool|null>|CookieInterface $cookie
     * @return bool
     */
    public function setCookie(string|array|CookieInterface $cookie): bool;


    /**
     * @return \Traversable<string,CookieInterface>
     */
    public function getIterator(): \Traversable;


    /**
     * @param string $scheme
     * @param string $host
     * @param string $path
     * @return CookieInterface[]
     */
    public function getMatches(
        string $scheme,
        string $host,
        string $path
    ): array;


    /**
     * @return self
     */
    public function clearExpired(): self;
}
