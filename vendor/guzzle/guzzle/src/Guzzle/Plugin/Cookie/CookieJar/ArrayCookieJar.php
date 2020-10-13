<?php

namespace Guzzle\Plugin\Cookie\CookieJar;

use Guzzle\Plugin\Cookie\Cookie;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;
use Guzzle\Parser\ParserRegistry;
use Guzzle\Plugin\Cookie\Exception\InvalidCookieException;

/**
 * Cookie cookieJar that stores cookies an an array
 */
class ArrayCookieJar implements CookieJarInterface, \Serializable
{
    /** @var array Loaded cookie data */
    protected $cookies = array();

    /** @var bool Whether or not strict mode is enabled. When enabled, exceptions will be thrown for invalid cookies */
    protected $strictMode;

    /**
     * @param bool $strictMode Set to true to throw exceptions when invalid cookies are added to the cookie jar
     */
    public function __construct($strictMode = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enable or disable strict mode on the cookie jar
     *
     * @param bool $strictMode Set to true to throw exceptions when invalid cookies are added. False to ignore them.
     *
     * @return self
     */
    public function setStrictMode($strictMode)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function remove($domain = null, $path = null, $name = null)
    {
        $cookies = $this->all($domain, $path, $name, false, false);
        $this->cookies = array_filter($this->cookies, function (Cookie $cookie) use ($cookies) {
            return !in_array($cookie, $cookies, true);
        });

        return $this;
    }

    public function removeTemporary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function removeExpired()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function all($domain = null, $path = null, $name = null, $skipDiscardable = false, $skipExpired = true)
    {
        return array_values(array_filter($this->cookies, function (Cookie $cookie) use (
            $domain,
            $path,
            $name,
            $skipDiscardable,
            $skipExpired
        ) {
            return false === (($name && $cookie->getName() != $name) ||
                ($skipExpired && $cookie->isExpired()) ||
                ($skipDiscardable && ($cookie->getDiscard() || !$cookie->getExpires())) ||
                ($path && !$cookie->matchesPath($path)) ||
                ($domain && !$cookie->matchesDomain($domain)));
        }));
    }

    public function add(Cookie $cookie)
    {
        // Only allow cookies with set and valid domain, name, value
        $result = $cookie->validate();
        if ($result !== true) {
            if ($this->strictMode) {
                throw new InvalidCookieException($result);
            } else {
                $this->removeCookieIfEmpty($cookie);
                return false;
            }
        }

        // Resolve conflicts with previously set cookies
        foreach ($this->cookies as $i => $c) {

            // Two cookies are identical, when their path, domain, port and name are identical
            if ($c->getPath() != $cookie->getPath() ||
                $c->getDomain() != $cookie->getDomain() ||
                $c->getPorts() != $cookie->getPorts() ||
                $c->getName() != $cookie->getName()
            ) {
                continue;
            }

            // The previously set cookie is a discard cookie and this one is not so allow the new cookie to be set
            if (!$cookie->getDiscard() && $c->getDiscard()) {
                unset($this->cookies[$i]);
                continue;
            }

            // If the new cookie's expiration is further into the future, then replace the old cookie
            if ($cookie->getExpires() > $c->getExpires()) {
                unset($this->cookies[$i]);
                continue;
            }

            // If the value has changed, we better change it
            if ($cookie->getValue() !== $c->getValue()) {
                unset($this->cookies[$i]);
                continue;
            }

            // The cookie exists, so no need to continue
            return false;
        }

        $this->cookies[] = $cookie;

        return true;
    }

    /**
     * Serializes the cookie cookieJar
     *
     * @return string
     */
    public function serialize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Unserializes the cookie cookieJar
     */
    public function unserialize($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the total number of stored cookies
     *
     * @return int
     */
    public function count()
    {
        return count($this->cookies);
    }

    /**
     * Returns an iterator
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function addCookiesFromResponse(Response $response, RequestInterface $request = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getMatchingCookies(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If a cookie already exists and the server asks to set it again with a null value, the
     * cookie must be deleted.
     *
     * @param \Guzzle\Plugin\Cookie\Cookie $cookie
     */
    private function removeCookieIfEmpty(Cookie $cookie)
    {
        $cookieValue = $cookie->getValue();
        if ($cookieValue === null || $cookieValue === '') {
            $this->remove($cookie->getDomain(), $cookie->getPath(), $cookie->getName());
        }
    }
}
