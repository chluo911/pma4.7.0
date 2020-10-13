<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Argument;

/**
 * Arguments wildcarding.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class ArgumentsWildcard
{
    /**
     * @var Token\TokenInterface[]
     */
    private $tokens = array();
    private $string;

    /**
     * Initializes wildcard.
     *
     * @param array $arguments Array of argument tokens or values
     */
    public function __construct(array $arguments)
    {
        foreach ($arguments as $argument) {
            if (!$argument instanceof Token\TokenInterface) {
                $argument = new Token\ExactValueToken($argument);
            }

            $this->tokens[] = $argument;
        }
    }

    /**
     * Calculates wildcard match score for provided arguments.
     *
     * @param array $arguments
     *
     * @return false|int False OR integer score (higher - better)
     */
    public function scoreArguments(array $arguments)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns string representation for wildcard.
     *
     * @return string
     */
    public function __toString()
    {
        if (null === $this->string) {
            $this->string = implode(', ', array_map(function ($token) {
                return (string) $token;
            }, $this->tokens));
        }

        return $this->string;
    }

    /**
     * @return array
     */
    public function getTokens()
    {
        return $this->tokens;
    }
}
