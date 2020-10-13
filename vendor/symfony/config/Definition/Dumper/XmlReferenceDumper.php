<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Definition\Dumper;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\NodeInterface;
use Symfony\Component\Config\Definition\ArrayNode;
use Symfony\Component\Config\Definition\EnumNode;
use Symfony\Component\Config\Definition\PrototypedArrayNode;

/**
 * Dumps a XML reference configuration for the given configuration/node instance.
 *
 * @author Wouter J <waldio.webdesign@gmail.com>
 */
class XmlReferenceDumper
{
    private $reference;

    public function dump(ConfigurationInterface $configuration, $namespace = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function dumpNode(NodeInterface $node, $namespace = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param NodeInterface $node
     * @param int           $depth
     * @param bool          $root      If the node is the root node
     * @param string        $namespace The namespace of the node
     */
    private function writeNode(NodeInterface $node, $depth = 0, $root = false, $namespace = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs a single config reference line.
     *
     * @param string $text
     * @param int    $indent
     */
    private function writeLine($text, $indent = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Renders the string conversion of the value.
     *
     * @param mixed $value
     *
     * @return string
     */
    private function writeValue($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
