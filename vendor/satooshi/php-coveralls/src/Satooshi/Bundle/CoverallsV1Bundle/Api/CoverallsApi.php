<?php

namespace Satooshi\Bundle\CoverallsV1Bundle\Api;

use Satooshi\Bundle\CoverallsV1Bundle\Config\Configuration;
use Guzzle\Http\Client;

/**
 * Coveralls API client.
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
abstract class CoverallsApi
{
    /**
     * Configuration.
     *
     * @var Satooshi\Bundle\CoverallsV1Bundle\Config\Configuration
     */
    protected $config;

    /**
     * HTTP client.
     *
     * @var \Guzzle\Http\Client
     */
    protected $client;

    /**
     * Constructor.
     *
     * @param Configuration       $config Configuration.
     * @param \Guzzle\Http\Client $client HTTP client.
     */
    public function __construct(Configuration $config, Client $client = null)
    {
        $this->config = $config;
        $this->client = $client;
    }

    // accessor

    /**
     * Return configuration.
     *
     * @return \Satooshi\Bundle\CoverallsV1Bundle\Config\Configuration
     */
    public function getConfiguration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set HTTP client.
     *
     * @param \Guzzle\Http\Client $client HTTP client.
     *
     * @return \Satooshi\Bundle\CoverallsV1Bundle\Api\CoverallsApi
     */
    public function setHttpClient(Client $client)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return HTTP client.
     *
     * @return \Guzzle\Http\Client
     */
    public function getHttpClient()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
