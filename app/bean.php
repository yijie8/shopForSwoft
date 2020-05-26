<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

use Swoft\Db\Database;
use Swoft\Db\Pool;
use Swoft\Http\Server\HttpServer;
use Swoft\Http\Server\Swoole\RequestListener;
use Swoft\Redis\RedisDb;
use Swoft\Rpc\Client\Client as ServiceClient;
use Swoft\Rpc\Client\Pool as ServicePool;
use Swoft\Rpc\Server\ServiceServer;
use Swoft\Server\SwooleEvent;
use Swoft\Task\Swoole\FinishListener;
use Swoft\Task\Swoole\TaskListener;
use Swoft\WebSocket\Server\WebSocketServer;

return [
  'httpServer' => [
    'class' => HttpServer::class,
    'port' => 18306,
    'process' => [
    ],
    'on' => [
      SwooleEvent::TASK => bean(TaskListener::class),  // Enable task must task and finish event
      SwooleEvent::FINISH => bean(FinishListener::class)
    ],
    /* @see HttpServer::$setting */
    'setting' => [
//      'task_worker_num' => 12,
      'task_worker_num' => 1,
      'task_enable_coroutine' => true,
//      'worker_num' => 6
      'worker_num' => 1
    ]
  ],

];
