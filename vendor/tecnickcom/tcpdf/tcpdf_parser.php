<?php
//============================================================+
// File name   : tcpdf_parser.php
// Version     : 1.0.16
// Begin       : 2011-05-23
// Last Update : 2015-04-28
// Author      : Nicola Asuni - Tecnick.com LTD - www.tecnick.com - info@tecnick.com
// License     : http://www.tecnick.com/pagefiles/tcpdf/LICENSE.TXT GNU-LGPLv3
// -------------------------------------------------------------------
// Copyright (C) 2011-2015 Nicola Asuni - Tecnick.com LTD
//
// This file is part of TCPDF software library.
//
// TCPDF is free software: you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// TCPDF is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the License
// along with TCPDF. If not, see
// <http://www.tecnick.com/pagefiles/tcpdf/LICENSE.TXT>.
//
// See LICENSE.TXT file for more information.
// -------------------------------------------------------------------
//
// Description : This is a PHP class for parsing PDF documents.
//
//============================================================+

/**
 * @file
 * This is a PHP class for parsing PDF documents.<br>
 * @package com.tecnick.tcpdf
 * @author Nicola Asuni
 * @version 1.0.15
 */

// include class for decoding filters
require_once(dirname(__FILE__).'/include/tcpdf_filters.php');

/**
 * @class TCPDF_PARSER
 * This is a PHP class for parsing PDF documents.<br>
 * @package com.tecnick.tcpdf
 * @brief This is a PHP class for parsing PDF documents..
 * @version 1.0.15
 * @author Nicola Asuni - info@tecnick.com
 */
class TCPDF_PARSER
{

    /**
     * Raw content of the PDF document.
     * @private
     */
    private $pdfdata = '';

    /**
     * XREF data.
     * @protected
     */
    protected $xref = array();

    /**
     * Array of PDF objects.
     * @protected
     */
    protected $objects = array();

    /**
     * Class object for decoding filters.
     * @private
     */
    private $FilterDecoders;

    /**
     * Array of configuration parameters.
     * @private
     */
    private $cfg = array(
        'die_for_errors' => false,
        'ignore_filter_decoding_errors' => true,
        'ignore_missing_filter_decoders' => true,
    );

    // -----------------------------------------------------------------------------

    /**
     * Parse a PDF document an return an array of objects.
     * @param $data (string) PDF data to parse.
     * @param $cfg (array) Array of configuration parameters:
     * 			'die_for_errors' : if true termitate the program execution in case of error, otherwise thows an exception;
     * 			'ignore_filter_decoding_errors' : if true ignore filter decoding errors;
     * 			'ignore_missing_filter_decoders' : if true ignore missing filter decoding errors.
     * @public
     * @since 1.0.000 (2011-05-24)
     */
    public function __construct($data, $cfg=array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the configuration parameters.
     * @param $cfg (array) Array of configuration parameters:
     * 			'die_for_errors' : if true termitate the program execution in case of error, otherwise thows an exception;
     * 			'ignore_filter_decoding_errors' : if true ignore filter decoding errors;
     * 			'ignore_missing_filter_decoders' : if true ignore missing filter decoding errors.
     * @public
     */
    protected function setConfig($cfg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return an array of parsed PDF document objects.
     * @return (array) Array of parsed PDF document objects.
     * @public
     * @since 1.0.000 (2011-06-26)
     */
    public function getParsedData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get Cross-Reference (xref) table and trailer data from PDF document data.
     * @param $offset (int) xref offset (if know).
     * @param $xref (array) previous xref array (if any).
     * @return Array containing xref and trailer data.
     * @protected
     * @since 1.0.000 (2011-05-24)
     */
    protected function getXrefData($offset=0, $xref=array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Decode the Cross-Reference section
     * @param $startxref (int) Offset at which the xref section starts (position of the 'xref' keyword).
     * @param $xref (array) Previous xref array (if any).
     * @return Array containing xref and trailer data.
     * @protected
     * @since 1.0.000 (2011-06-20)
     */
    protected function decodeXref($startxref, $xref=array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Decode the Cross-Reference Stream section
     * @param $startxref (int) Offset at which the xref section starts.
     * @param $xref (array) Previous xref array (if any).
     * @return Array containing xref and trailer data.
     * @protected
     * @since 1.0.003 (2013-03-16)
     */
    protected function decodeXrefStream($startxref, $xref=array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get object type, raw value and offset to next object
     * @param $offset (int) Object offset.
     * @return array containing object type, raw value and offset to next object
     * @protected
     * @since 1.0.000 (2011-06-20)
     */
    protected function getRawObject($offset=0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get content of indirect object.
     * @param $obj_ref (string) Object number and generation number separated by underscore character.
     * @param $offset (int) Object offset.
     * @param $decoding (boolean) If true decode streams.
     * @return array containing object data.
     * @protected
     * @since 1.0.000 (2011-05-24)
     */
    protected function getIndirectObject($obj_ref, $offset=0, $decoding=true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the content of object, resolving indect object reference if necessary.
     * @param $obj (string) Object value.
     * @return array containing object data.
     * @protected
     * @since 1.0.000 (2011-06-26)
     */
    protected function getObjectVal($obj)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Decode the specified stream.
     * @param $sdic (array) Stream's dictionary array.
     * @param $stream (string) Stream to decode.
     * @return array containing decoded stream data and remaining filters.
     * @protected
     * @since 1.0.000 (2011-06-22)
     */
    protected function decodeStream($sdic, $stream)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Throw an exception or print an error message and die if the K_TCPDF_PARSER_THROW_EXCEPTION_ERROR constant is set to true.
     * @param $msg (string) The error message
     * @public
     * @since 1.0.000 (2011-05-23)
     */
    public function Error($msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
} // END OF TCPDF_PARSER CLASS

//============================================================+
// END OF FILE
//============================================================+
