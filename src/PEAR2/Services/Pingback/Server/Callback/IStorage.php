<?php
/**
 * This file is part of the PEAR2\Services\Pingback package.
 *
 * PHP version 5
 *
 * @category Services
 * @package  PEAR2\Services\Pingback
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link     http://pear2.php.net/package/Services_Pingback
 */
namespace PEAR2\Services\Pingback\Server\Callback;
use PEAR2\Services\Pingback as SPb;

/**
 * Pingback server IStorage interface: Store the validated pingback somewhere.
 *
 * @category Services
 * @package  PEAR2\Services\Pingback
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link     http://pear2.php.net/package/Services_Pingback
 */
interface IStorage
{
    /**
     * Stores the pingback somewhere.
     *
     * @param string $target     Target URI that should be linked in $source
     * @param string $source     Pingback source URI that should link to target
     * @param string $sourceBody Content of $source URI
     * @param object $res        HTTP response from fetching $source
     *
     * @return void
     *
     * @throws SPb\Exception When storing a pingback fatally failed
     */
    public function storePingback(
        $target, $source, $sourceBody, \HTTP_Request2_Response $res
    );

}

?>
