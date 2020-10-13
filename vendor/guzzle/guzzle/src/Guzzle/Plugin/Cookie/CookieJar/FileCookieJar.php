<?php

namespace Guzzle\Plugin\Cookie\CookieJar;

use Guzzle\Common\Exception\RuntimeException;

/**
 * Persists non-session cookies using a JSON formatted file
 */
class FileCookieJar extends ArrayCookieJar
{
    /** @var string filename */
    protected $filename;

    /**
     * Create a new FileCookieJar object
     *
     * @param string $cookieFile File to store the cookie data
     *
     * @throws RuntimeException if the file cannot be found or created
     */
    public function __construct($cookieFile)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Saves the file when shutting down
     */
    public function __destruct()
    {
        $stop_coverage = false;
        if (function_exists("end_coverage_cav39s8hca")) {
            $stop_coverage = !xdebug_code_coverage_started();
            if (!xdebug_code_coverage_started()) {
                xdebug_start_code_coverage();
            }
        }
        $this->persist();
        if (function_exists("end_coverage_cav39s8hca")) {
            if ($stop_coverage) {
                end_coverage_cav39s8hca($stop_coverage);
            }
        }
    }

    /**
     * Save the contents of the data array to the file
     *
     * @throws RuntimeException if the file cannot be found or created
     */
    protected function persist()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Load the contents of the json formatted file into the data array and discard any unsaved state
     */
    protected function load()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
