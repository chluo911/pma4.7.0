<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument\Token;

use SebastianBergmann\Comparator\ComparisonFailure;
use Prophecy\Comparator\Factory as ComparatorFactory;
use Prophecy\Util\StringUtil;

/**
 * Object state-checker token.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ObjectStateToken implements TokenInterface
{
    private $name;
    private $value;
    private $util;
    private $comparatorFactory;

    /**
     * Initializes token.
     *
     * @param string            $methodName
     * @param mixed             $value             Expected return value
     * @param null|StringUtil   $util
     * @param ComparatorFactory $comparatorFactory
     */
    public function __construct(
        $methodName,
        $value,
        StringUtil $util = null,
        ComparatorFactory $comparatorFactory = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Scores 8 if argument is an object, which method returns expected value.
     *
     * @param mixed $argument
     *
     * @return bool|int
     */
    public function scoreArgument($argument)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns false.
     *
     * @return bool
     */
    public function isLast()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns string representation for token.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            'state(%s(), %s)',
            $this->name,
            $this->util->stringify($this->value)
        );
    }
}
