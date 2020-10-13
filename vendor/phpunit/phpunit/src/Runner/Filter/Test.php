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
class PHPUnit_Runner_Filter_Test extends RecursiveFilterIterator
{
    /**
     * @var string
     */
    protected $filter = null;

    /**
     * @var int
     */
    protected $filterMin;
    /**
     * @var int
     */
    protected $filterMax;

    /**
     * @param RecursiveIterator $iterator
     * @param string            $filter
     */
    public function __construct(RecursiveIterator $iterator, $filter)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $filter
     */
    protected function setFilter($filter)
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
}
