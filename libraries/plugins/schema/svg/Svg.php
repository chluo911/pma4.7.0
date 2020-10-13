<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Classes to create relation schema in SVG format.
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\svg;

use PMA;
use PMA\libraries\Response;
use XMLWriter;

/**
 * This Class inherits the XMLwriter class and
 * helps in developing structure of SVG Schema Export
 *
 * @package PhpMyAdmin
 * @access  public
 * @see     https://secure.php.net/manual/en/book.xmlwriter.php
 */
class Svg extends XMLWriter
{
    public $title;
    public $author;
    public $font;
    public $fontSize;

    /**
     * The "PMA\libraries\plugins\schema\svg\Svg" constructor
     *
     * Upon instantiation This starts writing the RelationStatsSvg XML document
     *
     * @see XMLWriter::openMemory(),XMLWriter::setIndent(),XMLWriter::startDocument()
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
        $this->title = $value;
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
     * Set document font
     *
     * @param string $value sets the font e.g Arial, Sans-serif etc
     *
     * @return void
     */
    public function setFont($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get document font
     *
     * @return string returns the font name
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
     * Set document font size
     *
     * @param integer $value sets the font size in pixels
     *
     * @return void
     */
    public function setFontSize($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get document font size
     *
     * @return integer returns the font size
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
     * Starts RelationStatsSvg Document
     *
     * svg document starts by first initializing svg tag
     * which contains all the attributes and namespace that needed
     * to define the svg document
     *
     * @param integer $width  total width of the RelationStatsSvg document
     * @param integer $height total height of the RelationStatsSvg document
     * @param integer $x      min-x of the view box
     * @param integer $y      min-y of the view box
     *
     * @return void
     *
     * @see XMLWriter::startElement(),XMLWriter::writeAttribute()
     */
    public function startSvgDoc($width, $height, $x = 0, $y = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ends RelationStatsSvg Document
     *
     * @return void
     * @see XMLWriter::endElement(),XMLWriter::endDocument()
     */
    public function endSvgDoc()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * output RelationStatsSvg Document
     *
     * svg document prompted to the user for download
     * RelationStatsSvg document saved in .svg extension and can be
     * easily changeable by using any svg IDE
     *
     * @param string $fileName file name
     *
     * @return void
     * @see XMLWriter::startElement(),XMLWriter::writeAttribute()
     */
    public function showOutput($fileName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draws RelationStatsSvg elements
     *
     * SVG has some predefined shape elements like rectangle & text
     * and other elements who have x,y co-ordinates are drawn.
     * specify their width and height and can give styles too.
     *
     * @param string     $name   RelationStatsSvg element name
     * @param int        $x      The x attr defines the left position of the element
     *                           (e.g. x="0" places the element 0 pixels from the
     *                           left of the browser window)
     * @param integer    $y      The y attribute defines the top position of the
     *                           element (e.g. y="0" places the element 0 pixels
     *                           from the top of the browser window)
     * @param int|string $width  The width attribute defines the width the element
     * @param int|string $height The height attribute defines the height the element
     * @param string     $text   The text attribute defines the text the element
     * @param string     $styles The style attribute defines the style the element
     *                           styles can be defined like CSS styles
     *
     * @return void
     *
     * @see XMLWriter::startElement(), XMLWriter::writeAttribute(),
     * XMLWriter::text(), XMLWriter::endElement()
     */
    public function printElement(
        $name,
        $x,
        $y,
        $width = '',
        $height = '',
        $text = '',
        $styles = ''
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draws RelationStatsSvg Line element
     *
     * RelationStatsSvg line element is drawn for connecting the tables.
     * arrows are also drawn by specify its start and ending
     * co-ordinates
     *
     * @param string  $name   RelationStatsSvg element name i.e line
     * @param integer $x1     Defines the start of the line on the x-axis
     * @param integer $y1     Defines the start of the line on the y-axis
     * @param integer $x2     Defines the end of the line on the x-axis
     * @param integer $y2     Defines the end of the line on the y-axis
     * @param string  $styles The style attribute defines the style the element
     *                        styles can be defined like CSS styles
     *
     * @return void
     *
     * @see XMLWriter::startElement(), XMLWriter::writeAttribute(),
     * XMLWriter::endElement()
     */
    public function printElementLine($name, $x1, $y1, $x2, $y2, $styles)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
