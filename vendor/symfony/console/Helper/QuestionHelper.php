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

use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\StreamableInputInterface;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

/**
 * The QuestionHelper class provides helpers to interact with the user.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class QuestionHelper extends Helper
{
    private $inputStream;
    private static $shell;
    private static $stty;

    /**
     * Asks a question to the user.
     *
     * @param InputInterface  $input    An InputInterface instance
     * @param OutputInterface $output   An OutputInterface instance
     * @param Question        $question The question to ask
     *
     * @return mixed The user answer
     *
     * @throws RuntimeException If there is no data to read in the input stream
     */
    public function ask(InputInterface $input, OutputInterface $output, Question $question)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the input stream to read from when interacting with the user.
     *
     * This is mainly useful for testing purpose.
     *
     * @deprecated since version 3.2, to be removed in 4.0. Use
     *             StreamableInputInterface::setStream() instead.
     *
     * @param resource $stream The input stream
     *
     * @throws InvalidArgumentException In case the stream is not a resource
     */
    public function setInputStream($stream)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the helper's input stream.
     *
     * @deprecated since version 3.2, to be removed in 4.0. Use
     *             StreamableInputInterface::getStream() instead.
     *
     * @return resource
     */
    public function getInputStream()
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
        return 'question';
    }

    /**
     * Asks the question to the user.
     *
     * @param OutputInterface $output
     * @param Question        $question
     *
     * @return bool|mixed|null|string
     *
     * @throws \Exception
     * @throws \RuntimeException
     */
    private function doAsk(OutputInterface $output, Question $question)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs the question prompt.
     *
     * @param OutputInterface $output
     * @param Question        $question
     */
    protected function writePrompt(OutputInterface $output, Question $question)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs an error message.
     *
     * @param OutputInterface $output
     * @param \Exception      $error
     */
    protected function writeError(OutputInterface $output, \Exception $error)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Autocompletes a question.
     *
     * @param OutputInterface $output
     * @param Question        $question
     * @param resource        $inputStream
     *
     * @return string
     */
    private function autocomplete(OutputInterface $output, Question $question, $inputStream)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets a hidden response from user.
     *
     * @param OutputInterface $output      An Output instance
     * @param resource        $inputStream The handler resource
     *
     * @return string The answer
     *
     * @throws RuntimeException In case the fallback is deactivated and the response cannot be hidden
     */
    private function getHiddenResponse(OutputInterface $output, $inputStream)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Validates an attempt.
     *
     * @param callable        $interviewer A callable that will ask for a question and return the result
     * @param OutputInterface $output      An Output instance
     * @param Question        $question    A Question instance
     *
     * @return mixed The validated response
     *
     * @throws \Exception In case the max number of attempts has been reached and no valid response has been given
     */
    private function validateAttempts(callable $interviewer, OutputInterface $output, Question $question)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a valid unix shell.
     *
     * @return string|bool The valid shell name, false in case no valid shell is found
     */
    private function getShell()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether Stty is available or not.
     *
     * @return bool
     */
    private function hasSttyAvailable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
