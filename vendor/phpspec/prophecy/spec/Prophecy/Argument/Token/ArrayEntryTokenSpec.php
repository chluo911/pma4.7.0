<?php

namespace spec\Prophecy\Argument\Token;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Argument\Token\ExactValueToken;
use Prophecy\Argument\Token\TokenInterface;
use Prophecy\Exception\InvalidArgumentException;

class ArrayEntryTokenSpec extends ObjectBehavior
{
    public function let(TokenInterface $key, TokenInterface $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

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

    public function it_holds_key_and_value($key, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_string_representation_tells_that_its_an_array_containing_the_key_value_pair($key, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_wraps_non_token_value_into_ExactValueToken(TokenInterface $key, \stdClass $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_wraps_non_token_key_into_ExactValueToken(\stdClass $object, TokenInterface $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_scores_array_half_of_combined_scores_from_key_and_value_tokens($key, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_scores_traversable_object_half_of_combined_scores_from_key_and_value_tokens(
        TokenInterface $key,
        TokenInterface $value,
        \Iterator $object
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_throws_exception_during_scoring_of_array_accessible_object_if_key_is_not_ExactValueToken(
        TokenInterface $key,
        TokenInterface $value,
        \ArrayAccess $object
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_scores_array_accessible_object_half_of_combined_scores_from_key_and_value_tokens(
        ExactValueToken $key,
        TokenInterface $value,
        \ArrayAccess $object
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_accepts_any_key_token_type_to_score_object_that_is_both_traversable_and_array_accessible(
        TokenInterface $key,
        TokenInterface $value,
        \ArrayIterator $object
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_score_if_argument_is_neither_array_nor_traversable_nor_array_accessible()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_score_empty_array()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_score_array_if_key_and_value_tokens_do_not_score_same_entry($key, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_score_traversable_object_without_entries(\Iterator $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_score_traversable_object_if_key_and_value_tokens_do_not_score_same_entry(
        TokenInterface $key,
        TokenInterface $value,
        \Iterator $object
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_score_array_accessible_object_if_it_has_no_offset_with_key_token_value(
        ExactValueToken $key,
        \ArrayAccess $object
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_score_array_accessible_object_if_key_and_value_tokens_do_not_score_same_entry(
        ExactValueToken $key,
        TokenInterface $value,
        \ArrayAccess $object
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_score_is_capped_at_8($key, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
