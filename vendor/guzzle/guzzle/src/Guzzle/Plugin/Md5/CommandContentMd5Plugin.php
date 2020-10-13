<?php

namespace Guzzle\Plugin\Md5;

use Guzzle\Common\Event;
use Guzzle\Http\Message\EntityEnclosingRequestInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener used to add a ContentMD5 header to the body of a command and adds ContentMD5 validation if the
 * ValidateMD5 option is not set to false on a command
 */
class CommandContentMd5Plugin implements EventSubscriberInterface
{
    /** @var string Parameter used to check if the ContentMD5 value is being added */
    protected $contentMd5Param;

    /** @var string Parameter used to check if validation should occur on the response */
    protected $validateMd5Param;

    /**
     * @param string $contentMd5Param  Parameter used to check if the ContentMD5 value is being added
     * @param string $validateMd5Param Parameter used to check if validation should occur on the response
     */
    public function __construct($contentMd5Param = 'ContentMD5', $validateMd5Param = 'ValidateMD5')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getSubscribedEvents()
    {
        return array('command.before_send' => array('onCommandBeforeSend', -255));
    }

    public function onCommandBeforeSend(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
