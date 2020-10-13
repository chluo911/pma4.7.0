<?php
/**
 * A doc generator that outputs documentation in Markdown format.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Stefano Kowalke <blueduck@gmx.net>
 * @copyright 2014 Arroba IT
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_DocGenerators_Generator', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_DocGenerators_Generator not found');
}

/**
 * A doc generator that outputs documentation in Markdown format.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Stefano Kowalke <blueduck@gmx.net>
 * @copyright 2014 Arroba IT
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_DocGenerators_Markdown extends PHP_CodeSniffer_DocGenerators_Generator
{


    /**
     * Generates the documentation for a standard.
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
     * Print the markdown header.
     *
     * @return void
     */
    protected function printHeader()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end printHeader()


    /**
     * Print the markdown footer.
     *
     * @return void
     */
    protected function printFooter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end printFooter()


    /**
     * Process the documentation for a single sniff.
     *
     * @param DOMNode $doc The DOMNode object for the sniff.
     *                     It represents the "documentation" tag in the XML
     *                     standard file.
     *
     * @return void
     */
    protected function processSniff(DOMNode $doc)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end processSniff()


    /**
     * Print a text block found in a standard.
     *
     * @param DOMNode $node The DOMNode object for the text block.
     *
     * @return void
     */
    protected function printTextBlock(DOMNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end printTextBlock()


    /**
     * Print a code comparison block found in a standard.
     *
     * @param DOMNode $node The DOMNode object for the code comparison block.
     *
     * @return void
     */
    protected function printCodeComparisonBlock(DOMNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end printCodeComparisonBlock()
}//end class
