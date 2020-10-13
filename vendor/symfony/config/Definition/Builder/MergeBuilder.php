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

/**
 * This class builds merge conditions.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class MergeBuilder
{
    protected $node;
    public $allowFalse = false;
    public $allowOverwrite = true;

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
     * Sets whether the node can be unset.
     *
     * @param bool $allow
     *
     * @return $this
     */
    public function allowUnset($allow = true)
    {
        $this->allowFalse = $allow;

        return $this;
    }

    /**
     * Sets whether the node can be overwritten.
     *
     * @param bool $deny Whether the overwriting is forbidden or not
     *
     * @return $this
     */
    public function denyOverwrite($deny = true)
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
     */
    public function end()
    {
        return $this->node;
    }
}
