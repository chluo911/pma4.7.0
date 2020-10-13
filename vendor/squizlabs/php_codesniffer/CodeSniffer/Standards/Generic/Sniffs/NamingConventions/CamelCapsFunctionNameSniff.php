<?php
/**
 * Generic_Sniffs_NamingConventions_CamelCapsFunctionNameSniff.
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

if (class_exists('PHP_CodeSniffer_Standards_AbstractScopeSniff', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_AbstractScopeSniff not found');
}

/**
 * Generic_Sniffs_NamingConventions_CamelCapsFunctionNameSniff.
 *
 * Ensures method names are correct depending on whether they are public
 * or private, and that functions are named correctly.
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
class Generic_Sniffs_NamingConventions_CamelCapsFunctionNameSniff extends PHP_CodeSniffer_Standards_AbstractScopeSniff
{

    /**
     * A list of all PHP magic methods.
     *
     * @var array
     */
    protected $magicMethods = array(
                               'construct'  => true,
                               'destruct'   => true,
                               'call'       => true,
                               'callstatic' => true,
                               'get'        => true,
                               'set'        => true,
                               'isset'      => true,
                               'unset'      => true,
                               'sleep'      => true,
                               'wakeup'     => true,
                               'tostring'   => true,
                               'set_state'  => true,
                               'clone'      => true,
                               'invoke'     => true,
                               'debuginfo'  => true,
                              );

    /**
     * A list of all PHP non-magic methods starting with a double underscore.
     *
     * These come from PHP modules such as SOAPClient.
     *
     * @var array
     */
    protected $methodsDoubleUnderscore = array(
                                          'soapcall'               => true,
                                          'getlastrequest'         => true,
                                          'getlastresponse'        => true,
                                          'getlastrequestheaders'  => true,
                                          'getlastresponseheaders' => true,
                                          'getfunctions'           => true,
                                          'gettypes'               => true,
                                          'dorequest'              => true,
                                          'setcookie'              => true,
                                          'setlocation'            => true,
                                          'setsoapheaders'         => true,
                                         );

    /**
     * A list of all PHP magic functions.
     *
     * @var array
     */
    protected $magicFunctions = array('autoload' => true);

    /**
     * If TRUE, the string must not have two capital letters next to each other.
     *
     * @var bool
     */
    public $strict = true;


    /**
     * Constructs a Generic_Sniffs_NamingConventions_CamelCapsFunctionNameSniff.
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
     * Processes the tokens within the scope.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being processed.
     * @param int                  $stackPtr  The position where this token was
     *                                        found.
     * @param int                  $currScope The position of the current scope.
     *
     * @return void
     */
    protected function processTokenWithinScope(PHP_CodeSniffer_File $phpcsFile, $stackPtr, $currScope)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end processTokenWithinScope()


    /**
     * Processes the tokens outside the scope.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being processed.
     * @param int                  $stackPtr  The position where this token was
     *                                        found.
     *
     * @return void
     */
    protected function processTokenOutsideScope(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end processTokenOutsideScope()
}//end class
