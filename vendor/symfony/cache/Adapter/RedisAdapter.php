<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\Adapter;

use Predis\Connection\Factory;
use Predis\Connection\Aggregate\PredisCluster;
use Predis\Connection\Aggregate\RedisCluster;
use Predis\Response\Status;
use Symfony\Component\Cache\Exception\InvalidArgumentException;

/**
 * @author Aurimas Niekis <aurimas@niekis.lt>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RedisAdapter extends AbstractAdapter
{
    private static $defaultConnectionOptions = array(
        'class' => null,
        'persistent' => 0,
        'persistent_id' => null,
        'timeout' => 30,
        'read_timeout' => 0,
        'retry_interval' => 0,
    );
    private $redis;

    /**
     * @param \Redis|\RedisArray|\RedisCluster|\Predis\Client $redisClient
     */
    public function __construct($redisClient, $namespace = '', $defaultLifetime = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates a Redis connection using a DSN configuration.
     *
     * Example DSN:
     *   - redis://localhost
     *   - redis://example.com:1234
     *   - redis://secret@example.com/13
     *   - redis:///var/run/redis.sock
     *   - redis://secret@/var/run/redis.sock/13
     *
     * @param string $dsn
     * @param array  $options See self::$defaultConnectionOptions
     *
     * @throws InvalidArgumentException When the DSN is invalid.
     *
     * @return \Redis|\Predis\Client According to the "class" option
     */
    public static function createConnection($dsn, array $options = array())
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
    protected function doFetch(array $ids)
    {
        if ($ids) {
            $values = $this->pipeline(function () use ($ids) {
                foreach ($ids as $id) {
                    yield 'get' => array($id);
                }
            });
            foreach ($values as $id => $v) {
                if ($v) {
                    yield $id => parent::unserialize($v);
                }
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave($id)
    {
        return (bool) $this->redis->exists($id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear($namespace)
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
    protected function doDelete(array $ids)
    {
        if ($ids) {
            $this->redis->del($ids);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array $values, $lifetime)
    {
        $serialized = array();
        $failed = array();

        foreach ($values as $id => $value) {
            try {
                $serialized[$id] = serialize($value);
            } catch (\Exception $e) {
                $failed[] = $id;
            }
        }

        if (!$serialized) {
            return $failed;
        }

        $results = $this->pipeline(function () use ($serialized, $lifetime) {
            foreach ($serialized as $id => $value) {
                if (0 >= $lifetime) {
                    yield 'set' => array($id, $value);
                } else {
                    yield 'setEx' => array($id, $lifetime, $value);
                }
            }
        });
        foreach ($results as $id => $result) {
            if (true !== $result && (!$result instanceof Status || $result !== Status::get('OK'))) {
                $failed[] = $id;
            }
        }

        return $failed;
    }

    private function pipeline(\Closure $generator)
    {
        $ids = array();

        if ($this->redis instanceof \Predis\Client) {
            $results = $this->redis->pipeline(function ($redis) use ($generator, &$ids) {
                foreach ($generator() as $command => $args) {
                    call_user_func_array(array($redis, $command), $args);
                    $ids[] = $args[0];
                }
            });
        } elseif ($this->redis instanceof \RedisArray) {
            $connections = $results = $ids = array();
            foreach ($generator() as $command => $args) {
                if (!isset($connections[$h = $this->redis->_target($args[0])])) {
                    $connections[$h] = array($this->redis->_instance($h), -1);
                    $connections[$h][0]->multi(\Redis::PIPELINE);
                }
                call_user_func_array(array($connections[$h][0], $command), $args);
                $results[] = array($h, ++$connections[$h][1]);
                $ids[] = $args[0];
            }
            foreach ($connections as $h => $c) {
                $connections[$h] = $c[0]->exec();
            }
            foreach ($results as $k => list($h, $c)) {
                $results[$k] = $connections[$h][$c];
            }
        } else {
            $this->redis->multi(\Redis::PIPELINE);
            foreach ($generator() as $command => $args) {
                call_user_func_array(array($this->redis, $command), $args);
                $ids[] = $args[0];
            }
            $results = $this->redis->exec();
        }

        foreach ($ids as $k => $id) {
            yield $id => $results[$k];
        }
    }
}
