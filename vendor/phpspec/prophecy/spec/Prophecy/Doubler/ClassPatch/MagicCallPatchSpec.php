<?php

namespace spec\Prophecy\Doubler\ClassPatch;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Doubler\Generator\Node\ClassNode;
use Prophecy\Doubler\Generator\Node\MethodNode;

class MagicCallPatchSpec extends ObjectBehavior
{
    public function it_is_a_patch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_supports_anything(ClassNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_discovers_api_using_phpdoc(ClassNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_ignores_existing_methods(ClassNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_ignores_empty_methods_from_phpdoc(ClassNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_discovers_api_using_phpdoc_from_implemented_interfaces(ClassNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_discovers_api_using_phpdoc_from_own_interfaces(ClassNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_discovers_api_using_phpdoc_from_extended_parent_interfaces(ClassNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_has_50_priority()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * @method void undefinedMethod()
 */
class MagicalApi
{
    /**
     * @return void
     */
    public function definedMethod()
    {
    }
}

/**
 * @method void invalidMethodDefinition
 * @method void
 * @method
 */
class MagicalApiInvalidMethodDefinition
{
}

/**
 * @method void undefinedMethod()
 * @method void definedMethod()
 */
class MagicalApiExtended extends MagicalApi
{
}

/**
 */
class MagicalApiImplemented implements MagicalApiInterface
{
}

/**
 */
class MagicalApiImplementedExtended extends MagicalApiImplemented
{
}

/**
 * @method void implementedMethod()
 */
interface MagicalApiInterface
{
}
