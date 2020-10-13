<?php

/**
 * This file is part of Gitonomy.
 *
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 * (c) Julien DIDIER <genzo.wm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Gitonomy\Git\Reference;

use Gitonomy\Git\Exception\RuntimeException;
use Gitonomy\Git\Reference;

/**
 * Representation of a branch reference.
 *
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 */
class Branch extends Reference
{
    private $local = null;

    public function getName()
    {
        $fullname = $this->getFullname();

        if (preg_match('#^refs/heads/(?<name>.*)$#', $fullname, $vars)) {
            return $vars['name'];
        }

        if (preg_match('#^refs/remotes/(?<remote>[^/]*)/(?<name>.*)$#', $fullname, $vars)) {
            return $vars['remote'].'/'.$vars['name'];
        }

        throw new RuntimeException(sprintf('Cannot extract branch name from "%s"', $fullname));
    }

    public function isRemote()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isLocal()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function detectBranchType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
