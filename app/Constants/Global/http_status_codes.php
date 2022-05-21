<?php

/*
|--------------------------------------------------------------------------
| HTTP Status Code Reference
|--------------------------------------------------------------------------
|
| The HTTP status codes that are used in the codebase.
|
| NOTE:
| The status code 401 is reserved by Sanctum where user authentication has
| failed. Please DO NOT used this code manually at any time.
|
| Please be mindful using the HTTP status codes. There should be very few
| number of codes that are manually overridden and returned by the code.
| Majority of the codes are naturally handled by the Internet protocols
| automatically.
|
| Use this document as reference.
|
*/

/**
 * The server has received the request headers and the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request). Sending a large request body to a server after a request has been rejected for inappropriate headers would be inefficient. To have a server check the request's headers, a client must send Expect: 100-continue as a header in its initial request and receive a 100 Continue status code in response before sending the body. If the client receives an error code such as 403 (Forbidden) or 405 (Method Not Allowed) then it shouldn't send the request's body. The response 417 Expectation Failed indicates that the request should be repeated without the Expect header as it indicates that the server doesn't support expectations (this is the case, for example, of HTTP/1.0 servers).
 */
defined('HTTP_STATUS_CODE_100_CONTINUE') || define('HTTP_STATUS_CODE_100_CONTINUE', 100);


/**
 * The requester has asked the server to switch protocols and the server has agreed to do so.
 */
defined('HTTP_STATUS_CODE_101_SWITCHING_PROTOCOLS') || define('HTTP_STATUS_CODE_101_SWITCHING_PROTOCOLS', 101);

/**
 * A WebDAV request may contain many sub-requests involving file operations, requiring a long time to complete the request. This code indicates that the server has received and is processing the request, but no response is available yet. This prevents the client from timing out and assuming the request was lost. (WebDAV; RFC 2518)
 */
defined('HTTP_STATUS_CODE_102_PROCESSING') || define('HTTP_STATUS_CODE_102_PROCESSING', 102);

/**
 * Used to return some response headers before final HTTP message. (RFC 8297)
 */
defined('HTTP_STATUS_CODE_103_EARLY_HINTS') || define('HTTP_STATUS_CODE_103_EARLY_HINTS', 103);

/**
 * Standard response for successful HTTP requests. The actual response will depend on the request method used. In a GET request, the response will contain an entity corresponding to the requested resource. In a POST request, the response will contain an entity describing or containing the result of the action.
 */
defined('HTTP_STATUS_CODE_200_OK') || define('HTTP_STATUS_CODE_200_OK', 200);

/**
 * The request has been fulfilled, resulting in the creation of a new resource.
 */
defined('HTTP_STATUS_CODE_201_CREATED') || define('HTTP_STATUS_CODE_201_CREATED', 201);

/**
 * The request has been accepted for processing, but the processing has not been completed. The request might or might not be eventually acted upon, and may be disallowed when processing occurs.
 */
defined('HTTP_STATUS_CODE_202_ACCEPTED') || define('HTTP_STATUS_CODE_202_ACCEPTED', 202);

/**
 * The server is a transforming proxy (e.g. a Web accelerator) that received a 200 OK from its origin, but is returning a modified version of the origin's response. (since HTTP/1.1)
 */
defined('HTTP_STATUS_CODE_203_NON_AUTHORITATIVE_INFORMATION') || define('HTTP_STATUS_CODE_203_NON_AUTHORITATIVE_INFORMATION', 203);


/**
 * The server successfully processed the request, and is not returning any content.
 */
defined('HTTP_STATUS_CODE_204_NO_CONTENT') || define('HTTP_STATUS_CODE_204_NO_CONTENT', 204);


/**
 * The server successfully processed the request, asks that the requester reset its document view, and is not returning any content.
 */
defined('HTTP_STATUS_CODE_205_RESET_CONTENT') || define('HTTP_STATUS_CODE_205_RESET_CONTENT', 205);

/**
 * The server is delivering only part of the resource (byte serving) due to a range header sent by the client. The range header is used by HTTP clients to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams. (RFC 7233)
 */
defined('HTTP_STATUS_CODE_206_PARTIAL_CONTENT') || define('HTTP_STATUS_CODE_206_PARTIAL_CONTENT', 206);

