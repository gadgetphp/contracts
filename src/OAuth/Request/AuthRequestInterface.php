<?php

declare(strict_types=1);

namespace Gadget\OAuth\Request;

use Gadget\OAuth\Pkce\PkceInterface;
use Gadget\OAuth\Server\AuthServerInterface;

/**
 * Represents the request sent to the authorization server to begin the OAuth process. Clients may use either the
 * authorization code grant type or the implicit grant. Along with the type of grant specified by the `response_type`
 * parameter, the request will have a number of other parameters to indicate the specifics of the request.
 *
 * @see https://www.oauth.com/oauth2-servers/authorization/the-authorization-request/
 * @see https://www.oauth.com/oauth2-servers/pkce/authorization-request/
 * @see https://openid.net/specs/openid-connect-core-1_0.html#AuthRequest
 */
interface AuthRequestInterface
{
    /**
     * @return AuthServerInterface
     */
    public function getAuthServer(): AuthServerInterface;


    /**
     * Value must be set to `code`.
     *
     * @return string
     */
    public function getResponseType(): string;


    /**
     * Not required by the spec, but your service should require it. This URL must match one of the URLs the developer
     * registered when creating the application, and the authorization server should reject the request if it does not
     * match.
     *
     * @return string
     */
    public function getRedirectUri(): string;


    /**
     * The request may have one or more scope values indicating additional access requested by the application. The
     * authorization server will need to display the requested scopes to the user.
     *
     * @return string
     */
    public function getScope(): string|null;


    /**
     * Used by the application to store request-specific data and/or prevent CSRF attacks. The authorization server must
     * return the unmodified state value back to the application.
     *
     * @return string
     */
    public function getState(): string;


    /**
     * If the authorization server supports the PKCE extension then the `code_challenge` and `code_challenge_method`
     * parametersm will also be present. These must be remembered by the authorization server between issuing the
     * authorization code and issuing the access token.
     *
     * @return PkceInterface|null
     */
    public function getPkce(): PkceInterface|null;


/**
 * Represents an OpenID Connect authentication request, which is an extension of an OAuth 2.0 authentication request.
 *
 * @see https://openid.net/specs/openid-connect-core-1_0.html#AuthRequest
 */
#region OpenID Connect properties

    /**
     * Informs the Authorization Server of the mechanism to be used for returning parameters from the Authorization
     * Endpoint. This use of this parameter is NOT RECOMMENDED when the Response Mode that would be requested is the
     * default mode specified for the Response Type.
     *
     * @return string|null
     */
    public function getResponseMode(): string|null;


    /**
     * String value used to associate a Client session with an ID Token, and to mitigate replay attacks. The value is
     * passed through unmodified from the Authentication Request to the ID Token. Sufficient entropy MUST be present in
     * the nonce values used to prevent attackers from guessing values.
     *
     * @return string|null
     */
    public function getNonce(): string|null;


    /**
     * Specifies how the Authorization Server displays the authentication and consent user interface pages to the
     * End-User.
     *
     * The defined values are (The Authorization Server SHOULD display...):
     * - `page` - Full User Agent page view. If `display` is not specified, this is the default display mode.
     * - `popup` - Popup User Agent window.
     * - `touch` - For devices that leverages a touch interface
     * - `wap` - For "feature phone" type displays
     *
     * @return string|null
     */
    public function getDisplay(): string|null;


    /**
     * Space-delimited, case-sensitive list that specifies whether the Authorization Server prompts the End-User for
     * reauthentication and consent.
     *
     * The defined values are:
     * - `none` - The Authorization Server MUST NOT display any authentication or consent user interface pages.
     * - `login` - The Authorization Server SHOULD prompt the End-User for reauthentication.
     * - `consent` - The Authorization Server SHOULD prompt the End-User for consent before returning information to the
     * Client.
     * - `select_account` - The Authorization Server SHOULD prompt the End-User to select a user account.
     *
     * @return string
     */
    public function getPrompt(): string|null;


    /**
     * Maximum Authentication Age.
     *
     * @return int|null
     */
    public function getMaxAge(): int|null;


    /**
     * End-User's preferred languages and scripts for the user interface, represented as a space-separated list of
     * language tag values, ordered by preference.
     *
     * @return string|null
     */
    public function getUiLocales(): string|null;


    /**
     * ID Token previously issued by the Authorization Server being passed as a hint about the End-User's current or
     * past authenticated session with the Client.
     *
     * @return string|null
     */
    public function getIdTokenHint(): string|null;


    /**
     * Hint to the Authorization Server about the login identifier the End-User might use to log in (if necessary).
     *
     * @return string|null
     */
    public function getLoginTokenHint(): string|null;
#endregion OpenID Connect properties


    /**
     * @return string
     */
    public function getUri(): string;
}
