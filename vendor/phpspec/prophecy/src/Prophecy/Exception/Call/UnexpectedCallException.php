<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Call;

use Prophecy\Exception\Prophecy\ObjectProphecyException;
use Prophecy\Prophecy\ObjectProphecy;

class UnexpectedCallException extends ObjectProphecyException
{
    private $methodName;
    private $arguments;

    public function __construct(
        $message,
        ObjectProphecy $objectProphecy,
        $methodName,
        array $arguments
    )
    {
        parent::__construct($message, $objectProphecy);

        $this->methodName = $methodName;
        $this->arguments = $arguments;
    }

    public function getMethodName()
    {
        return $this->methodName;
    }

    public function getArguments()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
