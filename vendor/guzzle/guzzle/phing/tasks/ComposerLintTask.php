<?php
/**
 * Phing task for composer validation.
 *
 * @copyright 2012 Clay Loveless <clay@php.net>
 * @license   http://claylo.mit-license.org/2012/ MIT License
 */

require_once 'phing/Task.php';

class ComposerLintTask extends Task
{
    protected $dir = null;
    protected $file = null;
    protected $passthru = false;
    protected $composer = null;

    /**
     * The setter for the dir
     *
     * @param string $str Directory to crawl recursively for composer files
     */
    public function setDir($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The setter for the file
     *
     * @param string $str Individual file to validate
     */
    public function setFile($str)
    {
        $this->file = $str;
    }

    /**
     * Whether to use PHP's passthru() function instead of exec()
     *
     * @param boolean $passthru If passthru shall be used
     */
    public function setPassthru($passthru)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Composer to execute. If unset, will attempt composer.phar in project
     * basedir, and if that fails, will attempt global composer
     * installation.
     *
     * @param string $str Individual file to validate
     */
    public function setComposer($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The init method: do init steps
     */
    public function init()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The main entry point
     */
    public function main()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Find the composer.json files using Phing's directory scanner
     *
     * @return array
     */
    protected function findFiles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Find composer installation
     *
     */
    protected function findComposer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
