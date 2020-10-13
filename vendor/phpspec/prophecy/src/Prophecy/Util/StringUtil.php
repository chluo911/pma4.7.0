<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Util;

use Prophecy\Call\Call;

/**
 * String utility.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class StringUtil
{
    /**
     * Stringifies any provided value.
     *
     * @param mixed   $value
     * @param boolean $exportObject
     *
     * @return string
     */
    public function stringify($value, $exportObject = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Stringifies provided array of calls.
     *
     * @param Call[] $calls Array of Call instances
     *
     * @return string
     */
    public function stringifyCalls(array $calls)
    {
        $self = $this;

        return implode(PHP_EOL, array_map(function (Call $call) use ($self) {
            return sprintf(
                '  - %s(%s) @ %s',
                $call->getMethodName(),
                implode(', ', array_map(array($self, 'stringify'), $call->getArguments())),
                str_replace(GETCWD().DIRECTORY_SEPARATOR, '', $call->getCallPlace())
            );
        }, $calls));
    }
}
