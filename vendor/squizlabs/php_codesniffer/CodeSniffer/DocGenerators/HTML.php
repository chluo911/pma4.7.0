<?php
/**
 * A doc generator that outputs documentation in one big HTML file.
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

if (class_exists('PHP_CodeSniffer_DocGenerators_Generator', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_DocGenerators_Generator not found');
}

/**
 * A doc generator that outputs documentation in one big HTML file.
 *
 * Output is in one large HTML file and is designed for you to style with
 * your own stylesheet. It contains a table of contents at the top with anchors
 * to each sniff.
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
class PHP_CodeSniffer_DocGenerators_HTML extends PHP_CodeSniffer_DocGenerators_Generator
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
     * Print the header of the HTML page.
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
     * Print the table of contents for the standard.
     *
     * The TOC is just an unordered list of bookmarks to sniffs on the page.
     *
     * @param array $standardFiles An array of paths to the XML standard files.
     *
     * @return void
     */
    protected function printToc($standardFiles)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end printToc()


    /**
     * Print the footer of the HTML page.
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
    public function processSniff(DOMNode $doc)
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
    protected function printTextBlock($node)
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
    protected function printCodeComparisonBlock($node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end printCodeComparisonBlock()
}//end class
