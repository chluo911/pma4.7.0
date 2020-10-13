<?php

namespace Guzzle\Http\Message;

use Guzzle\Common\Version;
use Guzzle\Common\Collection;
use Guzzle\Http\Message\Header\HeaderCollection;
use Guzzle\Http\Message\Header\HeaderFactory;
use Guzzle\Http\Message\Header\HeaderFactoryInterface;
use Guzzle\Http\Message\Header\HeaderInterface;

/**
 * Abstract HTTP request/response message
 */
abstract class AbstractMessage implements MessageInterface
{
    /** @var array HTTP header collection */
    protected $headers;

    /** @var HeaderFactoryInterface $headerFactory */
    protected $headerFactory;

    /** @var Collection Custom message parameters that are extendable by plugins */
    protected $params;

    /** @var string Message protocol */
    protected $protocol = 'HTTP';

    /** @var string HTTP protocol version of the message */
    protected $protocolVersion = '1.1';

    public function __construct()
    {
        $this->params = new Collection();
        $this->headerFactory = new HeaderFactory();
        $this->headers = new HeaderCollection();
    }

    /**
     * Set the header factory to use to create headers
     *
     * @param HeaderFactoryInterface $factory
     *
     * @return self
     */
    public function setHeaderFactory(HeaderFactoryInterface $factory)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getParams()
    {
        return $this->params;
    }

    public function addHeader($header, $value)
    {
        if (isset($this->headers[$header])) {
            $this->headers[$header]->add($value);
        } elseif ($value instanceof HeaderInterface) {
            $this->headers[$header] = $value;
        } else {
            $this->headers[$header] = $this->headerFactory->createHeader($header, $value);
        }

        return $this;
    }

    public function addHeaders(array $headers)
    {
        foreach ($headers as $key => $value) {
            $this->addHeader($key, $value);
        }

        return $this;
    }

    public function getHeader($header)
    {
        return $this->headers[$header];
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getHeaderLines()
    {
        $headers = array();
        foreach ($this->headers as $value) {
            $headers[] = $value->getName() . ': ' . $value;
        }

        return $headers;
    }

    public function setHeader($header, $value)
    {
        unset($this->headers[$header]);
        $this->addHeader($header, $value);

        return $this;
    }

    public function setHeaders(array $headers)
    {
        $this->headers->clear();
        foreach ($headers as $key => $value) {
            $this->addHeader($key, $value);
        }

        return $this;
    }

    public function hasHeader($header)
    {
        return isset($this->headers[$header]);
    }

    public function removeHeader($header)
    {
        unset($this->headers[$header]);

        return $this;
    }

    /**
     * @deprecated Use $message->getHeader()->parseParams()
     * @codeCoverageIgnore
     */
    public function getTokenizedHeader($header, $token = ';')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function setTokenizedHeader($header, $data, $token = ';')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getCacheControlDirective($directive)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function hasCacheControlDirective($directive)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function addCacheControlDirective($directive, $value = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function removeCacheControlDirective($directive)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
