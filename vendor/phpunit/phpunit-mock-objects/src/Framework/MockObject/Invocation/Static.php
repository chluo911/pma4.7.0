<?php
/*
 * This file is part of the PHPUnit_MockObject package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use SebastianBergmann\Exporter\Exporter;

/**
 * Represents a static invocation.
 *
 * @since Class available since Release 1.0.0
 */
class PHPUnit_Framework_MockObject_Invocation_Static implements PHPUnit_Framework_MockObject_Invocation, PHPUnit_Framework_SelfDescribing
{
    /**
     * @var array
     */
    protected static $uncloneableExtensions = array(
      'mysqli'    => true,
      'SQLite'    => true,
      'sqlite3'   => true,
      'tidy'      => true,
      'xmlwriter' => true,
      'xsl'       => true
    );

    /**
     * @var array
     */
    protected static $uncloneableClasses = array(
      'Closure',
      'COMPersistHelper',
      'IteratorIterator',
      'RecursiveIteratorIterator',
      'SplFileObject',
      'PDORow',
      'ZipArchive'
    );

    /**
     * @var string
     */
    public $className;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var array
     */
    public $parameters;

    /**
     * @param string $className
     * @param string $methodname
     * @param array  $parameters
     * @param bool   $cloneObjects
     */
    public function __construct($className, $methodName, array $parameters, $cloneObjects = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return string
     */
    public function toString()
    {
        $exporter = new Exporter;

        return sprintf(
            '%s::%s(%s)',
            $this->className,
            $this->methodName,
            implode(
                ', ',
                array_map(
                    array($exporter, 'shortenedExport'),
                    $this->parameters
                )
            )
        );
    }

    /**
     * @param  object $original
     * @return object
     */
    protected function cloneObject($original)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
