<?php

namespace Guzzle\Service\Command\Factory;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Service\ClientInterface;

/**
 * Command factory used when you need to provide aliases to commands
 */
class AliasFactory implements FactoryInterface
{
    /** @var array Associative array mapping command aliases to the aliased command */
    protected $aliases;

    /** @var ClientInterface Client used to retry using aliases */
    protected $client;

    /**
     * @param ClientInterface $client  Client used to retry with the alias
     * @param array           $aliases Associative array mapping aliases to the alias
     */
    public function __construct(ClientInterface $client, array $aliases)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function factory($name, array $args = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
