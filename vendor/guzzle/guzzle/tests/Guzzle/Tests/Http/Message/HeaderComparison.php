<?php

namespace Guzzle\Tests\Http\Message;

use Guzzle\Common\Collection;
use Guzzle\Http\Message\Header\HeaderCollection;

/**
 * Class used to compare HTTP headers using a custom DSL
 */
class HeaderComparison
{
    /**
     * Compare HTTP headers and use special markup to filter values
     * A header prefixed with '!' means it must not exist
     * A header prefixed with '_' means it must be ignored
     * A header value of '*' means anything after the * will be ignored
     *
     * @param array $filteredHeaders Array of special headers
     * @param array $actualHeaders   Array of headers to check against
     *
     * @return array|bool Returns an array of the differences or FALSE if none
     */
    public function compare($filteredHeaders, $actualHeaders)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if an array of HTTP headers matches another array of HTTP headers while taking * into account as a wildcard
     *
     * @param array            $expected Expected HTTP headers (allows wildcard values)
     * @param array|Collection $actual   Actual HTTP header array
     * @param array            $ignore   Headers to ignore from the comparison
     * @param array            $absent   Array of headers that must not be present
     *
     * @return array|bool Returns an array of the differences or FALSE if none
     */
    public function compareArray(array $expected, $actual, array $ignore = array(), array $absent = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Case insensitive check if an array have a key
     *
     * @param string $key   Key to check
     * @param array  $array Array to check
     *
     * @return bool
     */
    protected function hasKey($key, $array)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
