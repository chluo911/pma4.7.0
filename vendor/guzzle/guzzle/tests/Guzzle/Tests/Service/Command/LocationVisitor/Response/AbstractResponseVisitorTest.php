<?php

namespace Guzzle\Tests\Service\Command\LocationVisitor\Response;

use Guzzle\Tests\Service\Mock\Command\MockCommand;
use Guzzle\Http\Message\Response;

abstract class AbstractResponseVisitorTest extends \Guzzle\Tests\GuzzleTestCase
{
    /** @var Response */
    protected $response;

    /** @var MockCommand */
    protected $command;

    /** @var array */
    protected $value;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
