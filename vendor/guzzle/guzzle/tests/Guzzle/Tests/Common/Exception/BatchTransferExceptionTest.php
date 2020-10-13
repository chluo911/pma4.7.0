<?php

namespace Guzzle\Tests\Common\Exception;

use Guzzle\Batch\Exception\BatchTransferException;

class BatchTransferExceptionTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testContainsBatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
