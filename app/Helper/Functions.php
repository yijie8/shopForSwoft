<?php

use Swlib\SaberGM;
use Swoft\Http\Message\Response;
use Swoft\Stdlib\Helper\ArrayHelper;
use Swoft\Context\Context;
use Swoft\Http\Message\Request;
use Swoft\Http\Server\HttpContext;

/**
 * 对象转数组
 * @param $object
 * @return array
 */
function object_array($object)
{
  return ArrayHelper::toArray($object);
}


/**
 * 抓取网络数据
 * @param string $url     网址
 * @param string $type    返回类型
 * @param int    $timeout 超时时间
 * @param bool   $max_co  连接池 设为数字为最大并发量
 * @return array|DOMDocument|\Psr\Http\Message\StreamInterface
 */
function getpage(string $url, string $type = "html", int $timeout = 3, $max_co = true)
{
  //https://github.com/swlib/saber
  $response = SaberGM::get($url, [
    'timeout' => $timeout,
    'referer' => $url,
    'use_pool' => $max_co,
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.25 Safari/537.36 Core/1.70.3732.400 QQBrowser/10.5.3819.400',
  ]);
  if ($type == "json") {
    return $response->getParsedJsonArray();
  }
  if ($type == "dom") {
    return $response->getParsedDomObject();
  }
  if ($type == "xml") {
    return $response->getParsedXmlArray();
  }
  return $response->getBody();
}

/**
 * @param array $urls    网址数组
 * @param int   $timeout 超时时间 秒
 * @param bool  $max_co  连接池 设为数字为最大并发量
 * @return \Swlib\Saber\Response[]|\Swlib\Saber\ResponseMap
 */
function getpages(array $urls, int $timeout = 3, $max_co = true)
{
  SaberGM::default([
    'timeout' => $timeout,
    'referer' => $urls[0],
    'use_pool' => $max_co,
    'useragent' => 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.25 Safari/537.36 Core/1.70.3732.400 QQBrowser/10.5.3819.400',
  ]);
  return SaberGM::list([
    'uri' => $urls,
  ]);
}

/**
 * 函数仅返回给定数组中指定的键/值对
 * @param array $arr
 * @param array $has
 * @return array
 */
function array_only(array $arr, array $has)
{
  return ArrayHelper::filter($arr, $has);
}

/**
 * 是否以某个字符串开头
 * @param string $haystack 被查找
 * @param string $needles  查找
 * @return bool 是否找到
 */
function str_starts_with(string $haystack, string $needles)
{
  foreach ((array)$needles as $needle) {
    if ($needle !== '' && substr($haystack, 0, strlen($needle)) === (string)$needle) {
      return true;
    }
  }
  
  return false;
}

/**
 * 是否以某个字符串结尾
 * @param string $haystack 被查找
 * @param string $needles  查找
 * @return bool
 */
function str_ends_with(string $haystack, string $needles)
{
  foreach ((array)$needles as $needle) {
    if (substr($haystack, -strlen($needle)) === (string)$needle) {
      return true;
    }
  }
  return false;
}

/**
 * 输出内容　用于调试　请使用框架自带的vdump
 * @param Response $response 控制器传过来
 * @param          $msg　输出的内容
 * @return Response
 */
// function dump(Response $response, $msg): Response
// {
//  $response = $response->withContent("<pre>");
//  $response = $response->withContent(print_r($msg, 1));
//  $response = $response->withContentType(ContentType::HTML);
//  return $response;
// }

/**
 * 返回给定值的默认值。
 * Closure是闭包
 * @param $value
 * @return mixed
 */
function value_($value)
{
  return $value instanceof Closure ? $value() : $value;
}


/**
 * @return HttpContext|Response
 */
function response()
{
  $r = Context::get(true);
  return $r instanceof HttpContext ? $r->getResponse() : context()->getResponse();
}

/**
 * @return HttpContext|Request
 */
function request()
{
  $r = Context::get(true);
  return $r instanceof HttpContext ? $r->getRequest() : context()->getRequest();
}