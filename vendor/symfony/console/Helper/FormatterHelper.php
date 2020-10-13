<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Formatter\OutputFormatter;

/**
 * The Formatter class provides helpers to format messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormatterHelper extends Helper
{
    /**
     * Formats a message within a section.
     *
     * @param string $section The section name
     * @param string $message The message
     * @param string $style   The style to apply to the section
     *
     * @return string The format section
     */
    public function formatSection($section, $message, $style = 'info')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Formats a message as a block of text.
     *
     * @param string|array $messages The message to write in the block
     * @param string       $style    The style to apply to the whole block
     * @param bool         $large    Whether to return a large block
     *
     * @return string The formatter message
     */
    public function formatBlock($messages, $style, $large = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Truncates a message to the given length.
     *
     * @param string $message
     * @param int    $length
     * @param string $suffix
     *
     * @return string
     */
    public function truncate($message, $length, $suffix = '...')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'formatter';
    }
}
