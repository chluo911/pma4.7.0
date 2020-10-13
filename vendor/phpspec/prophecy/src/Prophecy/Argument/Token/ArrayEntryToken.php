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

use Prophecy\Exception\InvalidArgumentException;

/**
 * Array entry token.
 *
 * @author Boris Mikhaylov <kaguxmail@gmail.com>
 */
class ArrayEntryToken implements TokenInterface
{
    /** @var \Prophecy\Argument\Token\TokenInterface */
    private $key;
    /** @var \Prophecy\Argument\Token\TokenInterface */
    private $value;

    /**
     * @param mixed $key   exact value or token
     * @param mixed $value exact value or token
     */
    public function __construct($key, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Scores half of combined scores from key and value tokens for same entry. Capped at 8.
     * If argument implements \ArrayAccess without \Traversable, then key token is restricted to ExactValueToken.
     *
     * @param array|\ArrayAccess|\Traversable $argument
     *
     * @throws \Prophecy\Exception\InvalidArgumentException
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
     * @return boolean
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
        return sprintf('[..., %s => %s, ...]', $this->key, $this->value);
    }

    /**
     * Returns key
     *
     * @return TokenInterface
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Returns value
     *
     * @return TokenInterface
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Wraps non token $value into ExactValueToken
     *
     * @param $value
     * @return TokenInterface
     */
    private function wrapIntoExactValueToken($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts instance of \ArrayAccess to key => value array entry
     *
     * @param \ArrayAccess $object
     *
     * @return array|null
     * @throws \Prophecy\Exception\InvalidArgumentException
     */
    private function convertArrayAccessToEntry(\ArrayAccess $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
