<?php
/*
 * This file is part of the GlobalState package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\GlobalState\TestFixture;

use DomDocument;
use ArrayObject;

/**
 */
class SnapshotClass
{
    private static $string = 'snapshot';
    private static $dom;
    private static $closure;
    private static $arrayObject;
    private static $snapshotDomDocument;
    private static $resource;
    private static $stdClass;

    public static function init()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
