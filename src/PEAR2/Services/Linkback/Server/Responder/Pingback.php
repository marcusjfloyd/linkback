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
namespace PEAR2\Services\Linkback\Server\Responder;

/**
 * Sends pingback responses back to the client.
 *
 * @category Services
 * @package  PEAR2\Services\Linkback
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link     http://pear2.php.net/package/Services_Linkback
 */
class Pingback extends Base
{
    /**
     * Send the given XML response back to the client.
     * Sends the correct headers.
     *
     * @param string $xml XML response to send
     *
     * @return void
     */
    public function sendXml($xml)
    {
        $this->sendHeader('Content-type: text/xml; charset=utf-8');
        $this->sendOutput($xml);
    }
}
?>
