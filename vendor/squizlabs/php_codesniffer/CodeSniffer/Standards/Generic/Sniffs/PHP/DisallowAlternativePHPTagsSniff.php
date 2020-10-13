<?php
/**
 * Generic_Sniffs_PHP_DisallowAlternativePHPTagsSniff.
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
 * Generic_Sniffs_PHP_DisallowAlternativePHPTagsSniff.
 *
 * Verifies that no alternative PHP tags are used.
 *
 * If alternative PHP open tags are found, this sniff can fix both the open and close tags.
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
class Generic_Sniffs_PHP_DisallowAlternativePHPTagsSniff implements PHP_CodeSniffer_Sniff
{


    /**
     * Whether ASP tags are enabled or not.
     *
     * @var bool
     */
    private $_aspTags = false;

    /**
     * The current PHP version.
     *
     * @var integer
     */
    private $_phpVersion = null;


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
     * Get a snippet from a HTML token.
     *
     * @param string $content  The content of the HTML token.
     * @param string $start_at Partial string to use as a starting point for the snippet.
     * @param int    $length   The target length of the snippet to get. Defaults to 40.
     *
     * @return string
     */
    protected function getSnippet($content, $start_at = '', $length = 40)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end getSnippet()


    /**
     * Try and find a matching PHP closing tag.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param array                $tokens    The token stack.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * @param string               $content   The expected content of the closing tag to match the opener.
     *
     * @return int|false Pointer to the position in the stack for the closing tag or false if not found.
     */
    protected function findClosingTag(PHP_CodeSniffer_File $phpcsFile, $tokens, $stackPtr, $content)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end findClosingTag()


    /**
     * Add a changeset to replace the alternative PHP tags.
     *
     * @param PHP_CodeSniffer_File $phpcsFile         The file being scanned.
     * @param array                $tokens            The token stack.
     * @param int                  $open_tag_pointer  Stack pointer to the PHP open tag.
     * @param int                  $close_tag_pointer Stack pointer to the PHP close tag.
     * @param bool                 $echo              Whether to add 'echo' or not.
     *
     * @return void
     */
    protected function addChangeset(PHP_CodeSniffer_File $phpcsFile, $tokens, $open_tag_pointer, $close_tag_pointer, $echo = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end addChangeset()
}//end class
