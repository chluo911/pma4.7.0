<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Yaml;

use Symfony\Component\Yaml\Exception\ParseException;

/**
 * Unescaper encapsulates unescaping rules for single and double-quoted
 * YAML strings.
 *
 * @author Matthew Lewinski <matthew@lewinski.org>
 *
 * @internal
 */
class Unescaper
{
    /**
     * Regex fragment that matches an escaped character in a double quoted string.
     */
    const REGEX_ESCAPED_CHARACTER = '\\\\(x[0-9a-fA-F]{2}|u[0-9a-fA-F]{4}|U[0-9a-fA-F]{8}|.)';

    /**
     * Unescapes a single quoted string.
     *
     * @param string $value A single quoted string
     *
     * @return string The unescaped string
     */
    public function unescapeSingleQuotedString($value)
    {
        return str_replace('\'\'', '\'', $value);
    }

    /**
     * Unescapes a double quoted string.
     *
     * @param string $value A double quoted string
     *
     * @return string The unescaped string
     */
    public function unescapeDoubleQuotedString($value)
    {
        $callback = function ($match) {
            return $this->unescapeCharacter($match[0]);
        };

        // evaluate the string
        return preg_replace_callback('/'.self::REGEX_ESCAPED_CHARACTER.'/u', $callback, $value);
    }

    /**
     * Unescapes a character that was found in a double-quoted string.
     *
     * @param string $value An escaped character
     *
     * @return string The unescaped character
     */
    private function unescapeCharacter($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the UTF-8 character for the given code point.
     *
     * @param int $c The unicode code point
     *
     * @return string The corresponding UTF-8 character
     */
    private static function utf8chr($c)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
