<?php

namespace Guzzle\Http\Message;

use Guzzle\Common\Version;
use Guzzle\Common\ToArrayInterface;
use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Http\EntityBodyInterface;
use Guzzle\Http\EntityBody;
use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Http\RedirectPlugin;
use Guzzle\Parser\ParserRegistry;

/**
 * Guzzle HTTP response object
 */
class Response extends AbstractMessage implements \Serializable
{
    /**
     * @var array Array of reason phrases and their corresponding status codes
     */
    private static $statusTexts = array(
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        208 => 'Already Reported',
        226 => 'IM Used',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        307 => 'Temporary Redirect',
        308 => 'Permanent Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        425 => 'Reserved for WebDAV advanced collections expired proposal',
        426 => 'Upgrade required',
        428 => 'Precondition Required',
        429 => 'Too Many Requests',
        431 => 'Request Header Fields Too Large',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates (Experimental)',
        507 => 'Insufficient Storage',
        508 => 'Loop Detected',
        510 => 'Not Extended',
        511 => 'Network Authentication Required',
    );

    /** @var EntityBodyInterface The response body */
    protected $body;

    /** @var string The reason phrase of the response (human readable code) */
    protected $reasonPhrase;

    /** @var string The status code of the response */
    protected $statusCode;

    /** @var array Information about the request */
    protected $info = array();

    /** @var string The effective URL that returned this response */
    protected $effectiveUrl;

    /** @var array Cacheable response codes (see RFC 2616:13.4) */
    protected static $cacheResponseCodes = array(200, 203, 206, 300, 301, 410);

