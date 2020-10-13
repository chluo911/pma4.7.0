<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Definition\Builder;

use Symfony\Component\Config\Definition\Exception\InvalidDefinitionException;

/**
 * Abstract class that contains common code of integer and float node definitions.
 *
 * @author David Jeanmonod <david.jeanmonod@gmail.com>
 */
abstract class NumericNodeDefinition extends ScalarNodeDefinition
{
    protected $min;
    protected $max;

    /**
     * Ensures that the value is smaller than the given reference.
     *
     * @param mixed $max
     *
     * @return $this
     *
     * @throws \InvalidArgumentException when the constraint is inconsistent
     */
    public function max($max)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ensures that the value is bigger than the given reference.
     *
     * @param mixed $min
     *
     * @return $this
     *
     * @throws \InvalidArgumentException when the constraint is inconsistent
     */
    public function min($min)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
     *
     * @throws InvalidDefinitionException
     */
    public function cannotBeEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
