<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Exception\ProcessFailedException;

/**
 * @author Sebastian Marek <proofek@gmail.com>
 */
class ProcessFailedExceptionTest extends TestCase
{
    /**
     * tests ProcessFailedException throws exception if the process was successful.
     */
    public function testProcessFailedExceptionThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * tests ProcessFailedException uses information from process output
     * to generate exception message.
     */
    public function testProcessFailedExceptionPopulatesInformationFromProcessOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests that ProcessFailedException does not extract information from
     * process output if it was previously disabled.
     */
    public function testDisabledOutputInFailedExceptionDoesNotPopulateOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
