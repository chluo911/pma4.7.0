<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\ExpressionLanguage\Node;

use Symfony\Component\ExpressionLanguage\Compiler;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class ArrayNode extends Node
{
    protected $index;

    public function __construct()
    {
        $this->index = -1;
    }

    public function addElement(Node $value, Node $key = null)
    {
        if (null === $key) {
            $key = new ConstantNode(++$this->index);
        }

        array_push($this->nodes, $key, $value);
    }

    /**
     * Compiles the node to PHP.
     *
     * @param Compiler $compiler A Compiler instance
     */
    public function compile(Compiler $compiler)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function evaluate($functions, $values)
    {
        $result = array();
        foreach ($this->getKeyValuePairs() as $pair) {
            $result[$pair['key']->evaluate($functions, $values)] = $pair['value']->evaluate($functions, $values);
        }

        return $result;
    }

    public function toArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getKeyValuePairs()
    {
        $pairs = array();
        foreach (array_chunk($this->nodes, 2) as $pair) {
            $pairs[] = array('key' => $pair[0], 'value' => $pair[1]);
        }

        return $pairs;
    }

    protected function compileArguments(Compiler $compiler, $withKeys = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
