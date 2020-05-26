<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://swoft.org/docs
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Http\Controller\Admin;

use App\Http\Controller\BaseController;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
// use Swoft\Http\Message\Response;

/**
 * Class Admin/LoginController
 *
 * @Controller(prefix="/admin/login")
 * @package App\Http\Controller
 */
class LoginController extends BaseController{
    /**
     * @RequestMapping(route="/admin/login", method=RequestMethod::GET)
     * @return array
     */
    public function index()
    {
        return view('admin/login');
    }

    /**
     * @RequestMapping(route="/admin/verify")
     * @return array
     */
    public function verify(): array
    {
        if (!request()->isPost()) return $this->failed('请登陆!');
        list($account, $pwd, $verify) = UtilService::postMore([
            'account', 'pwd', 'verify'
        ], null, true);
        //检验验证码
        if (!captcha_check($verify)) return $this->failed('验证码错误，请重新输入');
        $error = session()->get('login_error') ?: ['num' => 0, 'time' => time()];
        $error['num'] = 0;
        if ($error['num'] >= 5 && $error['time'] > strtotime('- 5 minutes'))
            return $this->failed('错误次数过多,请稍候再试!');
        //检验帐号密码
        $res = SystemAdmin::login($account, $pwd);
        if ($res) {
            session()->remove('login_error');
            return $this->successful(['url' => Url::buildUrl('Index/index')->build()]);
        } else {
            $error['num'] += 1;
            $error['time'] = time();
            session()->get('login_error', $error);
            return $this->failed(SystemAdmin::getErrorInfo('用户名错误，请重新输入'));
        }
    }

    /**
     * Create a new record. access uri path: /admin/login
     * @RequestMapping(route="/admin/login", method=RequestMethod::POST)
     * @return array
     */
    public function post(): array
    {
        return ['id' => 2];
    }

    /**
     * Update one by ID. access uri path: /admin/login/{id}
     * @RequestMapping(route="{id}", method=RequestMethod::PUT)
     * @return array
     */
    public function put(): array
    {
        return ['id' => 1];
    }

    /**
     * Delete one by ID. access uri path: /admin/login/{id}
     * @RequestMapping(route="{id}", method=RequestMethod::DELETE)
     * @return array
     */
    public function del(): array
    {
        return ['id' => 1];
    }
}