/**
 * The message body that follows is by default an XML message and can contain a number of separate response codes, depending on how many sub-requests were made. (WebDAV; RFC 4918)
 */
defined('HTTP_STATUS_CODE_207_MULTI_STATUS') || define('HTTP_STATUS_CODE_207_MULTI_STATUS', 207);

/**
 * The members of a DAV binding have already been enumerated in a preceding part of the (multistatus) response, and are not being included again.(WebDAV; RFC 5842)
 */
defined('HTTP_STATUS_CODE_208_ALREADY_REPORTED') || define('HTTP_STATUS_CODE_208_ALREADY_REPORTED', 208);

/**
 * The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance. (RFC 3229)
 */
defined('HTTP_STATUS_CODE_226_IM_USED') || define('HTTP_STATUS_CODE_226_IM_USED', 226);

/**
 * Indicates multiple options for the resource from which the client may choose (via agent-driven content negotiation). For example, this code could be used to present multiple video format options, to list files with different filename extensions, or to suggest word-sense disambiguation.
 */
defined('HTTP_STATUS_CODE_300_MULTIPLE_CHOICES') || define('HTTP_STATUS_CODE_300_MULTIPLE_CHOICES', 300);

/**
 * This and all future requests should be directed to the given URI.
 */
defined('HTTP_STATUS_CODE_301_MOVED_PERMANENTLY') || define('HTTP_STATUS_CODE_301_MOVED_PERMANENTLY', 301);

/**
 * Tells the client to look at (browse to) another URL. 302 has been superseded by 303 and 307. This is an example of industry practice contradicting the standard. The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect (the original describing phrase was "Moved Temporarily"), but popular browsers implemented 302 with the functionality of a 303 See Other. Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours. However, some Web applications and frameworks use the 302 status code as if it were the 303. (Previously "Moved temporarily")
 */
defined('HTTP_STATUS_CODE_302_FOUND') || define('HTTP_STATUS_CODE_302_FOUND', 302);

/**
 * The response to the request can be found under another URI using the GET method. When received in response to a POST (or PUT/DELETE), the client should presume that the server has received the data and should issue a new GET request to the given URI. (since HTTP/1.1)
 */
defined('HTTP_STATUS_CODE_303_SEE_OTHER') || define('HTTP_STATUS_CODE_303_SEE_OTHER', 303);

/**
 * Indicates that the resource has not been modified since the version specified by the request headers If-Modified-Since or If-None-Match. In such case, there is no need to retransmit the resource since the client still has a previously-downloaded copy. (RFC 7232)
 */
defined('HTTP_STATUS_CODE_304_NOT_MODIFIED') || define('HTTP_STATUS_CODE_304_NOT_MODIFIED', 304);

/**
 * The requested resource is available only through a proxy, the address for which is provided in the response. For security reasons, many HTTP clients (such as Mozilla Firefox and Internet Explorer) do not obey this status code. (since HTTP/1.1)
 */
defined('HTTP_STATUS_CODE_305_USE_PROXY') || define('HTTP_STATUS_CODE_305_USE_PROXY', 305);

/**
 * No longer used. Originally meant "Subsequent requests should use the specified proxy."
 */
defined('HTTP_STATUS_CODE_306_SWITCH_PROXY') || define('HTTP_STATUS_CODE_306_SWITCH_PROXY', 306);

/**
 * In this case, the request should be repeated with another URI; however, future requests should still use the original URI. In contrast to how 302 was historically implemented, the request method is not allowed to be changed when reissuing the original request. For example, a POST request should be repeated using another POST request. (since HTTP/1.1)
 */
defined('HTTP_STATUS_CODE_307_TEMPORARY_REDIRECT') || define('HTTP_STATUS_CODE_307_TEMPORARY_REDIRECT', 307);

/**
 * The request and all future requests should be repeated using another URI. 307 and 308 parallel the behaviors of 302 and 301, but do not allow the HTTP method to change. So, for example, submitting a form to a permanently redirected resource may continue smoothly. (RFC 7538)
 */
defined('HTTP_STATUS_CODE_308_PERMANENT_REDIRECT') || define('HTTP_STATUS_CODE_308_PERMANENT_REDIRECT', 308);

