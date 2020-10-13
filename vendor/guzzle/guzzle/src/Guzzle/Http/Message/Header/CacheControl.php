<?php

namespace Guzzle\Http\Message\Header;

use Guzzle\Http\Message\Header;

/**
 * Provides helpful functionality for Cache-Control headers
 */
class CacheControl extends Header
{
    /** @var array */
    protected $directives;

    public function add($value)
    {
        parent::add($value);
        $this->directives = null;
    }

    public function removeValue($searchValue)
    {
        parent::removeValue($searchValue);
        $this->directives = null;
    }

    /**
     * Check if a specific cache control directive exists
     *
     * @param string $param Directive to retrieve
     *
     * @return bool
     */
    public function hasDirective($param)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a specific cache control directive
     *
     * @param string $param Directive to retrieve
     *
     * @return string|bool|null
     */
    public function getDirective($param)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a cache control directive
     *
     * @param string $param Directive to add
     * @param string $value Value to set
     *
     * @return self
     */
    public function addDirective($param, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Remove a cache control directive by name
     *
     * @param string $param Directive to remove
     *
     * @return self
     */
    public function removeDirective($param)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get an associative array of cache control directives
     *
     * @return array
     */
    public function getDirectives()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Updates the header value based on the parsed directives
     *
     * @param array $directives Array of cache control directives
     */
    protected function updateFromDirectives(array $directives)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
