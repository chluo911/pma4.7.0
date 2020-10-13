<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @since Class available since Release 4.0.0
 */
abstract class PHPUnit_Runner_Filter_GroupFilterIterator extends RecursiveFilterIterator
{
    /**
     * @var array
     */
    protected $groupTests = array();

    /**
     * @param RecursiveIterator           $iterator
     * @param array                       $groups
     * @param PHPUnit_Framework_TestSuite $suite
     */
    public function __construct(RecursiveIterator $iterator, array $groups, PHPUnit_Framework_TestSuite $suite)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function accept()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    abstract protected function doAccept($hash);
}
