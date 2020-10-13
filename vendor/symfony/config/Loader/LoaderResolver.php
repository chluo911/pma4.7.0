<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Loader;

/**
 * LoaderResolver selects a loader for a given resource.
 *
 * A resource can be anything (e.g. a full path to a config file or a Closure).
 * Each loader determines whether it can load a resource and how.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LoaderResolver implements LoaderResolverInterface
{
    /**
     * @var LoaderInterface[] An array of LoaderInterface objects
     */
    private $loaders = array();

    /**
     * Constructor.
     *
     * @param LoaderInterface[] $loaders An array of loaders
     */
    public function __construct(array $loaders = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
     */
    public function resolve($resource, $type = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds a loader.
     *
     * @param LoaderInterface $loader A LoaderInterface instance
     */
    public function addLoader(LoaderInterface $loader)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the registered loaders.
     *
     * @return LoaderInterface[] An array of LoaderInterface instances
     */
    public function getLoaders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
