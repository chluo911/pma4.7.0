<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * XML helpers.
 *
 * @since Class available since Release 3.2.0
 */
class PHPUnit_Util_XML
{
    /**
     * Escapes a string for the use in XML documents
     * Any Unicode character is allowed, excluding the surrogate blocks, FFFE,
     * and FFFF (not even as character reference).
     * See http://www.w3.org/TR/xml/#charsets
     *
     * @param string $string
     *
     * @return string
     *
     * @since  Method available since Release 3.4.6
     */
    public static function prepareString($string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Loads an XML (or HTML) file into a DOMDocument object.
     *
     * @param string $filename
     * @param bool   $isHtml
     * @param bool   $xinclude
     * @param bool   $strict
     *
     * @return DOMDocument
     *
     * @since  Method available since Release 3.3.0
     */
    public static function loadFile($filename, $isHtml = false, $xinclude = false, $strict = false)
    {
        $reporting = error_reporting(0);
        $contents  = file_get_contents($filename);
        error_reporting($reporting);

        if ($contents === false) {
            throw new PHPUnit_Framework_Exception(
                sprintf(
                    'Could not read "%s".',
                    $filename
                )
            );
        }

        return self::load($contents, $isHtml, $filename, $xinclude, $strict);
    }

    /**
     * Load an $actual document into a DOMDocument.  This is called
     * from the selector assertions.
     *
     * If $actual is already a DOMDocument, it is returned with
     * no changes.  Otherwise, $actual is loaded into a new DOMDocument
     * as either HTML or XML, depending on the value of $isHtml. If $isHtml is
     * false and $xinclude is true, xinclude is performed on the loaded
     * DOMDocument.
     *
     * Note: prior to PHPUnit 3.3.0, this method loaded a file and
     * not a string as it currently does.  To load a file into a
     * DOMDocument, use loadFile() instead.
     *
     * @param string|DOMDocument $actual
     * @param bool               $isHtml
     * @param string             $filename
     * @param bool               $xinclude
     * @param bool               $strict
     *
     * @return DOMDocument
     *
     * @since  Method available since Release 3.3.0
     */
    public static function load($actual, $isHtml = false, $filename = '', $xinclude = false, $strict = false)
    {
        if ($actual instanceof DOMDocument) {
            return $actual;
        }

        if (!is_string($actual)) {
            throw new PHPUnit_Framework_Exception('Could not load XML from ' . gettype($actual));
        }

        if ($actual === '') {
            throw new PHPUnit_Framework_Exception('Could not load XML from empty string');
        }

        // Required for XInclude on Windows.
        if ($xinclude) {
            $cwd = getcwd();
            @chdir(dirname($filename));
        }

        $document                     = new DOMDocument;
        $document->preserveWhiteSpace = false;

        $internal  = libxml_use_internal_errors(true);
        $message   = '';
        $reporting = error_reporting(0);

        if ('' !== $filename) {
            // Necessary for xinclude
            $document->documentURI = $filename;
        }

        if ($isHtml) {
            $loaded = $document->loadHTML($actual);
        } else {
            $loaded = $document->loadXML($actual);
        }

        if (!$isHtml && $xinclude) {
            $document->xinclude();
        }

        foreach (libxml_get_errors() as $error) {
            $message .= "\n" . $error->message;
        }

        libxml_use_internal_errors($internal);
        error_reporting($reporting);

        if ($xinclude) {
            @chdir($cwd);
        }

        if ($loaded === false || ($strict && $message !== '')) {
            if ($filename !== '') {
                throw new PHPUnit_Framework_Exception(
                    sprintf(
                        'Could not load "%s".%s',
                        $filename,
                        $message != '' ? "\n" . $message : ''
                    )
                );
            } else {
                if ($message === '') {
                    $message = 'Could not load XML for unknown reason';
                }
                throw new PHPUnit_Framework_Exception($message);
            }
        }

        return $document;
    }

    /**
     * @param DOMNode $node
     *
     * @return string
     *
     * @since  Method available since Release 3.4.0
     */
    public static function nodeToText(DOMNode $node)
    {
        if ($node->childNodes->length == 1) {
            return $node->textContent;
        }

        $result = '';

        foreach ($node->childNodes as $childNode) {
            $result .= $node->ownerDocument->saveXML($childNode);
        }

        return $result;
    }

    /**
     * @param DOMNode $node
     *
     * @since  Method available since Release 3.3.0
     */
    public static function removeCharacterDataNodes(DOMNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * "Convert" a DOMElement object into a PHP variable.
     *
     * @param DOMElement $element
     *
     * @return mixed
     *
     * @since  Method available since Release 3.4.0
     */
    public static function xmlToVariable(DOMElement $element)
    {
        $variable = null;

        switch ($element->tagName) {
            case 'array':
                $variable = array();

                foreach ($element->childNodes as $entry) {
                    if (!$entry instanceof DOMElement || $entry->tagName !== 'element') {
                        continue;
                    }
                    $item = $entry->childNodes->item(0);

                    if ($item instanceof DOMText) {
                        $item = $entry->childNodes->item(1);
                    }

                    $value = self::xmlToVariable($item);

                    if ($entry->hasAttribute('key')) {
                        $variable[(string) $entry->getAttribute('key')] = $value;
                    } else {
                        $variable[] = $value;
                    }
                }
                break;

            case 'object':
                $className = $element->getAttribute('class');

                if ($element->hasChildNodes()) {
                    $arguments       = $element->childNodes->item(1)->childNodes;
                    $constructorArgs = array();

                    foreach ($arguments as $argument) {
                        if ($argument instanceof DOMElement) {
                            $constructorArgs[] = self::xmlToVariable($argument);
                        }
                    }

                    $class    = new ReflectionClass($className);
                    $variable = $class->newInstanceArgs($constructorArgs);
                } else {
                    $variable = new $className;
                }
                break;

            case 'boolean':
                $variable = $element->textContent == 'true' ? true : false;
                break;

            case 'integer':
            case 'double':
            case 'string':
                $variable = $element->textContent;

                settype($variable, $element->tagName);
                break;
        }

        return $variable;
    }

    /**
     * Validate list of keys in the associative array.
     *
     * @param array $hash
     * @param array $validKeys
     *
     * @return array
     *
     * @throws PHPUnit_Framework_Exception
     *
     * @since  Method available since Release 3.3.0
     */
    public static function assertValidKeys(array $hash, array $validKeys)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse a CSS selector into an associative array suitable for
     * use with findNodes().
     *
     * @param string $selector
     * @param mixed  $content
     *
     * @return array
     *
     * @since  Method available since Release 3.3.0
     */
    public static function convertSelectToTag($selector, $content = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse an $actual document and return an array of DOMNodes
     * matching the CSS $selector.  If an error occurs, it will
     * return false.
     *
     * To only return nodes containing a certain content, give
     * the $content to match as a string.  Otherwise, setting
     * $content to true will return all nodes matching $selector.
     *
     * The $actual document may be a DOMDocument or a string
     * containing XML or HTML, identified by $isHtml.
     *
     * @param array  $selector
     * @param string $content
     * @param mixed  $actual
     * @param bool   $isHtml
     *
     * @return bool|array
     *
     * @since  Method available since Release 3.3.0
     */
    public static function cssSelect($selector, $content, $actual, $isHtml = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse out the options from the tag using DOM object tree.
     *
     * @param DOMDocument $dom
     * @param array       $options
     * @param bool        $isHtml
     *
     * @return array
     *
     * @since  Method available since Release 3.3.0
     */
    public static function findNodes(DOMDocument $dom, array $options, $isHtml = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Recursively get flat array of all descendants of this node.
     *
     * @param DOMNode $node
     *
     * @return array
     *
     * @since  Method available since Release 3.3.0
     */
    protected static function getDescendants(DOMNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets elements by case insensitive tagname.
     *
     * @param DOMDocument $dom
     * @param string      $tag
     *
     * @return DOMNodeList
     *
     * @since  Method available since Release 3.4.0
     */
    protected static function getElementsByCaseInsensitiveTagName(DOMDocument $dom, $tag)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the text value of this node's child text node.
     *
     * @param DOMNode $node
     *
     * @return string
     *
     * @since  Method available since Release 3.3.0
     */
    protected static function getNodeText(DOMNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
