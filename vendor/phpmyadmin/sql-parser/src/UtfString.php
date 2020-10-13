<?php

/**
 * Implementation for UTF-8 strings.
 *
 * The subscript operator in PHP, when used with string will return a byte
 * and not a character. Because in UTF-8 strings a character may occupy more
 * than one byte, the subscript operator may return an invalid character.
 *
 * Because the lexer relies on the subscript operator this class had to be
 * implemented.
 */

namespace PhpMyAdmin\SqlParser;

/**
 * Implements array-like access for UTF-8 strings.
 *
 * In this library, this class should be used to parse UTF-8 queries.
 *
 * @category Misc
 *
 * @license  https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0+
 */
class UtfString implements \ArrayAccess
{
    /**
     * The raw, multi-byte string.
     *
     * @var string
     */
    public $str = '';

    /**
     * The index of current byte.
     *
     * For ASCII strings, the byte index is equal to the character index.
     *
     * @var int
     */
    public $byteIdx = 0;

    /**
     * The index of current character.
     *
     * For non-ASCII strings, some characters occupy more than one byte and
     * the character index will have a lower value than the byte index.
     *
     * @var int
     */
    public $charIdx = 0;

    /**
     * The length of the string (in bytes).
     *
     * @var int
     */
    public $byteLen = 0;

    /**
     * The length of the string (in characters).
     *
     * @var int
     */
    public $charLen = 0;

    /**
     * Constructor.
     *
     * @param string $str the string
     */
    public function __construct($str)
    {
        $this->str = $str;
        $this->byteIdx = 0;
        $this->charIdx = 0;
        $this->byteLen = mb_strlen($str, '8bit');
        $this->charLen = mb_strlen($str, 'UTF-8');
    }

    /**
     * Checks if the given offset exists.
     *
     * @param int $offset the offset to be checked
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the character at given offset.
     *
     * @param int $offset the offset to be returned
     *
     * @return string
     */
    public function offsetGet($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the value of a character.
     *
     * @param int    $offset the offset to be set
     * @param string $value  the value to be set
     *
     * @throws \Exception not implemented
     */
    public function offsetSet($offset, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Unsets an index.
     *
     * @param int $offset the value to be unset
     *
     * @throws \Exception not implemented
     */
    public function offsetUnset($offset)
    {
        throw new \Exception('Not implemented.');
    }

    /**
     * Gets the length of an UTF-8 character.
     *
     * According to RFC 3629, a UTF-8 character can have at most 4 bytes.
     * However, this implementation supports UTF-8 characters containing up to 6
     * bytes.
     *
     * @param string $byte the byte to be analyzed
     *
     * @see https://tools.ietf.org/html/rfc3629
     *
     * @return int
     */
    public static function getCharLength($byte)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the length in characters of the string.
     *
     * @return int
     */
    public function length()
    {
        return $this->charLen;
    }

    /**
     * Returns the contained string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->str;
    }
}
