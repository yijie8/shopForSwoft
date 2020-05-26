<?php
/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2017-6-23
 */

namespace Yijie\EasyTBK\SuNing\Request\Netalliance;

use Yijie\EasyTBK\SuNing\SuningRequest;
use Yijie\EasyTBK\SuNing\RequestCheckUtil;

class HomepagepositionurlQueryRequest extends SuningRequest
{

    public function getApiMethodName()
    {
        return 'suning.netalliance.homepagepositionurl.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check()
    {
        //非空校验
    }

    public function getBizName()
    {
        return "queryHomepagepositionurl";
    }

}

?>
