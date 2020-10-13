<?php
/**
 * The base class for all PHP_CodeSniffer documentation generators.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * The base class for all PHP_CodeSniffer documentation generators.
 *
 * Documentation generators are used to print documentation about code sniffs
 * in a standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
abstract class PHP_CodeSniffer_DocGenerators_Generator
{

    /**
     * The name of the coding standard we are generating docs for.
     *
     * @var string
     */
    private $_standard = '';

    /**
     * An array of sniffs that we are limiting the generated docs to.
     *
     * If this array is empty, docs are generated for all sniffs in the
     * supplied coding standard.
     *
     * @var string
     */
    private $_sniffs = array();


    /**
     * Constructs a PHP_CodeSniffer_DocGenerators_Generator object.
     *
     * @param string $standard The name of the coding standard to generate
     *                         docs for.
     * @param array  $sniffs   An array of sniffs that we are limiting the
     *                         generated docs to.
     *
     * @see generate()
     */
    public function __construct($standard, array $sniffs=array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end __construct()


    /**
     * Retrieves the title of the sniff from the DOMNode supplied.
     *
     * @param DOMNode $doc The DOMNode object for the sniff.
     *                     It represents the "documentation" tag in the XML
     *                     standard file.
     *
     * @return string
     */
    protected function getTitle(DOMNode $doc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end getTitle()


    /**
     * Retrieves the name of the standard we are generating docs for.
     *
     * @return string
     */
    protected function getStandard()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end getStandard()


    /**
     * Generates the documentation for a standard.
     *
     * It's probably wise for doc generators to override this method so they
     * have control over how the docs are produced. Otherwise, the processSniff
     * method should be overridden to output content for each sniff.
     *
     * @return void
     * @see    processSniff()
     */
    public function generate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end generate()


    /**
     * Returns a list of paths to XML standard files for all sniffs in a standard.
     *
     * Any sniffs that do not have an XML standard file are obviously not included
     * in the returned array. If documentation is only being generated for some
     * sniffs (ie. $this->_sniffs is not empty) then all others sniffs will
     * be filtered from the results as well.
     *
     * @return string[]
     */
    protected function getStandardFiles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end getStandardFiles()


    /**
     * Process the documentation for a single sniff.
     *
     * Doc generators must implement this function to produce output.
     *
     * @param DOMNode $doc The DOMNode object for the sniff.
     *                     It represents the "documentation" tag in the XML
     *                     standard file.
     *
     * @return void
     * @see    generate()
     */
    abstract protected function processSniff(DOMNode $doc);
}//end class
