<?php

namespace Guzzle\Service;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Common\Exception\RuntimeException;

/**
 * Abstract config loader
 */
abstract class AbstractConfigLoader implements ConfigLoaderInterface
{
    /** @var array Array of aliases for actual filenames */
    protected $aliases = array();

    /** @var array Hash of previously loaded filenames */
    protected $loadedFiles = array();

    /** @var array JSON error code mappings */
    protected static $jsonErrors = array(
        JSON_ERROR_NONE => 'JSON_ERROR_NONE - No errors',
        JSON_ERROR_DEPTH => 'JSON_ERROR_DEPTH - Maximum stack depth exceeded',
        JSON_ERROR_STATE_MISMATCH => 'JSON_ERROR_STATE_MISMATCH - Underflow or the modes mismatch',
        JSON_ERROR_CTRL_CHAR => 'JSON_ERROR_CTRL_CHAR - Unexpected control character found',
        JSON_ERROR_SYNTAX => 'JSON_ERROR_SYNTAX - Syntax error, malformed JSON',
        JSON_ERROR_UTF8 => 'JSON_ERROR_UTF8 - Malformed UTF-8 characters, possibly incorrectly encoded'
    );

    public function load($config, array $options = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add an include alias to the loader
     *
     * @param string $filename Filename to alias (e.g. _foo)
     * @param string $alias    Actual file to use (e.g. /path/to/foo.json)
     *
     * @return self
     */
    public function addAlias($filename, $alias)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Remove an alias from the loader
     *
     * @param string $alias Alias to remove
     *
     * @return self
     */
    public function removeAlias($alias)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Perform the parsing of a config file and create the end result
     *
     * @param array $config  Configuration data
     * @param array $options Options to use when building
     *
     * @return mixed
     */
    abstract protected function build($config, array $options);

    /**
     * Load a configuration file (can load JSON or PHP files that return an array when included)
     *
     * @param string $filename File to load
     *
     * @return array
     * @throws InvalidArgumentException
     * @throws RuntimeException when the JSON cannot be parsed
     */
    protected function loadFile($filename)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Merges in all include files
     *
     * @param array  $config   Config data that contains includes
     * @param string $basePath Base path to use when a relative path is encountered
     *
     * @return array Returns the merged and included data
     */
    protected function mergeIncludes(&$config, $basePath = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Default implementation for merging two arrays of data (uses array_merge_recursive)
     *
     * @param array $a Original data
     * @param array $b Data to merge into the original and overwrite existing values
     *
     * @return array
     */
    protected function mergeData(array $a, array $b)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
