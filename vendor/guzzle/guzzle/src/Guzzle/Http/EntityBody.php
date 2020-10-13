<?php

namespace Guzzle\Http;

use Guzzle\Common\Version;
use Guzzle\Stream\Stream;
use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Http\Mimetypes;

/**
 * Entity body used with an HTTP request or response
 */
class EntityBody extends Stream implements EntityBodyInterface
{
    /** @var bool Content-Encoding of the entity body if known */
    protected $contentEncoding = false;

    /** @var callable Method to invoke for rewinding a stream */
    protected $rewindFunction;

    /**
     * Create a new EntityBody based on the input type
     *
     * @param resource|string|EntityBody $resource Entity body data
     * @param int                        $size     Size of the data contained in the resource
     *
     * @return EntityBody
     * @throws InvalidArgumentException if the $resource arg is not a resource or string
     */
    public static function factory($resource = '', $size = null)
    {
        if ($resource instanceof EntityBodyInterface) {
            return $resource;
        }

        switch (gettype($resource)) {
            case 'string':
                return self::fromString($resource);
            case 'resource':
                return new static($resource, $size);
            case 'object':
                if (method_exists($resource, '__toString')) {
                    return self::fromString((string) $resource);
                }
                break;
            case 'array':
                return self::fromString(http_build_query($resource));
        }

        throw new InvalidArgumentException('Invalid resource type');
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

    /**
     * Create a new EntityBody from a string
     *
     * @param string $string String of data
     *
     * @return EntityBody
     */
    public static function fromString($string)
    {
        $stream = fopen('php://temp', 'r+');
        if ($string !== '') {
            fwrite($stream, $string);
            rewind($stream);
        }

        return new static($stream);
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
        return $this->getUri() ? Mimetypes::getInstance()->fromFilename($this->getUri()) : null;
    }

    public function getContentMd5($rawOutput = false, $base64Encode = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Calculate the MD5 hash of an entity body
     *
     * @param EntityBodyInterface $body         Entity body to calculate the hash for
     * @param bool                $rawOutput    Whether or not to use raw output
     * @param bool                $base64Encode Whether or not to base64 encode raw output (only if raw output is true)
     *
     * @return bool|string Returns an MD5 string on success or FALSE on failure
     * @deprecated This will be deprecated soon
     * @codeCoverageIgnore
     */
    public static function calculateMd5(EntityBodyInterface $body, $rawOutput = false, $base64Encode = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setStreamFilterContentEncoding($streamFilterContentEncoding)
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

    protected function handleCompression($filter, $offsetStart = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
