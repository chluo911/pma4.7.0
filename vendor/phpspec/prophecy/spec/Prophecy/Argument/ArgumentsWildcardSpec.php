<?php

namespace spec\Prophecy\Argument;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument\Token\TokenInterface;

class ArgumentsWildcardSpec extends ObjectBehavior
{
    public function it_wraps_non_token_arguments_into_ExactValueToken(\stdClass $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_generates_string_representation_from_all_tokens_imploded(
        TokenInterface $token1,
        TokenInterface $token2,
        TokenInterface $token3
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_exposes_list_of_tokens(TokenInterface $token)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_score_of_1_if_there_are_no_tokens_and_arguments()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_return_match_score_based_on_all_tokens_score(
        TokenInterface $token1,
        TokenInterface $token2,
        TokenInterface $token3
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_false_if_there_is_less_arguments_than_tokens(
        TokenInterface $token1,
        TokenInterface $token2,
        TokenInterface $token3
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_false_if_there_is_less_tokens_than_arguments(
        TokenInterface $token1,
        TokenInterface $token2,
        TokenInterface $token3
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_return_false_if_one_of_the_tokens_returns_false(
        TokenInterface $token1,
        TokenInterface $token2,
        TokenInterface $token3
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_calculate_score_until_last_token(
        TokenInterface $token1,
        TokenInterface $token2,
        TokenInterface $token3
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
