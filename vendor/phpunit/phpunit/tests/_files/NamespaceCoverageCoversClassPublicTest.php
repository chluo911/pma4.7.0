<?php
/**
 * @coversDefaultClass \Foo\CoveredClass
 */
class NamespaceCoverageCoversClassPublicTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::publicMethod
     */
    public function testSomething()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
