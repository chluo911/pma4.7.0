<?php

namespace Guzzle\Tests\Service\Command;

use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;

abstract class AbstractCommandTest extends \Guzzle\Tests\GuzzleTestCase
{
    protected function getClient()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
