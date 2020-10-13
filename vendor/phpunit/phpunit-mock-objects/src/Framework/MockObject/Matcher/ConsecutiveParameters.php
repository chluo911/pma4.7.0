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
 * Invocation matcher which looks for sets of specific parameters in the invocations.
 *
 * Checks the parameters of the incoming invocations, the parameter list is
 * checked against the defined constraints in $parameters. If the constraint
 * is met it will return true in matches().
 *
 * It takes a list of match groups and and increases a call index after each invocation.
 * So the first invocation uses the first group of constraints, the second the next and so on.
 */
class PHPUnit_Framework_MockObject_Matcher_ConsecutiveParameters extends PHPUnit_Framework_MockObject_Matcher_StatelessInvocation
{
    /**
     * @var array
     */
    private $_parameterGroups = array();

    /**
     * @var array
     */
    private $_invocations = array();

    /**
     * @param array $parameterGroups
     */
    public function __construct(array $parameterGroups)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    public function toString()
    {
        $text = 'with consecutive parameters';

        return $text;
    }

    /**
     * @param  PHPUnit_Framework_MockObject_Invocation $invocation
     * @return bool
     */
    public function matches(PHPUnit_Framework_MockObject_Invocation $invocation)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function verify()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Verify a single invocation
     *
     * @param  PHPUnit_Framework_MockObject_Invocation      $invocation
     * @param  int                                          $callIndex
     * @throws PHPUnit_Framework_ExpectationFailedException
     */
    private function verifyInvocation(PHPUnit_Framework_MockObject_Invocation $invocation, $callIndex)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
