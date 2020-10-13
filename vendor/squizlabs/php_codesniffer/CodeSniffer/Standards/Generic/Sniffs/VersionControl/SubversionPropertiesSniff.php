<?php
/**
 * Generic_Sniffs_VersionControl_SubversionPropertiesSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Jack Bates <ms419@freezone.co.uk>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * Generic_Sniffs_VersionControl_SubversionPropertiesSniff.
 *
 * Tests that the correct Subversion properties are set.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Jack Bates <ms419@freezone.co.uk>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class Generic_Sniffs_VersionControl_SubversionPropertiesSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * The Subversion properties that should be set.
     *
     * Key of array is the SVN property and the value is the
     * exact value the property should have or NULL if the
     * property should just be set but the value is not fixed.
     *
     * @var array
     */
    protected $properties = array(
                             'svn:keywords'  => 'Author Id Revision',
                             'svn:eol-style' => 'native',
                            );


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end register()


    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end process()


    /**
     * Returns the Subversion properties which are actually set on a path.
     *
     * Returns NULL if the file is not under version control.
     *
     * @param string $path The path to return Subversion properties on.
     *
     * @return array
     * @throws PHP_CodeSniffer_Exception If Subversion properties file could
     *                                   not be opened.
     */
    protected function getProperties($path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end getProperties()
}//end class
