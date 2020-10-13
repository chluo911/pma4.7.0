<?php

namespace spec\Prophecy\Argument\Token;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Argument\Token\TokenInterface;

class LogicalAndTokenSpec extends ObjectBehavior
{
    public function it_implements_TokenInterface()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_is_not_last()
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

    public function it_wraps_non_token_arguments_into_ExactValueToken()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_scores_the_maximum_score_from_all_scores_returned_by_tokens(TokenInterface $token1, TokenInterface $token2)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_score_if_there_are_no_arguments_or_tokens()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_score_if_either_of_tokens_does_not_score(TokenInterface $token1, TokenInterface $token2)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
