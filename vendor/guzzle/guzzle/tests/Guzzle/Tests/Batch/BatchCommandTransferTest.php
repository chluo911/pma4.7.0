<?php

namespace Guzzle\Tests\Batch;

use Guzzle\Batch\BatchCommandTransfer;
use Guzzle\Service\Client;
use Guzzle\Tests\Service\Mock\Command\MockCommand as Mc;

/**
 * @covers Guzzle\Batch\BatchCommandTransfer
 */
class BatchCommandTransferTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testCreatesBatchesBasedOnClient()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException Guzzle\Common\Exception\InvalidArgumentException
     */
    public function testEnsuresAllItemsAreCommands()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTransfersBatches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDoesNotTransfersEmptyBatches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException Guzzle\Service\Exception\InconsistentClientTransferException
     */
    public function testEnsuresAllCommandsUseTheSameClient()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
