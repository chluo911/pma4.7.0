<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Util;

/**
 * XMLUtils is a bunch of utility methods to XML operations.
 *
 * This class contains static methods only and is not meant to be instantiated.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
class XmlUtils
{
    /**
     * This class should not be instantiated.
     */
    private function __construct()
    {
    }

    /**
     * Loads an XML file.
     *
     * @param string               $file             An XML file path
     * @param string|callable|null $schemaOrCallable An XSD schema file path, a callable, or null to disable validation
     *
     * @return \DOMDocument
     *
     * @throws \InvalidArgumentException When loading of XML file returns error
     */
    public static function loadFile($file, $schemaOrCallable = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts a \DomElement object to a PHP array.
     *
     * The following rules applies during the conversion:
     *
     *  * Each tag is converted to a key value or an array
     *    if there is more than one "value"
     *
     *  * The content of a tag is set under a "value" key (<foo>bar</foo>)
     *    if the tag also has some nested tags
     *
     *  * The attributes are converted to keys (<foo foo="bar"/>)
     *
     *  * The nested-tags are converted to keys (<foo><foo>bar</foo></foo>)
     *
     * @param \DomElement $element     A \DomElement instance
     * @param bool        $checkPrefix Check prefix in an element or an attribute name
     *
     * @return array A PHP array
     */
    public static function convertDomElementToArray(\DOMElement $element, $checkPrefix = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts an xml value to a PHP type.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public static function phpize($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected static function getXmlErrors($internalErrors)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
