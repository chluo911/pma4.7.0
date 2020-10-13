<?php

namespace Guzzle\Plugin\Cache;

use Guzzle\Http\Message\RequestInterface;

\Guzzle\Common\Version::warn('Guzzle\Plugin\Cache\DefaultCacheKeyProvider is no longer used');

/**
 * @deprecated This class is no longer used
 * @codeCoverageIgnore
 */
class DefaultCacheKeyProvider implements CacheKeyProviderInterface
{
    public function getCacheKey(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
