<?php

namespace Guzzle\Service\Resource;

use Guzzle\Service\Command\CommandInterface;

/**
 * Resource iterator factory used when explicitly mapping strings to iterator classes
 */
class MapResourceIteratorFactory extends AbstractResourceIteratorFactory
{
    /** @var array Associative array mapping iterator names to class names */
    protected $map;

    /** @param array $map Associative array mapping iterator names to class names */
    public function __construct(array $map)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getClassName(CommandInterface $command)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
