<?php
/**
 * Generic_Sniffs_NamingConventions_ConstructorNameSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Leif Wickland <lwickland@rightnow.com>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_AbstractScopeSniff', true) === false) {
    $error = 'Class PHP_CodeSniffer_Standards_AbstractScopeSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * Generic_Sniffs_NamingConventions_ConstructorNameSniff.
 *
 * Favor PHP 5 constructor syntax, which uses "function __construct()".
 * Avoid PHP 4 constructor syntax, which uses "function ClassName()".
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Leif Wickland <lwickland@rightnow.com>
 * @license  https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version  Release: @package_version@
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */
class Generic_Sniffs_NamingConventions_ConstructorNameSniff extends PHP_CodeSniffer_Standards_AbstractScopeSniff
{

    /**
     * The name of the class we are currently checking.
     *
     * @var string
     */
    private $_currentClass = '';

    /**
     * A list of functions in the current class.
     *
     * @var string[]
     */
    private $_functionList = array();


    /**
     * Constructs the test with the tokens it wishes to listen for.
     */
    public function __construct()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end __construct()


    /**
     * Processes this test when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being scanned.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     * @param int                  $currScope A pointer to the start of the scope.
     *
     * @return void
     */
    protected function processTokenWithinScope(
        PHP_CodeSniffer_File $phpcsFile,
        $stackPtr,
        $currScope
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end processTokenWithinScope()


    /**
     * Extracts all the function names found in the given scope.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being scanned.
     * @param int                  $currScope A pointer to the start of the scope.
     *
     * @return void
     */
    protected function loadFunctionNamesInScope(PHP_CodeSniffer_File $phpcsFile, $currScope)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end loadFunctionNamesInScope()
}//end class
