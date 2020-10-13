<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\Tests\Adapter;

use Doctrine\Common\Cache\ArrayCache;
use Symfony\Component\Cache\Adapter\DoctrineAdapter;

/**
 * @group time-sensitive
 */
class DoctrineAdapterTest extends AdapterTestCase
{
    protected $skippedTests = array(
        'testDeferredSaveWithoutCommit' => 'Assumes a shared cache which ArrayCache is not.',
        'testSaveWithoutExpire' => 'Assumes a shared cache which ArrayCache is not.',
        'testNotUnserializable' => 'ArrayCache does not use serialize/unserialize',
    );

    public function createCachePool($defaultLifetime = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
