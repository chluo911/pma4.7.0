<?php

namespace Guzzle\Tests\Service\Exception;

use Guzzle\Service\Exception\ValidationException;

class ValidationExceptionTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testCanSetAndRetrieveErrors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
