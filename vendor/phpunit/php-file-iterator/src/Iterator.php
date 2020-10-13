<?php
/*
 * This file is part of the File_Iterator package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * FilterIterator implementation that filters files based on prefix(es) and/or
 * suffix(es). Hidden files and files from hidden directories are also filtered.
 *
 * @since     Class available since Release 1.0.0
 */
class File_Iterator extends FilterIterator
{
    const PREFIX = 0;
    const SUFFIX = 1;

    /**
     * @var array
     */
    protected $suffixes = array();

    /**
     * @var array
     */
    protected $prefixes = array();

    /**
     * @var array
     */
    protected $exclude = array();

    /**
     * @var string
     */
    protected $basepath;

    /**
     * @param Iterator $iterator
     * @param array    $suffixes
     * @param array    $prefixes
     * @param array    $exclude
     * @param string   $basepath
     */
    public function __construct(Iterator $iterator, array $suffixes = array(), array $prefixes = array(), array $exclude = array(), $basepath = null)
    {
        $exclude = array_filter(array_map('realpath', $exclude));

        if ($basepath !== null) {
            $basepath = realpath($basepath);
        }

        if ($basepath === false) {
            $basepath = null;
        } else {
            foreach ($exclude as &$_exclude) {
                $_exclude = str_replace($basepath, '', $_exclude);
            }
        }

        $this->prefixes = $prefixes;
        $this->suffixes = $suffixes;
        $this->exclude  = $exclude;
        $this->basepath = $basepath;

        parent::__construct($iterator);
    }

    /**
     * @return bool
     */
    public function accept()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  string $path
     * @return bool
     * @since  Method available since Release 1.1.0
     */
    protected function acceptPath($path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  string $filename
     * @return bool
     * @since  Method available since Release 1.1.0
     */
    protected function acceptPrefix($filename)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  string $filename
     * @return bool
     * @since  Method available since Release 1.1.0
     */
    protected function acceptSuffix($filename)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  string $filename
     * @param  array  $subString
     * @param  int    $type
     * @return bool
     * @since  Method available since Release 1.1.0
     */
    protected function acceptSubString($filename, array $subStrings, $type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
