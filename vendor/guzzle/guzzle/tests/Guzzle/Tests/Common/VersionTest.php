<?php

namespace Guzzle\Tests\Common;

use Guzzle\Common\Version;

/**
 * @covers Guzzle\Common\Version
 */
class VersionTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @expectedException \PHPUnit_Framework_Error_Deprecated
     */
    public function testEmitsWarnings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanSilenceWarnings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
