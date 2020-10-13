<?php
/**
 * Processes pattern strings and checks that the code conforms to the pattern.
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

if (class_exists('PHP_CodeSniffer_Standards_IncorrectPatternException', true) === false) {
    $error = 'Class PHP_CodeSniffer_Standards_IncorrectPatternException not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * Processes pattern strings and checks that the code conforms to the pattern.
 *
 * This test essentially checks that code is correctly formatted with whitespace.
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
abstract class PHP_CodeSniffer_Standards_AbstractPatternSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * If true, comments will be ignored if they are found in the code.
     *
     * @var boolean
     */
    public $ignoreComments = false;

    /**
     * The current file being checked.
     *
     * @var string
     */
    protected $currFile = '';

    /**
     * The parsed patterns array.
     *
     * @var array
     */
    private $_parsedPatterns = array();

    /**
     * Tokens that this sniff wishes to process outside of the patterns.
     *
     * @var array(int)
     * @see registerSupplementary()
     * @see processSupplementary()
     */
    private $_supplementaryTokens = array();

    /**
     * Positions in the stack where errors have occurred.
     *
     * @var array()
     */
    private $_errorPos = array();


    /**
     * Constructs a PHP_CodeSniffer_Standards_AbstractPatternSniff.
     *
     * @param boolean $ignoreComments If true, comments will be ignored.
     */
    public function __construct($ignoreComments=null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end __construct()


    /**
     * Registers the tokens to listen to.
     *
     * Classes extending <i>AbstractPatternTest</i> should implement the
     * <i>getPatterns()</i> method to register the patterns they wish to test.
     *
     * @return int[]
     * @see    process()
     */
    final public function register()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end register()


    /**
     * Returns the token types that the specified pattern is checking for.
     *
     * Returned array is in the format:
     * <code>
     *   array(
     *      T_WHITESPACE => 0, // 0 is the position where the T_WHITESPACE token
     *                         // should occur in the pattern.
     *   );
     * </code>
     *
     * @param array $pattern The parsed pattern to find the acquire the token
     *                       types from.
     *
     * @return array<int, int>
     */
    private function _getPatternTokenTypes($pattern)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end _getPatternTokenTypes()


    /**
     * Returns the position in the pattern that this test should register as
     * a listener for the pattern.
     *
     * @param array $pattern The pattern to acquire the listener for.
     *
     * @return int The position in the pattern that this test should register
     *             as the listener.
     * @throws PHP_CodeSniffer_Exception If we could not determine a token
     *                                         to listen for.
     */
    private function _getListenerTokenPos($pattern)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end _getListenerTokenPos()


    /**
     * Processes the test.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The PHP_CodeSniffer file where the
     *                                        token occurred.
     * @param int                  $stackPtr  The position in the tokens stack
     *                                        where the listening token type was
     *                                        found.
     *
     * @return void
     * @see    register()
     */
    final public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end process()


    /**
     * Processes the pattern and verifies the code at $stackPtr.
     *
     * @param array                $patternInfo Information about the pattern used
     *                                          for checking, which includes are
     *                                          parsed token representation of the
     *                                          pattern.
     * @param PHP_CodeSniffer_File $phpcsFile   The PHP_CodeSniffer file where the
     *                                          token occurred.
     * @param int                  $stackPtr    The position in the tokens stack where
     *                                          the listening token type was found.
     *
     * @return array
     */
    protected function processPattern(
        $patternInfo,
        PHP_CodeSniffer_File $phpcsFile,
        $stackPtr
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end processPattern()


    /**
     * Prepares an error for the specified patternCode.
     *
     * @param string $found       The actual found string in the code.
     * @param string $patternCode The expected pattern code.
     *
     * @return string The error message.
     */
    protected function prepareError($found, $patternCode)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end prepareError()


    /**
     * Returns the patterns that should be checked.
     *
     * @return string[]
     */
    abstract protected function getPatterns();


    /**
     * Registers any supplementary tokens that this test might wish to process.
     *
     * A sniff may wish to register supplementary tests when it wishes to group
     * an arbitrary validation that cannot be performed using a pattern, with
     * other pattern tests.
     *
     * @return int[]
     * @see    processSupplementary()
     */
    protected function registerSupplementary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end registerSupplementary()


    /**
     * Processes any tokens registered with registerSupplementary().
     *
     * @param PHP_CodeSniffer_File $phpcsFile The PHP_CodeSniffer file where to
     *                                        process the skip.
     * @param int                  $stackPtr  The position in the tokens stack to
     *                                        process.
     *
     * @return void
     * @see    registerSupplementary()
     */
    protected function processSupplementary(
        PHP_CodeSniffer_File $phpcsFile,
        $stackPtr
    ) {
    }//end processSupplementary()


    /**
     * Parses a pattern string into an array of pattern steps.
     *
     * @param string $pattern The pattern to parse.
     *
     * @return array The parsed pattern array.
     * @see    _createSkipPattern()
     * @see    _createTokenPattern()
     */
    private function _parse($pattern)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end _parse()


    /**
     * Creates a skip pattern.
     *
     * @param string $pattern The pattern being parsed.
     * @param string $from    The token content that the skip pattern starts from.
     *
     * @return array The pattern step.
     * @see    _createTokenPattern()
     * @see    _parse()
     */
    private function _createSkipPattern($pattern, $from)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end _createSkipPattern()


    /**
     * Creates a token pattern.
     *
     * @param string $str The tokens string that the pattern should match.
     *
     * @return array The pattern step.
     * @see    _createSkipPattern()
     * @see    _parse()
     */
    private function _createTokenPattern($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end _createTokenPattern()
}//end class
