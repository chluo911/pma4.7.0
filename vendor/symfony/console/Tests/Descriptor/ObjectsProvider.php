<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Tests\Descriptor;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Tests\Fixtures\DescriptorApplication1;
use Symfony\Component\Console\Tests\Fixtures\DescriptorApplication2;
use Symfony\Component\Console\Tests\Fixtures\DescriptorCommand1;
use Symfony\Component\Console\Tests\Fixtures\DescriptorCommand2;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class ObjectsProvider
{
    public static function getInputArguments()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getInputOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getInputDefinitions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getCommands()
    {
        return array(
            'command_1' => new DescriptorCommand1(),
            'command_2' => new DescriptorCommand2(),
        );
    }

    public static function getApplications()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
