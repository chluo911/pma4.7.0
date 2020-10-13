<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Prediction;

use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Exception\Prophecy\MethodProphecyException;

class UnexpectedCallsException extends MethodProphecyException implements PredictionException
{
    private $calls = array();

    public function __construct($message, MethodProphecy $methodProphecy, array $calls)
    {
        parent::__construct($message, $methodProphecy);

        $this->calls = $calls;
    }

    public function getCalls()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