    /**
     * Create a new Response based on a raw response message
     *
     * @param string $message Response message
     *
     * @return self|bool Returns false on error
     */
    public static function fromMessage($message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Construct the response
     *
     * @param string                              $statusCode The response status code (e.g. 200, 404, etc)
     * @param ToArrayInterface|array              $headers    The response headers
     * @param string|resource|EntityBodyInterface $body       The body of the response
     *
     * @throws BadResponseException if an invalid response code is given
     */
    public function __construct($statusCode, $headers = null, $body = null)
    {
        parent::__construct();
        $this->setStatus($statusCode);
        $this->body = EntityBody::factory($body !== null ? $body : '');

        if ($headers) {
            if (is_array($headers)) {
                $this->setHeaders($headers);
            } elseif ($headers instanceof ToArrayInterface) {
                $this->setHeaders($headers->toArray());
            } else {
                throw new BadResponseException('Invalid headers argument received');
            }
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getMessage();
    }

    public function serialize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function unserialize($serialize)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the response entity body
     *
     * @param bool $asString Set to TRUE to return a string of the body rather than a full body object
     *
     * @return EntityBodyInterface|string
     */
    public function getBody($asString = false)
    {
        return $asString ? (string) $this->body : $this->body;
    }

    /**
     * Set the response entity body
     *
     * @param EntityBodyInterface|string $body Body to set
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->body = EntityBody::factory($body);

        return $this;
    }

    /**
     * Set the protocol and protocol version of the response
     *
     * @param string $protocol Response protocol
     * @param string $version  Protocol version
     *
     * @return self
     */
    public function setProtocol($protocol, $version)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the protocol used for the response (e.g. HTTP)
     *
     * @return string
     */
    public function getProtocol()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the HTTP protocol version
     *
     * @return string
     */
    public function getProtocolVersion()
    {
        return $this->protocolVersion;
    }

    /**
     * Get a cURL transfer information
     *
     * @param string $key A single statistic to check
     *
     * @return array|string|null Returns all stats if no key is set, a single stat if a key is set, or null if a key
     *                           is set and not found
     * @link http://www.php.net/manual/en/function.curl-getinfo.php
     */
    public function getInfo($key = null)
    {
        if ($key === null) {
            return $this->info;
        } elseif (array_key_exists($key, $this->info)) {
            return $this->info[$key];
        } else {
            return null;
        }
    }

    /**
     * Set the transfer information
     *
     * @param array $info Array of cURL transfer stats
     *
     * @return self
     */
    public function setInfo(array $info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Set the response status
     *
     * @param int    $statusCode   Response status code to set
     * @param string $reasonPhrase Response reason phrase
     *
     * @return self
     * @throws BadResponseException when an invalid response code is received
     */
    public function setStatus($statusCode, $reasonPhrase = '')
    {
        $this->statusCode = (int) $statusCode;

        if (!$reasonPhrase && isset(self::$statusTexts[$this->statusCode])) {
            $this->reasonPhrase = self::$statusTexts[$this->statusCode];
        } else {
            $this->reasonPhrase = $reasonPhrase;
        }

        return $this;
    }

    /**
     * Get the response status code
     *
     * @return integer
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Get the entire response as a string
     *
     * @return string
     */
    public function getMessage()
    {
        $message = $this->getRawHeaders();

        // Only include the body in the message if the size is < 2MB
        $size = $this->body->getSize();
        if ($size < 2097152) {
            $message .= (string) $this->body;
        }

        return $message;
    }

    /**
     * Get the the raw message headers as a string
     *
     * @return string
     */
    public function getRawHeaders()
    {
        $headers = 'HTTP/1.1 ' . $this->statusCode . ' ' . $this->reasonPhrase . "\r\n";
        $lines = $this->getHeaderLines();
        if (!empty($lines)) {
            $headers .= implode("\r\n", $lines) . "\r\n";
        }

        return $headers . "\r\n";
    }

    /**
     * Get the response reason phrase- a human readable version of the numeric
     * status code
     *
     * @return string
     */
    public function getReasonPhrase()
    {
        return $this->reasonPhrase;
    }

    /**
     * Get the Accept-Ranges HTTP header
     *
     * @return string Returns what partial content range types this server supports.
     */
    public function getAcceptRanges()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Calculate the age of the response
     *
     * @return integer
     */
    public function calculateAge()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Age HTTP header
     *
     * @return integer|null Returns the age the object has been in a proxy cache in seconds.
     */
    public function getAge()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Allow HTTP header
     *
     * @return string|null Returns valid actions for a specified resource. To be used for a 405 Method not allowed.
     */
    public function getAllow()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if an HTTP method is allowed by checking the Allow response header
     *
     * @param string $method Method to check
     *
     * @return bool
     */
    public function isMethodAllowed($method)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Cache-Control HTTP header
     *
     * @return string
     */
    public function getCacheControl()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Connection HTTP header
     *
     * @return string
     */
    public function getConnection()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Content-Encoding HTTP header
     *
     * @return string|null
     */
    public function getContentEncoding()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Content-Language HTTP header
     *
     * @return string|null Returns the language the content is in.
     */
    public function getContentLanguage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Content-Length HTTP header
     *
     * @return integer Returns the length of the response body in bytes
     */
    public function getContentLength()
    {
        return (int) (string) $this->getHeader('Content-Length');
    }

    /**
     * Get the Content-Location HTTP header
     *
     * @return string|null Returns an alternate location for the returned data (e.g /index.htm)
     */
    public function getContentLocation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Content-Disposition HTTP header
     *
     * @return string|null Returns the Content-Disposition header
     */
    public function getContentDisposition()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Content-MD5 HTTP header
     *
     * @return string|null Returns a Base64-encoded binary MD5 sum of the content of the response.
     */
    public function getContentMd5()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Content-Range HTTP header
     *
     * @return string Returns where in a full body message this partial message belongs (e.g. bytes 21010-47021/47022).
     */
    public function getContentRange()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Content-Type HTTP header
     *
     * @return string Returns the mime type of this content.
     */
    public function getContentType()
    {
        return (string) $this->getHeader('Content-Type');
    }

    /**
     * Checks if the Content-Type is of a certain type.  This is useful if the
     * Content-Type header contains charset information and you need to know if
     * the Content-Type matches a particular type.
     *
     * @param string $type Content type to check against
     *
     * @return bool
     */
    public function isContentType($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Date HTTP header
     *
     * @return string|null Returns the date and time that the message was sent.
     */
    public function getDate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the ETag HTTP header
     *
     * @return string|null Returns an identifier for a specific version of a resource, often a Message digest.
     */
    public function getEtag()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Expires HTTP header
     *
     * @return string|null Returns the date/time after which the response is considered stale.
     */
    public function getExpires()
    {
        return (string) $this->getHeader('Expires');
    }

    /**
     * Get the Last-Modified HTTP header
     *
     * @return string|null Returns the last modified date for the requested object, in RFC 2822 format
     *                     (e.g. Tue, 15 Nov 1994 12:45:26 GMT)
     */
    public function getLastModified()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Location HTTP header
     *
     * @return string|null Used in redirection, or when a new resource has been created.
     */
    public function getLocation()
    {
        return (string) $this->getHeader('Location');
    }

    /**
     * Get the Pragma HTTP header
     *
     * @return Header|null Returns the implementation-specific headers that may have various effects anywhere along
     *                     the request-response chain.
     */
    public function getPragma()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Proxy-Authenticate HTTP header
     *
     * @return string|null Authentication to access the proxy (e.g. Basic)
     */
    public function getProxyAuthenticate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Retry-After HTTP header
     *
     * @return int|null If an entity is temporarily unavailable, this instructs the client to try again after a
     *                  specified period of time.
     */
    public function getRetryAfter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Server HTTP header
     *
     * @return string|null A name for the server
     */
    public function getServer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Set-Cookie HTTP header
     *
     * @return string|null An HTTP cookie.
     */
    public function getSetCookie()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Trailer HTTP header
     *
     * @return string|null The Trailer general field value indicates that the given set of header fields is present in
     *                     the trailer of a message encoded with chunked transfer-coding.
     */
    public function getTrailer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Transfer-Encoding HTTP header
     *
     * @return string|null The form of encoding used to safely transfer the entity to the user
     */
    public function getTransferEncoding()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Vary HTTP header
     *
     * @return string|null Tells downstream proxies how to match future request headers to decide whether the cached
     *                     response can be used rather than requesting a fresh one from the origin server.
     */
    public function getVary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Via HTTP header
     *
     * @return string|null Informs the client of proxies through which the response was sent.
     */
    public function getVia()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Warning HTTP header
     *
     * @return string|null A general warning about possible problems with the entity body
     */
    public function getWarning()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the WWW-Authenticate HTTP header
     *
     * @return string|null Indicates the authentication scheme that should be used to access the requested entity
     */
    public function getWwwAuthenticate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if HTTP Status code is a Client Error (4xx)
     *
     * @return bool
     */
    public function isClientError()
    {
        return $this->statusCode >= 400 && $this->statusCode < 500;
    }

    /**
     * Checks if HTTP Status code is Server OR Client Error (4xx or 5xx)
     *
     * @return boolean
     */
    public function isError()
    {
        return $this->isClientError() || $this->isServerError();
    }

    /**
     * Checks if HTTP Status code is Information (1xx)
     *
     * @return bool
     */
    public function isInformational()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if HTTP Status code is a Redirect (3xx)
     *
     * @return bool
     */
    public function isRedirect()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if HTTP Status code is Server Error (5xx)
     *
     * @return bool
     */
    public function isServerError()
    {
        return $this->statusCode >= 500 && $this->statusCode < 600;
    }

    /**
     * Checks if HTTP Status code is Successful (2xx | 304)
     *
     * @return bool
     */
    public function isSuccessful()
    {
        return ($this->statusCode >= 200 && $this->statusCode < 300) || $this->statusCode == 304;
    }

    /**
     * Check if the response can be cached based on the response headers
     *
     * @return bool Returns TRUE if the response can be cached or false if not
     */
    public function canCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the number of seconds from the current time in which this response is still considered fresh
     *
     * @return int|null Returns the number of seconds
     */
    public function getMaxAge()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if the response is considered fresh.
     *
     * A response is considered fresh when its age is less than or equal to the freshness lifetime (maximum age) of the
     * response.
     *
     * @return bool|null
     */
    public function isFresh()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if the response can be validated against the origin server using a conditional GET request.
     *
     * @return bool
     */
    public function canValidate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the freshness of the response by returning the difference of the maximum lifetime of the response and the
     * age of the response (max-age - age).
     *
     * Freshness values less than 0 mean that the response is no longer fresh and is ABS(freshness) seconds expired.
     * Freshness values of greater than zero is the number of seconds until the response is no longer fresh. A NULL
     * result means that no freshness information is available.
     *
     * @return int
     */
    public function getFreshness()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse the JSON response body and return an array
     *
     * @return array|string|int|bool|float
     * @throws RuntimeException if the response body is not in JSON format
     */
    public function json()
    {
        $data = json_decode((string) $this->body, true);
        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new RuntimeException('Unable to parse response body into JSON: ' . json_last_error());
        }

        return $data === null ? array() : $data;
    }

    /**
     * Parse the XML response body and return a \SimpleXMLElement.
     *
     * In order to prevent XXE attacks, this method disables loading external
     * entities. If you rely on external entities, then you must parse the
     * XML response manually by accessing the response body directly.
     *
     * @return \SimpleXMLElement
     * @throws RuntimeException if the response body is not in XML format
     * @link http://websec.io/2012/08/27/Preventing-XXE-in-PHP.html
     */
    public function xml()
    {
        $errorMessage = null;
        $internalErrors = libxml_use_internal_errors(true);
        $disableEntities = libxml_disable_entity_loader(true);
        libxml_clear_errors();

        try {
            $xml = new \SimpleXMLElement((string) $this->body ?: '<root />', LIBXML_NONET);
            if ($error = libxml_get_last_error()) {
                $errorMessage = $error->message;
            }
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
        }

        libxml_clear_errors();
        libxml_use_internal_errors($internalErrors);
        libxml_disable_entity_loader($disableEntities);

        if ($errorMessage) {
            throw new RuntimeException('Unable to parse response body into XML: ' . $errorMessage);
        }

        return $xml;
    }

    /**
     * Get the redirect count of this response
     *
     * @return int
     */
    public function getRedirectCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the effective URL that resulted in this response (e.g. the last redirect URL)
     *
     * @param string $url The effective URL
     *
     * @return self
     */
    public function setEffectiveUrl($url)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the effective URL that resulted in this response (e.g. the last redirect URL)
     *
     * @return string
     */
    public function getEffectiveUrl()
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
    public function getPreviousResponse()
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
    public function setRequest($request)
    {
        Version::warn(__METHOD__ . ' is deprecated');
        return $this;
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getRequest()
    {
        Version::warn(__METHOD__ . ' is deprecated');
        return null;
    }
}
