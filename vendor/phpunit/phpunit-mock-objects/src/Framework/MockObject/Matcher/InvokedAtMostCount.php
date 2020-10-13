<?php
/*
 * This file is part of the PHPUnit_MockObject package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Invocation matcher which checks if a method has been invoked at least
 * N times.
 *
 * @since Class available since Release 2.2.0
 */
class PHPUnit_Framework_MockObject_Matcher_InvokedAtMostCount extends PHPUnit_Framework_MockObject_Matcher_InvokedRecorder
{
    /**
     * @var int
     */
    private $allowedInvocations;

    /**
     * @param int $allowedInvocations
     */
    public function __construct($allowedInvocations)
    {
        $this->allowedInvocations = $allowedInvocations;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return 'invoked at most ' . $this->allowedInvocations . ' times';
    }

    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws PHPUnit_Framework_ExpectationFailedException
     */
    public function verify()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
