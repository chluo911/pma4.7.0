<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Formset processing library
 *
 * @package PhpMyAdmin-Setup
 */
use PMA\libraries\config\FormDisplay;
use PMA\libraries\URL;
use PMA\libraries\Response;

/**
 * Processes forms registered in $form_display, handles error correction
 *
 * @param FormDisplay $form_display Form to display
 *
 * @return void
 */
function PMA_Process_formset(FormDisplay $form_display)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Generate header for 303
 *
 * @return void
 */
function PMA_generateHeader303()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
