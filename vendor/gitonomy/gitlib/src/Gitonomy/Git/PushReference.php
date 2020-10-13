<?php

/**
 * This file is part of Gitonomy.
 *
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 * (c) Julien DIDIER <genzo.wm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Gitonomy\Git;

use Gitonomy\Git\Exception\LogicException;

/**
 * Push reference contains a commit interval. This object aggregates methods
 * for this interval.
 *
 * @author Julien DIDIER <genzo.wm@gmail.com>
 */
class PushReference
{
    const ZERO = '0000000000000000000000000000000000000000';

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var string
     */
    protected $before;

    /**
     * @var string
     */
    protected $after;

    /**
     * @var bool
     */
    protected $isForce;

    public function __construct(Repository $repository, $reference, $before, $after)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return Repository
     */
    public function getRepository()
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
    public function getReference()
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
    public function getBefore()
    {
        return $this->before;
    }

    /**
     * @return string
     */
    public function getAfter()
    {
        return $this->after;
    }

    /**
     * @return array
     */
    public function getLog($excludes = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getRevision()
    {
        if ($this->isDelete()) {
            throw new LogicException('No revision for deletion');
        }

        if ($this->isCreate()) {
            return $this->getAfter();
        }

        return $this->getBefore().'..'.$this->getAfter();
    }

    /**
     * @return bool
     */
    public function isCreate()
    {
        return $this->isZero($this->before);
    }

    /**
     * @return bool
     */
    public function isDelete()
    {
        return $this->isZero($this->after);
    }

    /**
     * @return bool
     */
    public function isForce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    public function isFastForward()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return bool
     */
    protected function isZero($reference)
    {
        return self::ZERO === $reference;
    }

    /**
     * @return bool
     */
    protected function getForce()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