/**
 * The server cannot or will not process the request due to an apparent client error (e.g., malformed request syntax, size too large, invalid request message framing, or deceptive request routing).
 */
defined('HTTP_STATUS_CODE_400_BAD_REQUEST') || define('HTTP_STATUS_CODE_400_BAD_REQUEST', 400);

/**
 * Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource. See Basic access authentication and Digest access authentication. 401 semantically means "unauthorised", the user does not have valid authentication credentials for the target resource.
 * Note: Some sites incorrectly issue HTTP 401 when an IP address is banned from the website (usually the website domain) and that specific address is refused permission to access a website. (RFC 7235)
 */
defined('HTTP_STATUS_CODE_401_UNAUTHORIZED') || define('HTTP_STATUS_CODE_401_UNAUTHORIZED', 401);

/**
 * Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, as proposed, for example, by GNU Taler, but that has not yet happened, and this code is not widely used. Google Developers API uses this status if a particular developer has exceeded the daily limit on requests. Sipgate uses this code if an account does not have sufficient funds to start a call. Shopify uses this code when the store has not paid their fees and is temporarily disabled. Stripe uses this code for failed payments where parameters were correct, for example blocked fraudulent payments.
 */
defined('HTTP_STATUS_CODE_402_PAYMENT_REQUIRED') || define('HTTP_STATUS_CODE_402_PAYMENT_REQUIRED', 402);

/**
 * The request contained valid data and was understood by the server, but the server is refusing action. This may be due to the user not having the necessary permissions for a resource or needing an account of some sort, or attempting a prohibited action (e.g. creating a duplicate record where only one is allowed). This code is also typically used if the request provided authentication by answering the WWW-Authenticate header field challenge, but the server did not accept that authentication. The request should not be repeated.
 */
defined('HTTP_STATUS_CODE_403_FORBIDDEN') || define('HTTP_STATUS_CODE_403_FORBIDDEN', 403);

/**
 * The requested resource could not be found but may be available in the future. Subsequent requests by the client are permissible.
 */
defined('HTTP_STATUS_CODE_404_NOT_FOUND') || define('HTTP_STATUS_CODE_404_NOT_FOUND', 404);

/**
 * A request method is not supported for the requested resource; for example, a GET request on a form that requires data to be presented via POST, or a PUT request on a read-only resource.
 */
defined('HTTP_STATUS_CODE_405_METHOD_NOT_ALLOWED') || define('HTTP_STATUS_CODE_405_METHOD_NOT_ALLOWED', 405);

/**
 * The requested resource is capable of generating only content not acceptable according to the Accept headers sent in the request. See Content negotiation.
 */
defined('HTTP_STATUS_CODE_406_NOT_ACCEPTABLE') || define('HTTP_STATUS_CODE_406_NOT_ACCEPTABLE', 406);

/**
 * The client must first authenticate itself with the proxy. (RFC 7235)
 */
defined('HTTP_STATUS_CODE_407_PROXY_AUTHENTICATION_REQUIRED') || define('HTTP_STATUS_CODE_407_PROXY_AUTHENTICATION_REQUIRED', 407);

/**
 * The server timed out waiting for the request. According to HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time."
 */
defined('HTTP_STATUS_CODE_408_REQUEST_TIMEOUT') || define('HTTP_STATUS_CODE_408_REQUEST_TIMEOUT', 408);

/**
 * Indicates that the request could not be processed because of conflict in the current state of the resource, such as an edit conflict between multiple simultaneous updates.
 */
defined('HTTP_STATUS_CODE_409_CONFLICT') || define('HTTP_STATUS_CODE_409_CONFLICT', 409);

/**
 * Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource in the future. Clients such as search engines should remove the resource from their indices. Most use cases do not require clients and search engines to purge the resource, and a "404 Not Found" may be used instead.
 */
defined('HTTP_STATUS_CODE_410_GONE') || define('HTTP_STATUS_CODE_410_GONE', 410);

/**
 * The request did not specify the length of its content, which is required by the requested resource.
 */
defined('HTTP_STATUS_CODE_411_LENGTH_REQUIRED') || define('HTTP_STATUS_CODE_411_LENGTH_REQUIRED', 411);

