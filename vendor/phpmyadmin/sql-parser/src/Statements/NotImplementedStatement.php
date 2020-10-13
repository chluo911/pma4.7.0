<?php

/**
 * Not implemented (yet) statements.
 */

namespace PhpMyAdmin\SqlParser\Statements;

use PhpMyAdmin\SqlParser\Parser;
use PhpMyAdmin\SqlParser\Statement;
use PhpMyAdmin\SqlParser\Token;
use PhpMyAdmin\SqlParser\TokensList;

/**
 * Not implemented (yet) statements.
 *
 * The `after` function makes the parser jump straight to the first delimiter.
 *
 * @category   Statements
 *
 * @license    https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0+
 */
class NotImplementedStatement extends Statement
{
    /**
     * The part of the statement that can't be parsed.
     *
     * @var Token[]
     */
    public $unknown = array();

    /**
     * @return string
     */
    public function build()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param Parser     $parser the instance that requests parsing
     * @param TokensList $list   the list of tokens to be parsed
     */
    public function parse(Parser $parser, TokensList $list)
    {
        for (; $list->idx < $list->count; ++$list->idx) {
            if ($list->tokens[$list->idx]->type === Token::TYPE_DELIMITER) {
                break;
            }
            $this->unknown[] = $list->tokens[$list->idx];
        }
    }
}
