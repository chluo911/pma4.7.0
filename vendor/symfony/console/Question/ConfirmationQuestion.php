<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Question;

/**
 * Represents a yes/no question.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ConfirmationQuestion extends Question
{
    private $trueAnswerRegex;

    /**
     * Constructor.
     *
     * @param string $question        The question to ask to the user
     * @param bool   $default         The default answer to return, true or false
     * @param string $trueAnswerRegex A regex to match the "yes" answer
     */
    public function __construct($question, $default = true, $trueAnswerRegex = '/^y/i')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the default answer normalizer.
     *
     * @return callable
     */
    private function getDefaultNormalizer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
