<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Classes to create relation schema in EPS format.
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\eps;

use PMA\libraries\Response;

/**
 * This Class is EPS Library and
 * helps in developing structure of EPS Schema Export
 *
 * @package PhpMyAdmin
 * @access  public
 * @see     https://secure.php.net/manual/en/book.xmlwriter.php
 */
class Eps
{
    public $font;
    public $fontSize;
    public $stringCommands;

    /**
     * The "Eps" constructor
     *
     * Upon instantiation This starts writing the EPS Document.
     * %!PS-Adobe-3.0 EPSF-3.0 This is the MUST first comment to include
     * it shows/tells that the Post Script document is purely under
     * Document Structuring Convention [DSC] and is Compliant
     * Encapsulated Post Script Document
     */
    public function __construct()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set document title
     *
     * @param string $value sets the title text
     *
     * @return void
     */
    public function setTitle($value)
    {
        $this->stringCommands .= '%%Title: ' . $value . "\n";
    }

    /**
     * Set document author
     *
     * @param string $value sets the author
     *
     * @return void
     */
    public function setAuthor($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set document creation date
     *
     * @param string $value sets the date
     *
     * @return void
     */
    public function setDate($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set document orientation
     *
     * @param string $orientation sets the orientation
     *
     * @return void
     */
    public function setOrientation($orientation)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the font and size
     *
     * font can be set whenever needed in EPS
     *
     * @param string  $value sets the font name e.g Arial
     * @param integer $size  sets the size of the font e.g 10
     *
     * @return void
     */
    public function setFont($value, $size)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the font
     *
     * @return string return the font name e.g Arial
     */
    public function getFont()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the font Size
     *
     * @return string return the size of the font e.g 10
     */
    public function getFontSize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draw the line
     *
     * drawing the lines from x,y source to x,y destination and set the
     * width of the line. lines helps in showing relationships of tables
     *
     * @param integer $x_from    The x_from attribute defines the start
     *                           left position of the element
     * @param integer $y_from    The y_from attribute defines the start
     *                           right position of the element
     * @param integer $x_to      The x_to attribute defines the end
     *                           left position of the element
     * @param integer $y_to      The y_to attribute defines the end
     *                           right position of the element
     * @param integer $lineWidth Sets the width of the line e.g 2
     *
     * @return void
     */
    public function line(
        $x_from = 0,
        $y_from = 0,
        $x_to = 0,
        $y_to = 0,
        $lineWidth = 0
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draw the rectangle
     *
     * drawing the rectangle from x,y source to x,y destination and set the
     * width of the line. rectangles drawn around the text shown of fields
     *
     * @param integer $x_from    The x_from attribute defines the start
     *                           left position of the element
     * @param integer $y_from    The y_from attribute defines the start
     *                           right position of the element
     * @param integer $x_to      The x_to attribute defines the end
     *                           left position of the element
     * @param integer $y_to      The y_to attribute defines the end
     *                           right position of the element
     * @param integer $lineWidth Sets the width of the line e.g 2
     *
     * @return void
     */
    public function rect($x_from, $y_from, $x_to, $y_to, $lineWidth)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the current point
     *
     * The moveto operator takes two numbers off the stack and treats
     * them as x and y coordinates to which to move. The coordinates
     * specified become the current point.
     *
     * @param integer $x The x attribute defines the left position of the element
     * @param integer $y The y attribute defines the right position of the element
     *
     * @return void
     */
    public function moveTo($x, $y)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Output/Display the text
     *
     * @param string $text The string to be displayed
     *
     * @return void
     */
    public function show($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Output the text at specified co-ordinates
     *
     * @param string  $text String to be displayed
     * @param integer $x    X attribute defines the left position of the element
     * @param integer $y    Y attribute defines the right position of the element
     *
     * @return void
     */
    public function showXY($text, $x, $y)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ends EPS Document
     *
     * @return void
     */
    public function endEpsDoc()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Output EPS Document for download
     *
     * @param string $fileName name of the eps document
     *
     * @return void
     */
    public function showOutput($fileName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
