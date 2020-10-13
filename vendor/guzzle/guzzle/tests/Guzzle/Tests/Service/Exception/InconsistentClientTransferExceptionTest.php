<?php

namespace Guzzle\Tests\Service\Exception;

use Guzzle\Service\Exception\InconsistentClientTransferException;

class InconsistentClientTransferExceptionTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testStoresCommands()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
