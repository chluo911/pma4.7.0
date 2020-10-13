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

/**
 * Array every entry token.
 *
 * @author Adrien Brault <adrien.brault@gmail.com>
 */
class ArrayEveryEntryToken implements TokenInterface
{
    /**
     * @var TokenInterface
     */
    private $value;

    /**
     * @param mixed $value exact value or token
     */
    public function __construct($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function __toString()
    {
        return sprintf('[%s, ..., %s]', $this->value, $this->value);
    }

    /**
     * @return TokenInterface
     */
    public function getValue()
    {
        return $this->value;
    }
}
