<?php

namespace Guzzle\Http;

use Guzzle\Stream\Stream;

/**
 * Abstract decorator used to wrap entity bodies
 */
class AbstractEntityBodyDecorator implements EntityBodyInterface
{
    /** @var EntityBodyInterface Decorated entity body */
    protected $body;

    /**
     * @param EntityBodyInterface $body Entity body to decorate
     */
    public function __construct(EntityBodyInterface $body)
    {
        $this->body = $body;
    }

    public function __toString()
    {
        return (string) $this->body;
    }

    /**
     * Allow decorators to implement custom methods
     *
     * @param string $method Missing method name
     * @param array  $args   Method arguments
     *
     * @return mixed
     */
    public function __call($method, array $args)
    {
        return call_user_func_array(array($this->body, $method), $args);
    }

    public function close()
    {
        return $this->body->close();
    }

    public function setRewindFunction($callable)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function rewind()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function compress($filter = 'zlib.deflate')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function uncompress($filter = 'zlib.inflate')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getContentLength()
    {
        return $this->getSize();
    }

    public function getContentType()
    {
        return $this->body->getContentType();
    }

    public function getContentMd5($rawOutput = false, $base64Encode = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getContentEncoding()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getMetaData($key = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getStream()
    {
        return $this->body->getStream();
    }

    public function setStream($stream, $size = 0)
    {
        $this->body->setStream($stream, $size);

        return $this;
    }

    public function detachStream()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getWrapper()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getWrapperData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getStreamType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getUri()
    {
        return $this->body->getUri();
    }

    public function getSize()
    {
        return $this->body->getSize();
    }

    public function isReadable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isRepeatable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isWritable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isConsumed()
    {
        return $this->body->isConsumed();
    }

    /**
     * Alias of isConsumed()
     * {@inheritdoc}
     */
    public function feof()
    {
        return $this->isConsumed();
    }

    public function isLocal()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isSeekable()
    {
        return $this->body->isSeekable();
    }

    public function setSize($size)
    {
        $this->body->setSize($size);

        return $this;
    }

    public function seek($offset, $whence = SEEK_SET)
    {
        return $this->body->seek($offset, $whence);
    }

    public function read($length)
    {
        return $this->body->read($length);
    }

    public function write($string)
    {
        return $this->body->write($string);
    }

    public function readLine($maxLength = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function ftell()
    {
        return $this->body->ftell();
    }

    public function getCustomData($key)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setCustomData($key, $value)
    {
        $this->body->setCustomData($key, $value);

        return $this;
    }
}
