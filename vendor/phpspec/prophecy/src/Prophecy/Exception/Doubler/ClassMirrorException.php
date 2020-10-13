<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

use ReflectionClass;

class ClassMirrorException extends \RuntimeException implements DoublerException
{
    private $class;

    public function __construct($message, ReflectionClass $class)
    {
        parent::__construct($message);

        $this->class = $class;
    }

    public function getReflectedClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