/**
 * The server does not meet one of the preconditions that the requester put on the request header fields. (RFC 7232)
 */
defined('HTTP_STATUS_CODE_412_PRECONDITION_FAILED') || define('HTTP_STATUS_CODE_412_PRECONDITION_FAILED', 412);

/**
 * The request is larger than the server is willing or able to process. Previously called "Request Entity Too Large". (RFC 7231)
 */
defined('HTTP_STATUS_CODE_413_PAYLOAD_TOO_LARGE') || define('HTTP_STATUS_CODE_413_PAYLOAD_TOO_LARGE', 413);

/**
 * The URI provided was too long for the server to process. Often the result of too much data being encoded as a query-string of a GET request, in which case it should be converted to a POST request. Called "Request-URI Too Long" previously. (RFC 7231)
 */
defined('HTTP_STATUS_CODE_414_URI_TOO_LONG') || define('HTTP_STATUS_CODE_414_URI_TOO_LONG', 414);

/**
 * The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format. (RFC 7231)
 */
defined('HTTP_STATUS_CODE_415_UNSUPPORTED_MEDIA_TYPE ') || define('HTTP_STATUS_CODE_415_UNSUPPORTED_MEDIA_TYPE ', 415);

/**
 * The client has asked for a portion of the file (byte serving), but the server cannot supply that portion. For example, if the client asked for a part of the file that lies beyond the end of the file. Called "Requested Range Not Satisfiable" previously. (RFC 7233)
 */
defined('HTTP_STATUS_CODE_416_RANGE_NOT_SATISFIABLE') || define('HTTP_STATUS_CODE_416_RANGE_NOT_SATISFIABLE', 416);

/**
 * The server cannot meet the requirements of the Expect request-header field.
 */
defined('HTTP_STATUS_CODE_417_EXPECTATION_FAILED') || define('HTTP_STATUS_CODE_417_EXPECTATION_FAILED', 417);

/**
 * This code was defined in 1998 as one of the traditional IETF April Fools' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers. The RFC specifies this code should be returned by teapots requested to brew coffee. This HTTP status is used as an Easter egg in some websites, such as Google.com's I'm a teapot easter egg. (RFC 2324, RFC 7168)
 */
defined('HTTP_STATUS_CODE_418_I_AM_A_TEAPOT') || define('HTTP_STATUS_CODE_418_I_AM_A_TEAPOT', 418);

/**
 * The request was directed at a server that is not able to produce a response (for example because of connection reuse). (RFC 7540)
 */
defined('HTTP_STATUS_CODE_421_MISDIRECTED_REQUEST') || define('HTTP_STATUS_CODE_421_MISDIRECTED_REQUEST', 421);

/**
 * The request was well-formed but was unable to be followed due to semantic errors. (WebDAV; RFC 4918)
 */
defined('HTTP_STATUS_CODE_422_UNPROCESSABLE_ENTITY') || define('HTTP_STATUS_CODE_422_UNPROCESSABLE_ENTITY', 422);

/**
 * The resource that is being accessed is locked. (WebDAV; RFC 4918)
 */
defined('HTTP_STATUS_CODE_423_LOCKED') || define('HTTP_STATUS_CODE_423_LOCKED', 423);

/**
 * The request failed because it depended on another request and that request failed (e.g., a PROPPATCH). (WebDAV; RFC 4918)
 */
defined('HTTP_STATUS_CODE_424_FAILED_DEPENDENCY') || define('HTTP_STATUS_CODE_424_FAILED_DEPENDENCY', 424);

/**
 * Indicates that the server is unwilling to risk processing a request that might be replayed. (RFC 8470)
 */
defined('HTTP_STATUS_CODE_425_TOO_EARLY') || define('HTTP_STATUS_CODE_425_TOO_EARLY', 425);

/**
 * The client should switch to a different protocol such as TLS/1.0, given in the Upgrade header field.
 */
defined('HTTP_STATUS_CODE_426_UPGRADE_REQUIRED') || define('HTTP_STATUS_CODE_426_UPGRADE_REQUIRED', 426);

/**
 * The origin server requires the request to be conditional. Intended to prevent the 'lost update' problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict. (RFC 6585)
 */
