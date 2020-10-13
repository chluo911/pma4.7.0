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
class FunctionNode extends Node
{
    public function __construct($name, Node $arguments)
    {
        parent::__construct(
            array('arguments' => $arguments),
            array('name' => $name)
        );
    }

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
        $arguments = array($values);
        foreach ($this->nodes['arguments']->nodes as $node) {
            $arguments[] = $node->evaluate($functions, $values);
        }

        return call_user_func_array($functions[$this->attributes['name']]['evaluator'], $arguments);
    }

    public function toArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
