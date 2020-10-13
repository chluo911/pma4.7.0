<?php
/**
 * Ensures that systems, asset types and libs are included before they are used.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer_MySource
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_AbstractScopeSniff', true) === false) {
    $error = 'Class PHP_CodeSniffer_Standards_AbstractScopeSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * Ensures that systems, asset types and libs are included before they are used.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer_MySource
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class MySource_Sniffs_Channels_IncludeSystemSniff extends PHP_CodeSniffer_Standards_AbstractScopeSniff
{

    /**
     * A list of classes that don't need to be included.
     *
     * @var array(string)
     */
    private $_ignore = array(
                        'self'                      => true,
                        'static'                    => true,
                        'parent'                    => true,
                        'channels'                  => true,
                        'basesystem'                => true,
                        'dal'                       => true,
                        'init'                      => true,
                        'pdo'                       => true,
                        'util'                      => true,
                        'ziparchive'                => true,
                        'phpunit_framework_assert'  => true,
                        'abstractmysourceunittest'  => true,
                        'abstractdatacleanunittest' => true,
                        'exception'                 => true,
                        'abstractwidgetwidgettype'  => true,
                        'domdocument'               => true,
                       );


    /**
     * Constructs a Squiz_Sniffs_Scope_MethodScopeSniff.
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
     * Processes the function tokens within the class.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file where this token was found.
     * @param integer              $stackPtr  The position where the token was found.
     * @param integer              $currScope The current scope opener token.
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
     * Processes a token within the scope that this test is listening to.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file where the token was found.
     * @param int                  $stackPtr  The position in the stack where
     *                                        this token was found.
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


    /**
     * Determines the included class name from given token.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file where this token was found.
     * @param array                $tokens    The array of file tokens.
     * @param int                  $stackPtr  The position in the tokens array of the
     *                                        potentially included class.
     *
     * @return string
     */
    protected function getIncludedClassFromToken(
        PHP_CodeSniffer_File $phpcsFile,
        array $tokens,
        $stackPtr
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end getIncludedClassFromToken()
}//end class
