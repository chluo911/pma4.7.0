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
use Webmozart\Assert\Assert;

/**
 * Reflection class for the {@}param tag in a Docblock.
 */
final class Param extends BaseTag implements Factory\StaticMethod
{
    /** @var string */
    protected $name = 'param';

    /** @var Type */
    private $type;

    /** @var string */
    private $variableName = '';

    /** @var bool determines whether this is a variadic argument */
    private $isVariadic = false;

    /**
     * @param string $variableName
     * @param Type $type
     * @param bool $isVariadic
     * @param Description $description
     */
    public function __construct($variableName, Type $type = null, $isVariadic = false, Description $description = null)
    {
        Assert::string($variableName);
        Assert::boolean($isVariadic);

        $this->variableName = $variableName;
        $this->type = $type;
        $this->isVariadic = $isVariadic;
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
     * Returns the variable's name.
     *
     * @return string
     */
    public function getVariableName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the variable's type or null if unknown.
     *
     * @return Type|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns whether this tag is variadic.
     *
     * @return boolean
     */
    public function isVariadic()
    {
        return $this->isVariadic;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return ($this->type ? $this->type . ' ' : '')
        . ($this->isVariadic() ? '...' : '')
        . '$' . $this->variableName
        . ($this->description ? ' ' . $this->description : '');
    }
}
