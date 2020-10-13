<?php

namespace Guzzle\Tests\Service\Builder;

use Guzzle\Service\Builder\ServiceBuilderLoader;

/**
 * @covers Guzzle\Service\Builder\ServiceBuilderLoader
 */
class ServiceBuilderLoaderTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testBuildsServiceBuilders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException Guzzle\Service\Exception\ServiceNotFoundException
     * @expectedExceptionMessage foo is trying to extend a non-existent service: abstract
     */
    public function testThrowsExceptionWhenExtendingNonExistentService()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAllowsGlobalParameterOverrides()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function tstDoesNotErrorOnCircularReferences()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function configProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider configProvider
     */
    public function testCombinesConfigs($a, $b, $c)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
