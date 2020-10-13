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

use Psr\Cache\CacheItemInterface;
use Symfony\Component\Cache\Adapter\NullAdapter;
use Symfony\Component\Cache\Adapter\PhpArrayAdapter;

/**
 * @group time-sensitive
 */
class PhpArrayAdapterTest extends AdapterTestCase
{
    protected $skippedTests = array(
        'testBasicUsage' => 'PhpArrayAdapter is read-only.',
        'testClear' => 'PhpArrayAdapter is read-only.',
        'testClearWithDeferredItems' => 'PhpArrayAdapter is read-only.',
        'testDeleteItem' => 'PhpArrayAdapter is read-only.',
        'testSaveExpired' => 'PhpArrayAdapter is read-only.',
        'testSaveWithoutExpire' => 'PhpArrayAdapter is read-only.',
        'testDeferredSave' => 'PhpArrayAdapter is read-only.',
        'testDeferredSaveWithoutCommit' => 'PhpArrayAdapter is read-only.',
        'testDeleteItems' => 'PhpArrayAdapter is read-only.',
        'testDeleteDeferredItem' => 'PhpArrayAdapter is read-only.',
        'testCommit' => 'PhpArrayAdapter is read-only.',
        'testSaveDeferredWhenChangingValues' => 'PhpArrayAdapter is read-only.',
        'testSaveDeferredOverwrite' => 'PhpArrayAdapter is read-only.',
        'testIsHitDeferred' => 'PhpArrayAdapter is read-only.',

        'testExpiresAt' => 'PhpArrayAdapter does not support expiration.',
        'testExpiresAtWithNull' => 'PhpArrayAdapter does not support expiration.',
        'testExpiresAfterWithNull' => 'PhpArrayAdapter does not support expiration.',
        'testDeferredExpired' => 'PhpArrayAdapter does not support expiration.',
        'testExpiration' => 'PhpArrayAdapter does not support expiration.',

        'testGetItemInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testGetItemsInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testHasItemInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testDeleteItemInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',
        'testDeleteItemsInvalidKeys' => 'PhpArrayAdapter does not throw exceptions on invalid key.',

        'testDefaultLifeTime' => 'PhpArrayAdapter does not allow configuring a default lifetime.',
    );

    private static $file;

    public static function setupBeforeClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function createCachePool()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testStore()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testStoredFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class PhpArrayAdapterWrapper extends PhpArrayAdapter
{
    public function save(CacheItemInterface $item)
    {
        call_user_func(\Closure::bind(function () use ($item) {
            $this->values[$item->getKey()] = $item->get();
            $this->warmUp($this->values);
            $this->values = eval(substr(file_get_contents($this->file), 6));
        }, $this, PhpArrayAdapter::class));

        return true;
    }
}
