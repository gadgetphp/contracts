<?php

declare(strict_types=1);

namespace Gadget\OAuth\Pkce;

/**
 * Proof Key for Code Exchange (abbreviated PKCE, pronounced “pixie”) is an extension to the authorization code flow to
 * prevent CSRF and authorization code injection attacks. The technique involves the client first creating a secret on
 * each authorization request, and then using that secret again when exchanging the authorization code for an access
 * token. This way if the code is intercepted, it will not be useful since the token request relies on the initial
 * secret.
 *
 * @see https://www.oauth.com/oauth2-servers/pkce/authorization-request/
 * @see https://www.oauth.com/oauth2-servers/pkce/authorization-code-exchange/
 */
interface PkceInterface
{
    /**
     * Cryptographically random string using the characters `A-Z`, `a-z`, `0-9`, and the punctuation characters `-._~`
     * (hyphen, period, underscore, and tilde), between 43 and 128 characters long.
     *
     * @return string
     */
    public function getCodeVerifier(): string;


    /**
     * For devices that can perform a SHA256 hash, the code challenge is a Base64-URL-encoded string of the SHA256 hash
     * of the code verifier. Clients that do not have the ability to perform a SHA256 hash are permitted to use the
     * plain code verifier string as the challenge, although that provides less security benefits so should really only
     * be used if absolutely necessary.
     *
     * @return string
     */
    public function getCodeChallenge(): string;


    /**
     * Either `plain` or `S256`, depending on whether the challenge is the plain verifier string or the SHA256 hash of
     * the string.
     *
     * @return string
     */
    public function getCodeChallengeMethod(): string;
}
