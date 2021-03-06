<?php
/**
 * This file is part of the PEAR2\Services\Linkback package.
 *
 * PHP version 5
 *
 * @category Services
 * @package  PEAR2\Services\Linkback
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link     http://pear2.php.net/package/Services_Linkback
 */
namespace PEAR2\Services\Linkback;

/**
 * Collection of constants used in the linkback code (client + server).
 *
 * @category Services
 * @package  PEAR2\Services\Linkback
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link     http://pear2.php.net/package/Services_Linkback
 */
class States
{
    /**
     * Linkback server did not return the correct HTTP status code
     */
    const HTTP_STATUS = 100;

    /**
     * Linkback server did not return the correct HTTP content type
     */
    const CONTENT_TYPE = 101;

    /**
     * Server callback object is invalid
     */
    const CALLBACK_INVALID = 150;

    /**
     * Remote URL does not have a linkback server
     */
    const PINGBACK_UNSUPPORTED = 200;

    /**
     * The given URI is invalid (not absolute, not http/https)
     */
    const INVALID_URI = 201;

    /**
     * The source document did not get loaded
     */
    const SOURCE_NOT_LOADED = 300;

    /**
     * The XML-RPC call had too few parameters and could not be processed.
     * Defined by "Specification for Fault Code Interoperability".
     */
    const PARAMETER_MISSING = -32602;

    /**
     * The XML-RPC method is not supported and cannot be handled.
     * Defined by "Specification for Fault Code Interoperability".
     */
    const METHOD_UNSUPPORTED = -32601;

    /**
     * The message is not a valid XML-RPC message.
     * Defined by "Specification for Fault Code Interoperability".
     */
    const MESSAGE_INVALID = -32600;

    /**
     * The source URI could not be retrieved.
     * Defined by the pingback specification.
     */
    const SOURCE_URI_NOT_FOUND = 16;

    /**
     * The source URI content does not contain a link to the target.
     * Defined by the pingback specification.
     */
    const NO_LINK_IN_SOURCE = 17;

    /**
     * The linkback is spam.
     * Defined by the pingback specification.
     */
    const SPAM = 18;

    /**
     * The specified target URI does not exist.
     * Defined by the pingback specification.
     */
    const TARGET_URI_NOT_FOUND = 32;

    /**
     * The linkback has already been registered.
     * Defined by the pingback specification.
     */
    const ALREADY_REGISTERED = 48;

    /**
     * Access denied.
     * Defined by the pingback specification.
     */
    const ACCESS_DENIED = 49;

    /**
     * The server could not communicate with an upstream server,
     * or received an error from an upstream server, and therefore
     * could not complete the request.
     * This is similar to HTTP's 402 Bad Gateway error.
     * Defined by the pingback specification.
     */
    const UPSTREAM_ERROR = 50;
}
?>
