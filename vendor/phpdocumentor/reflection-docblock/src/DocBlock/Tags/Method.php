<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use phpDocumentor\Reflection\Types\Void_;
use Webmozart\Assert\Assert;

/**
 * Reflection class for an {@}method in a Docblock.
 */
final class Method extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'method';

    /** @var string */
    private $methodName = '';

    /** @var string[] */
    private $arguments = [];

    /** @var bool */
    private $isStatic = false;

    /** @var Type */
    private $returnType;

    public function __construct(
        $methodName,
        array $arguments = [],
        Type $returnType = null,
        $static = false,
        Description $description = null
    ) {
        Assert::stringNotEmpty($methodName);
        Assert::boolean($static);

        if ($returnType === null) {
            $returnType = new Void_();
        }

        $this->methodName  = $methodName;
        $this->arguments   = $this->filterArguments($arguments);
        $this->returnType  = $returnType;
        $this->isStatic    = $static;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Retrieves the method name.
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * @return string[]
     */
    public function getArguments()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks whether the method tag describes a static method or not.
     *
     * @return bool TRUE if the method declaration is for a static method, FALSE otherwise.
     */
    public function isStatic()
    {
        return $this->isStatic;
    }

    /**
     * @return Type
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    public function __toString()
    {
        $arguments = [];
        foreach ($this->arguments as $argument) {
            $arguments[] = $argument['type'] . ' $' . $argument['name'];
        }

        return ($this->isStatic() ? 'static ' : '')
            . (string)$this->returnType . ' '
            . $this->methodName
            . '(' . implode(', ', $arguments) . ')'
            . ($this->description ? ' ' . $this->description->render() : '');
    }

    private function filterArguments($arguments)
    {
        foreach ($arguments as &$argument) {
            if (is_string($argument)) {
                $argument = [ 'name' => $argument ];
            }
            if (! isset($argument['type'])) {
                $argument['type'] = new Void_();
            }
            $keys = array_keys($argument);
            if ($keys !== [ 'name', 'type' ]) {
                throw new \InvalidArgumentException(
                    'Arguments can only have the "name" and "type" fields, found: ' . var_export($keys, true)
                );
            }
        }

        return $arguments;
    }

    private static function stripRestArg($argument)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
