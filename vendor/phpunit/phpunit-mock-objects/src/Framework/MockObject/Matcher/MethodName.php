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
 * Invocation matcher which looks for a specific method name in the invocations.
 *
 * Checks the method name all incoming invocations, the name is checked against
 * the defined constraint $constraint. If the constraint is met it will return
 * true in matches().
 *
 * @since Class available since Release 1.0.0
 */
class PHPUnit_Framework_MockObject_Matcher_MethodName extends PHPUnit_Framework_MockObject_Matcher_StatelessInvocation
{
    /**
     * @var PHPUnit_Framework_Constraint
     */
    protected $constraint;

    /**
     * @param  PHPUnit_Framework_Constraint|string
     * @throws PHPUnit_Framework_Constraint
     */
    public function __construct($constraint)
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
        return 'method name ' . $this->constraint->toString();
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
}
