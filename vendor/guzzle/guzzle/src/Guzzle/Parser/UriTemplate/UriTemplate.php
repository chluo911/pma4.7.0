<?php

namespace Guzzle\Parser\UriTemplate;

/**
 * Expands URI templates using an array of variables
 *
 * @link http://tools.ietf.org/html/draft-gregorio-uritemplate-08
 */
class UriTemplate implements UriTemplateInterface
{
    const DEFAULT_PATTERN = '/\{([^\}]+)\}/';

    /** @var string URI template */
    private $template;

    /** @var array Variables to use in the template expansion */
    private $variables;

    /** @var string Regex used to parse expressions */
    private $regex = self::DEFAULT_PATTERN;

    /** @var array Hash for quick operator lookups */
    private static $operatorHash = array(
        '+' => true, '#' => true, '.' => true, '/' => true, ';' => true, '?' => true, '&' => true
    );

    /** @var array Delimiters */
    private static $delims = array(
        ':', '/', '?', '#', '[', ']', '@', '!', '$', '&', '\'', '(', ')', '*', '+', ',', ';', '='
    );

    /** @var array Percent encoded delimiters */
    private static $delimsPct = array(
        '%3A', '%2F', '%3F', '%23', '%5B', '%5D', '%40', '%21', '%24', '%26', '%27', '%28', '%29', '%2A', '%2B', '%2C',
        '%3B', '%3D'
    );

    public function expand($template, array $variables)
    {
        if ($this->regex == self::DEFAULT_PATTERN && false === strpos($template, '{')) {
            return $template;
        }

        $this->template = $template;
        $this->variables = $variables;

        return preg_replace_callback($this->regex, array($this, 'expandMatch'), $this->template);
    }

    /**
     * Set the regex patten used to expand URI templates
     *
     * @param string $regexPattern
     */
    public function setRegex($regexPattern)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Parse an expression into parts
     *
     * @param string $expression Expression to parse
     *
     * @return array Returns an associative array of parts
     */
    private function parseExpression($expression)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Process an expansion
     *
     * @param array $matches Matches met in the preg_replace_callback
     *
     * @return string Returns the replacement string
     */
    private function expandMatch(array $matches)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Determines if an array is associative
     *
     * @param array $array Array to check
     *
     * @return bool
     */
    private function isAssoc(array $array)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Removes percent encoding on reserved characters (used with + and # modifiers)
     *
     * @param string $string String to fix
     *
     * @return string
     */
    private function decodeReserved($string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
