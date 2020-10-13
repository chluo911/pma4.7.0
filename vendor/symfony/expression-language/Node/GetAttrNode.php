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
class GetAttrNode extends Node
{
    const PROPERTY_CALL = 1;
    const METHOD_CALL = 2;
    const ARRAY_CALL = 3;

    public function __construct(Node $node, Node $attribute, ArrayNode $arguments, $type)
    {
        parent::__construct(
            array('node' => $node, 'attribute' => $attribute, 'arguments' => $arguments),
            array('type' => $type)
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
        switch ($this->attributes['type']) {
            case self::PROPERTY_CALL:
                $obj = $this->nodes['node']->evaluate($functions, $values);
                if (!is_object($obj)) {
                    throw new \RuntimeException('Unable to get a property on a non-object.');
                }

                $property = $this->nodes['attribute']->attributes['value'];

                return $obj->$property;

            case self::METHOD_CALL:
                $obj = $this->nodes['node']->evaluate($functions, $values);
                if (!is_object($obj)) {
                    throw new \RuntimeException('Unable to get a property on a non-object.');
                }

                return call_user_func_array(array($obj, $this->nodes['attribute']->attributes['value']), $this->nodes['arguments']->evaluate($functions, $values));

            case self::ARRAY_CALL:
                $array = $this->nodes['node']->evaluate($functions, $values);
                if (!is_array($array) && !$array instanceof \ArrayAccess) {
                    throw new \RuntimeException('Unable to get an item on a non-array.');
                }

                return $array[$this->nodes['attribute']->evaluate($functions, $values)];
        }
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
