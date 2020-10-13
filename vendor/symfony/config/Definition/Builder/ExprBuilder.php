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

use Symfony\Component\Config\Definition\Exception\UnsetKeyException;

/**
 * This class builds an if expression.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Christophe Coevoet <stof@notk.org>
 */
class ExprBuilder
{
    protected $node;
    public $ifPart;
    public $thenPart;

    /**
     * Constructor.
     *
     * @param NodeDefinition $node The related node
     */
    public function __construct(NodeDefinition $node)
    {
        $this->node = $node;
    }

    /**
     * Marks the expression as being always used.
     *
     * @param \Closure $then
     *
     * @return $this
     */
    public function always(\Closure $then = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a closure to use as tests.
     *
     * The default one tests if the value is true.
     *
     * @param \Closure $closure
     *
     * @return $this
     */
    public function ifTrue(\Closure $closure = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests if the value is a string.
     *
     * @return $this
     */
    public function ifString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests if the value is null.
     *
     * @return $this
     */
    public function ifNull()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests if the value is empty.
     *
     * @return ExprBuilder
     */
    public function ifEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests if the value is an array.
     *
     * @return $this
     */
    public function ifArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests if the value is in an array.
     *
     * @param array $array
     *
     * @return $this
     */
    public function ifInArray(array $array)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests if the value is not in an array.
     *
     * @param array $array
     *
     * @return $this
     */
    public function ifNotInArray(array $array)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the closure to run if the test pass.
     *
     * @param \Closure $closure
     *
     * @return $this
     */
    public function then(\Closure $closure)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a closure returning an empty array.
     *
     * @return $this
     */
    public function thenEmptyArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a closure marking the value as invalid at validation time.
     *
     * if you want to add the value of the node in your message just use a %s placeholder.
     *
     * @param string $message
     *
     * @return $this
     *
     * @throws \InvalidArgumentException
     */
    public function thenInvalid($message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets a closure unsetting this key of the array at validation time.
     *
     * @return $this
     *
     * @throws UnsetKeyException
     */
    public function thenUnset()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the related node.
     *
     * @return NodeDefinition|ArrayNodeDefinition|VariableNodeDefinition
     *
     * @throws \RuntimeException
     */
    public function end()
    {
        if (null === $this->ifPart) {
            throw new \RuntimeException('You must specify an if part.');
        }
        if (null === $this->thenPart) {
            throw new \RuntimeException('You must specify a then part.');
        }

        return $this->node;
    }

    /**
     * Builds the expressions.
     *
     * @param ExprBuilder[] $expressions An array of ExprBuilder instances to build
     *
     * @return array
     */
    public static function buildExpressions(array $expressions)
    {
        foreach ($expressions as $k => $expr) {
            if ($expr instanceof self) {
                $if = $expr->ifPart;
                $then = $expr->thenPart;
                $expressions[$k] = function ($v) use ($if, $then) {
                    return $if($v) ? $then($v) : $v;
                };
            }
        }

        return $expressions;
    }
}
