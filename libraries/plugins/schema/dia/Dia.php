<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Classes to create relation schema in Dia format.
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\dia;

use PMA;
use PMA\libraries\Response;
use XMLWriter;

/**
 * This Class inherits the XMLwriter class and
 * helps in developing structure of DIA Schema Export
 *
 * @package PhpMyAdmin
 * @access  public
 * @see     https://secure.php.net/manual/en/book.xmlwriter.php
 */
class Dia extends XMLWriter
{
    /**
     * The "Dia" constructor
     *
     * Upon instantiation This starts writing the Dia XML document
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
     * Starts Dia Document
     *
     * dia document starts by first initializing dia:diagram tag
     * then dia:diagramdata contains all the attributes that needed
     * to define the document, then finally a Layer starts which
     * holds all the objects.
     *
     * @param string $paper        the size of the paper/document
     * @param float  $topMargin    top margin of the paper/document in cm
     * @param float  $bottomMargin bottom margin of the paper/document in cm
     * @param float  $leftMargin   left margin of the paper/document in cm
     * @param float  $rightMargin  right margin of the paper/document in cm
     * @param string $orientation  orientation of the document, portrait or landscape
     *
     * @return void
     *
     * @access public
     * @see    XMLWriter::startElement(),XMLWriter::writeAttribute(),
     *      XMLWriter::writeRaw()
     */
    public function startDiaDoc(
        $paper,
        $topMargin,
        $bottomMargin,
        $leftMargin,
        $rightMargin,
        $orientation
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Ends Dia Document
     *
     * @return void
     * @access public
     * @see    XMLWriter::endElement(),XMLWriter::endDocument()
     */
    public function endDiaDoc()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Output Dia Document for download
     *
     * @param string $fileName name of the dia document
     *
     * @return void
     * @access public
     * @see    XMLWriter::flush()
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
