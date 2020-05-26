<?php

declare(strict_types=1);

namespace App\Http\Controller;

use Swoft\Http\Message\Response;
use Swoft\Context\Context;
use Swoft\Http\Message\Request;
use Swoft\Http\Server\HttpContext;

/**
 * Class Base
 * @since 2.0
 */
class BaseController
{
  /**
   * @return HttpContext|Response
   */
  public function response()
  {
    $r = Context::get(true);
    return $r instanceof HttpContext ? $r->getResponse() : context()->getResponse();
  }

  /**
   * @return HttpContext|Request
   */
  public function request()
  {
    $r = Context::get(true);
    return $r instanceof HttpContext ? $r->getRequest() : context()->getRequest();
  }

  /**
   * 操作失败提示框
   * @param string $msg 提示信息
   * @param string $backUrl 跳转地址
   * @param string $title 标题
   * @param int $duration 持续时间
   * @return mixed
   */
  protected function failedNotice($msg = '操作失败', $backUrl = 0, $info = '', $duration = 3)
  {
    $type = 'error';
    $data = compact('msg', 'backUrl', 'info', 'duration', 'type');
    return view('public/notice', $data);
  }

  /**
   * 失败提示一直持续
   * @param $msg
   * @param int $backUrl
   * @param string $title
   * @return mixed
   */
  protected function failedNoticeLast($msg = '操作失败', $backUrl = 0, $info = '')
  {
    return $this->failedNotice($msg, $backUrl, $info, 0);
  }

  /**
   * 操作成功提示框
   * @param string $msg 提示信息
   * @param string $backUrl 跳转地址
   * @param string $title 标题
   * @param int $duration 持续时间
   * @return mixed
   */
  protected function successfulNotice($msg = '操作成功', $backUrl = 0, $info = '', $duration = 3)
  {
    $type = 'success';
    $data = compact('msg', 'backUrl', 'info', 'duration', 'type');
    return view('public/notice', $data);
  }

  /**
   * 成功提示一直持续
   * @param $msg
   * @param int $backUrl
   * @param string $title
   * @return mixed
   */
  protected function successfulNoticeLast($msg = '操作成功', $backUrl = 0, $info = '')
  {
    return $this->successfulNotice($msg, $backUrl, $info, 0);
  }

  /**
   * 错误提醒页面
   * @param string $msg
   * @param int $url
   */
  protected function failed($msg = '哎呀…亲…您访问的页面出现错误', $url = 0)
  {
    if (request()->isAjax()) {
      return [$msg, $url];
    } else {
      $data = compact('msg', 'url');
      return view('public/error');
    }
  }

  /**
   * 成功提醒页面
   * @param string $msg
   * @param int $url
   */
  protected function successful($msg, $url = 0)
  {
    if (request()->isAjax()) {
      return [$msg, $url];
    } else {
      $data = compact('msg', 'url');
      return view('public/success');
    }
  }
  /**异常抛出
   * @param $name
   */
  protected function exception($msg = '无法打开页面')
  {
    $data = compact('msg');
    return view('public/exception');
  }

  /**找不到页面
   * @param $name
   */
  public function _empty($name)
  {
    return view('public/404');
  }
}
