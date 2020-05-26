<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Http\Controller;
use Swoft;
use Swoft\Exception\SwoftException;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Throwable;
use function context;

/**
 * Class HomeController
 * @Controller()
 */
class HomeController
{
  /**
   * @RequestMapping("/")
   * @throws Throwable
   */
  public function index(): Response
  {
    return context()->getResponse()->withContent("22222222");
    return context()->getResponse()->withContent("111111111111");
  }

  /**
   * @RequestMapping("/hello[/{name}]")
   * @param string $name
   *
   * @return Response
   * @throws SwoftException
   */
  public function hello(string $name): Response
  {
    return context()->getResponse()->withContent('Hello' . ($name === '' ? '' : ", {$name}"));
  }
}
