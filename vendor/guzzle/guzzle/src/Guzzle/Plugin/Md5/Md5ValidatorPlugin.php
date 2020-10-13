<?php

namespace Guzzle\Plugin\Md5;

use Guzzle\Common\Event;
use Guzzle\Common\Exception\UnexpectedValueException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Ensures that an the MD5 hash of an entity body matches the Content-MD5
 * header (if set) of an HTTP response.  An exception is thrown if the
 * calculated MD5 does not match the expected MD5.
 */
class Md5ValidatorPlugin implements EventSubscriberInterface
{
    /** @var int Maximum Content-Length in bytes to validate */
    protected $contentLengthCutoff;

    /** @var bool Whether or not to compare when a Content-Encoding is present */
    protected $contentEncoded;

    /**
     * @param bool     $contentEncoded      Calculating the MD5 hash of an entity body where a Content-Encoding was
     *                                      applied is a more expensive comparison because the entity body will need to
     *                                      be compressed in order to get the correct hash.  Set to FALSE to not
     *                                      validate the MD5 hash of an entity body with an applied Content-Encoding.
     * @param bool|int $contentLengthCutoff Maximum Content-Length (bytes) in which a MD5 hash will be validated. Any
     *                                      response with a Content-Length greater than this value will not be validated
     *                                      because it will be deemed too memory intensive.
     */
    public function __construct($contentEncoded = true, $contentLengthCutoff = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getSubscribedEvents()
    {
        return array('request.complete' => array('onRequestComplete', 255));
    }

    /**
     * {@inheritdoc}
     * @throws UnexpectedValueException
     */
    public function onRequestComplete(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
