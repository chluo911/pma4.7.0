<?php

namespace Guzzle\Inflection;

/**
 * Default inflection implementation
 */
class Inflector implements InflectorInterface
{
    /** @var InflectorInterface */
    protected static $default;

    /**
     * Get the default inflector object that has support for caching
     *
     * @return MemoizingInflector
     */
    public static function getDefault()
    {
        // @codeCoverageIgnoreStart
        if (!self::$default) {
            self::$default = new MemoizingInflector(new self());
        }
        // @codeCoverageIgnoreEnd

        return self::$default;
    }

    public function snake($word)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function camel($word)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
