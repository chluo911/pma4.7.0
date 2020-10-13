<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Tests\Definition\Builder;

use Symfony\Component\Config\Definition\Builder\NodeBuilder as BaseNodeBuilder;

class NodeBuilder extends BaseNodeBuilder
{
    public function barNode($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getNodeClass($type)
    {
        switch ($type) {
            case 'variable':
                return __NAMESPACE__.'\\'.ucfirst($type).'NodeDefinition';
            case 'bar':
                return __NAMESPACE__.'\\'.ucfirst($type).'NodeDefinition';
            default:
                return parent::getNodeClass($type);
        }
    }
}
