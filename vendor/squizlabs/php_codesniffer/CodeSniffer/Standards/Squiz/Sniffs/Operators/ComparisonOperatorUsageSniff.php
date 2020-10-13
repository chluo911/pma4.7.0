<?php
/**
 * A Sniff to enforce the use of IDENTICAL type operators rather than EQUAL operators.
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
 * A Sniff to enforce the use of IDENTICAL type operators rather than EQUAL operators.
 *
 * The use of === true is enforced over implicit true statements,
 * for example:
 *
 * <code>
 * if ($a)
 * {
 *     ...
 * }
 * </code>
 *
 * should be:
 *
 * <code>
 * if ($a === true)
 * {
 *     ...
 * }
 * </code>
 *
 * It also enforces the use of === false over ! operators.
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
class Squiz_Sniffs_Operators_ComparisonOperatorUsageSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * A list of tokenizers this sniff supports.
     *
     * @var array
     */
    public $supportedTokenizers = array(
                                   'PHP',
                                   'JS',
                                  );

    /**
     * A list of valid comparison operators.
     *
     * @var array
     */
    private static $_validOps = array(
                                 T_IS_IDENTICAL,
                                 T_IS_NOT_IDENTICAL,
                                 T_LESS_THAN,
                                 T_GREATER_THAN,
                                 T_IS_GREATER_OR_EQUAL,
                                 T_IS_SMALLER_OR_EQUAL,
                                 T_INSTANCEOF,
                                );

    /**
     * A list of invalid operators with their alternatives.
     *
     * @var array(int => string)
     */
    private static $_invalidOps = array(
                                   'PHP' => array(
                                             T_IS_EQUAL     => '===',
                                             T_IS_NOT_EQUAL => '!==',
                                             T_BOOLEAN_NOT  => '=== FALSE',
                                            ),
                                   'JS'  => array(
                                             T_IS_EQUAL     => '===',
                                             T_IS_NOT_EQUAL => '!==',
                                            ),
                                  );


    /**
     * Registers the token types that this sniff wishes to listen to.
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
     * Process the tokens that this sniff is listening for.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file where the token was found.
     * @param int                  $stackPtr  The position in the stack where the token
     *                                        was found.
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
}//end class
