<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Tag;

/**
 * Reflection class for a {@}example tag in a Docblock.
 */
final class Example extends BaseTag
{
    /**
     * @var string Path to a file to use as an example. May also be an absolute URI.
     */
    private $filePath = '';

    /**
     * @var bool Whether the file path component represents an URI. This determines how the file portion
     *     appears at {@link getContent()}.
     */
    private $isURI = false;

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        if (null === $this->description) {
            $filePath = '"' . $this->filePath . '"';
            if ($this->isURI) {
                $filePath = $this->isUriRelative($this->filePath)
                    ? str_replace('%2F', '/', rawurlencode($this->filePath))
                    :$this->filePath;
            }

            $this->description = $filePath . ' ' . parent::getContent();
        }

        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create($body)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the file path.
     *
     * @return string Path to a file to use as an example.
     *     May also be an absolute URI.
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Sets the file path.
     *
     * @param string $filePath The new file path to use for the example.
     *
     * @return $this
     */
    public function setFilePath($filePath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the file path as an URI.
     *
     * This function is equivalent to {@link setFilePath()}, except that it
     * converts an URI to a file path before that.
     *
     * There is no getFileURI(), as {@link getFilePath()} is compatible.
     *
     * @param string $uri The new file URI to use as an example.
     *
     * @return $this
     */
    public function setFileURI($uri)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->filePath . ($this->description ? ' ' . $this->description->render() : '');
    }

    /**
     * Returns true if the provided URI is relative or contains a complete scheme (and thus is absolute).
     *
     * @param string $uri
     *
     * @return bool
     */
    private function isUriRelative($uri)
    {
        return false === strpos($uri, ':');
    }
}
