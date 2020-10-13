<?php
/**
 * Parses and verifies the doc comments for functions.
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

if (class_exists('PEAR_Sniffs_Commenting_FunctionCommentSniff', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PEAR_Sniffs_Commenting_FunctionCommentSniff not found');
}

/**
 * Parses and verifies the doc comments for functions.
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
class Squiz_Sniffs_Commenting_FunctionCommentSniff extends PEAR_Sniffs_Commenting_FunctionCommentSniff
{

    /**
     * The current PHP version.
     *
     * @var integer
     */
    private $_phpVersion = null;


    /**
     * Process the return comment of this function comment.
     *
     * @param PHP_CodeSniffer_File $phpcsFile    The file being scanned.
     * @param int                  $stackPtr     The position of the current token
     *                                           in the stack passed in $tokens.
     * @param int                  $commentStart The position in the stack where the comment started.
     *
     * @return void
     */
    protected function processReturn(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $commentStart)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end processReturn()


    /**
     * Process any throw tags that this function comment has.
     *
     * @param PHP_CodeSniffer_File $phpcsFile    The file being scanned.
     * @param int                  $stackPtr     The position of the current token
     *                                           in the stack passed in $tokens.
     * @param int                  $commentStart The position in the stack where the comment started.
     *
     * @return void
     */
    protected function processThrows(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $commentStart)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end processThrows()


    /**
     * Process the function parameter comments.
     *
     * @param PHP_CodeSniffer_File $phpcsFile    The file being scanned.
     * @param int                  $stackPtr     The position of the current token
     *                                           in the stack passed in $tokens.
     * @param int                  $commentStart The position in the stack where the comment started.
     *
     * @return void
     */
    protected function processParams(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $commentStart)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end processParams()


    /**
     * Check the spacing after the type of a parameter.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param array                $param     The parameter to be checked.
     * @param int                  $maxType   The maxlength of the longest parameter type.
     * @param int                  $spacing   The number of spaces to add after the type.
     *
     * @return void
     */
    protected function checkSpacingAfterParamType(PHP_CodeSniffer_File $phpcsFile, $param, $maxType, $spacing = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end checkSpacingAfterParamType()


    /**
     * Check the spacing after the name of a parameter.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param array                $param     The parameter to be checked.
     * @param int                  $maxVar    The maxlength of the longest parameter name.
     * @param int                  $spacing   The number of spaces to add after the type.
     *
     * @return void
     */
    protected function checkSpacingAfterParamName(PHP_CodeSniffer_File $phpcsFile, $param, $maxVar, $spacing = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end checkSpacingAfterParamName()
}//end class
