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
    'process' => [],
    'on' => [
      SwooleEvent::TASK => bean(TaskListener::class),  // Enable task must task and finish event
      SwooleEvent::FINISH => bean(FinishListener::class)
    ],
    /* @see HttpServer::$setting */
    'setting' => [
      // 配置静态文件处理
      'enable_static_handler'    => true,
      // swoole v4.4.0以下版本, 此处必须为绝对路径
      'document_root'            => dirname(__DIR__) . '/public',


      //      'task_worker_num' => 12,
      'task_worker_num' => 1,
      'task_enable_coroutine' => true,
      //      'worker_num' => 6
      'worker_num' => 1
    ]
  ],

  ///home/yijie/go/other/src/github.com/george518/PPGo_ApiAdmin/db_tools/dev/_db
  'db' => [
    'class'    => Swoft\Db\Database::class,
    // 'dsn'      => 'mysql:dbname=crmeb;host=60.205.226.149:3306',
    // 'username' => 'crmeb',
    // 'password' => 'M0LtyK8v578irGxJ',

    'dsn'      => 'mysql:dbname=crmeb;host=127.0.0.1:4444',
    'username' => 'root',
    'password' => '123456',

    'charset'  => 'utf8mb4',
    'prefix'   => 'eb_',
    'options'  => [
      PDO::ATTR_CASE => PDO::CASE_NATURAL
    ],
    'config'   => [
      'collation' => 'utf8mb4_unicode_ci',
      'strict'    => true,
      'timezone'  => '+8:00',
      'modes'     => 'NO_ENGINE_SUBSTITUTION,STRICT_TRANS_TABLES',
      'fetchMode' => PDO::FETCH_ASSOC
    ]
  ],
  'view' => [
    // class 配置是可以省略的, 因为 view 组件里已经配置了它
    // 'class' => \Swoft\View\Renderer::class,
    'viewsPath' => dirname(__DIR__) . '/app/views/',
  ],

  'serverDispatcher' => [
    'middlewares' => [
      \Swoft\View\Middleware\ViewMiddleware::class,
      \Swoft\Session\Middleware\SessionMiddleware::class,
      //\Swoft\Devtool\Middleware\DevToolMiddleware::class,
    ]
  ],
  'sessionManager' => [
    'class' => \Swoft\Session\SessionManager::class,
    'config' => [
        'driver' => 'redis',
        'name' => 'SWOFT_SESSION_ID',
        'lifetime' => 1800,
        'expire_on_close' => false,
        'encrypt' => false,
        'storage' => '@runtime/sessions',
    ],
  ],

];
