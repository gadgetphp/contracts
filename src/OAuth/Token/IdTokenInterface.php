<?php

declare(strict_types=1);

namespace Gadget\OAuth\Token;

interface IdTokenInterface extends \Stringable
{
    /**
     * REQUIRED. Issuer Identifier for the Issuer of the response. The iss value is a case-sensitive URL using the https
     * scheme that contains scheme, host, and optionally, port number and path components and no query or fragment
     * components.
     *
     * @return string
     */
    public function getIssuer(): string;


    /**
     * REQUIRED. Subject Identifier. A locally unique and never reassigned identifier within the Issuer for the
     * End-User, which is intended to be consumed by the Client, e.g., `24400320` or
     * `AItOawmwtWwcT0k51BayewNvutrJUqsvl6qs7A4`. It MUST NOT exceed 255 ASCII characters in length. The `sub` value is
     * a case-sensitive string.
     *
     * @return string
     */
    public function getSubject(): string;


    /**
     * REQUIRED. Audience(s) that this ID Token is intended for. It MUST contain the OAuth 2.0 `client_id` of the
     * Relying Party as an audience value. It MAY also contain identifiers for other audiences. In the general case, the
     * `aud` value is an array of case-sensitive strings. In the common special case when there is one audience, the
     * `aud` value MAY be a single case-sensitive string.
     *
     * @return string
     */
    public function getAudience(): string;


    /**
     * REQUIRED. Expiration time on or after which the ID Token MUST NOT be accepted by the RP when performing
     * authentication with the OP. The processing of this parameter requires that the current date/time MUST be before
     * the expiration date/time listed in the value. Implementers MAY provide for some small leeway, usually no more
     * than a few minutes, to account for clock skew. Its value is a JSON [RFC8259] number representing the number of
     * seconds from 1970-01-01T00:00:00Z as measured in UTC until the date/time. See RFC 3339 for details regarding
     * date/times in general and UTC in particular.
     *
     * NOTE: The ID Token expiration time is unrelated the lifetime of the authenticated session between the RP and the
     * OP.
     *
     * @return int
     */
    public function getExpirationTime(): int;


    /**
     * REQUIRED. Time at which the JWT was issued. Its value is a JSON number representing the number of seconds from
     * 1970-01-01T00:00:00Z as measured in UTC until the date/time.
     *
     * @return int
     */
    public function getIssuedAt(): int;


    /**
     * String value used to associate a Client session with an ID Token, and to mitigate replay attacks. The value is
     * passed through unmodified from the Authentication Request to the ID Token. If present in the ID Token, Clients
     * MUST verify that the nonce Claim Value is equal to the value of the nonce parameter sent in the Authentication
     * Request. If present in the Authentication Request, Authorization Servers MUST include a nonce Claim in the ID
     * Token with the Claim Value being the nonce value sent in the Authentication Request. Authorization Servers SHOULD
     * perform no other processing on nonce values used. The nonce value is a case-sensitive string.
     *
     * @return string
     */
    public function getNonce(): string;


    /**
     * @param string $claim
     * @return bool
     */
    public function hasClaim(string $claim): bool;


    /**
     * @param string $claim
     * @return mixed
     */
    public function getClaim(string $claim): mixed;


    /**
     * @return string
     */
    public function __toString(): string;
}