defined('HTTP_STATUS_CODE_428_PRECONDITION_REQUIRED') || define('HTTP_STATUS_CODE_428_PRECONDITION_REQUIRED', 428);

/**
 * The user has sent too many requests in a given amount of time. Intended for use with rate-limiting schemes. (RFC 6585)
 */
defined('HTTP_STATUS_CODE_429_TOO_MANY_REQUESTS') || define('HTTP_STATUS_CODE_429_TOO_MANY_REQUESTS', 429);


/**
 * The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large. (RFC 6585)
 */
defined('HTTP_STATUS_CODE_431_REQUEST_HEADER_FIELDS_TOO_LARGE') || define('HTTP_STATUS_CODE_431_REQUEST_HEADER_FIELDS_TOO_LARGE', 431);

/**
 * A server operator has received a legal demand to deny access to a resource or to a set of resources that includes the requested resource. The code 451 was chosen as a reference to the novel Fahrenheit 451 (see the Acknowledgements in the RFC). (RFC 7725)
 */
defined('HTTP_STATUS_CODE_451_UNAVAILABLE_FOR_LEGAL_REASONS') || define('HTTP_STATUS_CODE_451_UNAVAILABLE_FOR_LEGAL_REASONS', 451);

/**
 * A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.
 */
defined('HTTP_STATUS_CODE_500_INTERNAL_SERVER_ERROR') || define('HTTP_STATUS_CODE_500_INTERNAL_SERVER_ERROR', 500);

/**
 * The server either does not recognize the request method, or it lacks the ability to fulfil the request. Usually this implies future availability (e.g., a new feature of a web-service API).
 */
defined('HTTP_STATUS_CODE_501_NOT_IMPLEMENTED') || define('HTTP_STATUS_CODE_501_NOT_IMPLEMENTED', 501);

/**
 * The server was acting as a gateway or proxy and received an invalid response from the upstream server.
 */
defined('HTTP_STATUS_CODE_502_BAD_GATEWAY') || define('HTTP_STATUS_CODE_502_BAD_GATEWAY', 502);

/**
 * The server cannot handle the request (because it is overloaded or down for maintenance). Generally, this is a temporary state.
 */
defined('HTTP_STATUS_CODE_503_SERVICE_UNAVAILABLE') || define('HTTP_STATUS_CODE_503_SERVICE_UNAVAILABLE', 503);

/**
 * The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.
 */
defined('HTTP_STATUS_CODE_504_GATEWAY_TIMEOUT') || define('HTTP_STATUS_CODE_504_GATEWAY_TIMEOUT', 504);

/**
 * The server does not support the HTTP protocol version used in the request.
 */
defined('HTTP_STATUS_CODE_505_HTTP_VERSION_NOT_SUPPORTED') || define('HTTP_STATUS_CODE_505_HTTP_VERSION_NOT_SUPPORTED', 505);

/**
 * Transparent content negotiation for the request results in a circular reference. (RFC 2295)
 */
defined('HTTP_STATUS_CODE_506_VARIANT_ALSO_NEGOTIATES') || define('HTTP_STATUS_CODE_506_VARIANT_ALSO_NEGOTIATES', 506);

/**
 * The server is unable to store the representation needed to complete the request. (WebDAV; RFC 4918)
 */
defined('HTTP_STATUS_CODE_507_INSUFFICIENT_STORAGE') || define('HTTP_STATUS_CODE_507_INSUFFICIENT_STORAGE', 507);

/**
 * The server detected an infinite loop while processing the request (sent instead of 208 Already Reported). (WebDAV; RFC 5842)
 */
defined('HTTP_STATUS_CODE_508_LOOP_DETECTED') || define('HTTP_STATUS_CODE_508_LOOP_DETECTED', 508);

/**
 * Further extensions to the request are required for the server to fulfil it. (RFC 2774)
 */
defined('HTTP_STATUS_CODE_510_NOT_EXTENDED') || define('HTTP_STATUS_CODE_510_NOT_EXTENDED', 510);

/**
 * The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot). (RFC 6585)
 */
defined('HTTP_STATUS_CODE_511_NETWORK_AUTHENTICATION_REQUIRED') || define('HTTP_STATUS_CODE_511_NETWORK_AUTHENTICATION_REQUIRED', 511);
