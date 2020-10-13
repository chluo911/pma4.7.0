<?php

namespace Guzzle\Tests\Service\Mock;

use Guzzle\Common\Collection;
use Guzzle\Service\Client;

/**
 * Mock Guzzle Service
 */
class MockClient extends Client
{
    /**
     * Factory method to create a new mock client
     *
     * @param array|Collection $config Configuration data. Array keys:
     *    base_url - Base URL of web service
     *    api_version - API version
     *    scheme - URI scheme: http or https
     *  * username - API username
     *  * password - API password
     *  * subdomain - Unfuddle account subdomain
     *
     * @return MockClient
     */
    public static function factory($config = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
