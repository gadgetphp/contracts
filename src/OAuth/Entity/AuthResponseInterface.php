<?php

declare(strict_types=1);

namespace Gadget\OAuth\Entity;

/**
 * Represents the response from the authorization server to a given authorization request.
 *
 * @see https://www.oauth.com/oauth2-servers/authorization/the-authorization-response/
 * @see https://www.oauth.com/oauth2-servers/pkce/authorization-code-exchange/
 */
interface AuthResponseInterface
{
    /**
     * Authorization code which the client will later exchange for an access token.
     *
     * @return string
     */
    public function getCode(): string;


    /**
     * If the auth request contained a `state` parameter, the response must also include the exact value from the
     * request. The client will be using this to associate this response with the initial request.
     *
     * @return string
     */
    public function getState(): string;


    /**
     * Error code if an error has occurred processing the authentication request.
     *
     * The defined values for OAuth are:
     * - `invalid_request` - The request is missing a required parameter, includes an invalid parameter value, includes
     * a parameter more than once, or is otherwise malformed.
     * - `unauthorized_client` - The client is not authorized to request an authorization code using this method.
     * - `access_denied` - The resource owner or authorization server denied the request.
     * - `unsupported_response_type` - The authorization server does not support obtaining an authorization code using
     * this method.
     * - `invalid_scope` - The requested scope is invalid, unknown, or malformed.
     * - `server_error` - The authorization server encountered an unexpected condition that prevented it from fulfilling
     * the request.
     * - `temporarily_unavailable` - The authorization server is currently unable to handle the request due to a
     * temporary overloading or maintenance of the server.
     *
     * In addition OpenID Coonect has the following defined values:
     * - `interaction_required` - The Authorization Server requires End-User interaction of some form to proceed.
     * - `login_required` - The Authorization Server requires End-User authentication.
     * - `account_selection_required` - The End-User is REQUIRED to select a session at the Authorization Server.
     * - `consent_required` - The Authorization Server requires End-User consent.
     * - `invalid_request_uri` - The `request_uri` in the Authorization Request returns an error or contains invalid
     * data.
     * - `invalid_request_object` - The `request` parameter contains an invalid Request Object.
     * - `request_not_supported` - The OP does not support use of the `request` parameter.
     * - `request_uri_not_supported` - The OP does not support use of the `request_uri` parameter.
     * - `registration_not_supported` - The OP does not support use of the `registration` parameter.
     *
     * @return string|null
     *
     * @see https://openid.net/specs/openid-connect-core-1_0.html#AuthError
     */
    public function getError(): string|null;


    /**
     * Text providing additional information, used to assist the client developer in understanding the error that
     * occurred.
     *
     * @return string|null
     */
    public function getErrorDescription(): string|null;


    /**
     * A URI identifying a human-readable web page with information about the error, used to provide the client
     * developer with additional information about the error.
     *
     * @return string|null
     */
    public function getErrorUri(): string|null;
}
