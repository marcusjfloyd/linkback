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
namespace PEAR2\Services\Pingback\Server\Callback\StorePingback;
use PEAR2\Services\Pingback\Server\Callback as SPbC;

/**
 * Stores the pingback in a class variable that can be accessed later.
 *
 * @category Services
 * @package  PEAR2\Services\Pingback
 * @author   Christian Weiske <cweiske@php.net>
 * @license  http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link     http://pear2.php.net/package/Services_Pingback
 */
class Object implements SPbC\IStorage
{
    public $target;
    public $source;
    public $sourceBody;
    public $res;

    /**
     * Stores the pingback in a class variable
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
    ) {
        $this->target = $target;
        $this->source = $source;
        $this->sourceBody = $sourceBody;
        $this->res = $res;
    }

}

?>
