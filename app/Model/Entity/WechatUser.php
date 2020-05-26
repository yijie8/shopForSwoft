<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 微信用户表
 * Class WechatUser
 *
 * @since 2.0
 *
 * @Entity(table="wechat_user")
 */
class WechatUser extends Model
{
    /**
     * 微信用户id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 只有在用户将公众号绑定到微信开放平台帐号后，才会出现该字段
     *
     * @Column()
     *
     * @var string|null
     */
    private $unionid;

    /**
     * 用户的标识，对当前公众号唯一
     *
     * @Column()
     *
     * @var string|null
     */
    private $openid;

    /**
     * 小程序唯一身份ID
     *
     * @Column(name="routine_openid", prop="routineOpenid")
     *
     * @var string|null
     */
    private $routineOpenid;

    /**
     * 用户的昵称
     *
     * @Column()
     *
     * @var string
     */
    private $nickname;

    /**
     * 用户头像
     *
     * @Column()
     *
     * @var string
     */
    private $headimgurl;

    /**
     * 用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
     *
     * @Column()
     *
     * @var int
     */
    private $sex;

    /**
     * 用户所在城市
     *
     * @Column()
     *
     * @var string
     */
    private $city;

    /**
     * 用户的语言，简体中文为zh_CN
     *
     * @Column()
     *
     * @var string
     */
    private $language;

    /**
     * 用户所在省份
     *
     * @Column()
     *
     * @var string
     */
    private $province;

    /**
     * 用户所在国家
     *
     * @Column()
     *
     * @var string
     */
    private $country;

    /**
     * 公众号运营者对粉丝的备注，公众号运营者可在微信公众平台用户管理界面对粉丝添加备注
     *
     * @Column()
     *
     * @var string|null
     */
    private $remark;

    /**
     * 用户所在的分组ID（兼容旧的用户分组接口）
     *
     * @Column()
     *
     * @var int|null
     */
    private $groupid;

    /**
     * 用户被打上的标签ID列表
     *
     * @Column(name="tagid_list", prop="tagidList")
     *
     * @var string|null
     */
    private $tagidList;

    /**
     * 用户是否订阅该公众号标识
     *
     * @Column()
     *
     * @var int|null
     */
    private $subscribe;

    /**
     * 关注公众号时间
     *
     * @Column(name="subscribe_time", prop="subscribeTime")
     *
     * @var int|null
     */
    private $subscribeTime;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int|null
     */
    private $addTime;

    /**
     * 一级推荐人
     *
     * @Column()
     *
     * @var int|null
     */
    private $stair;

    /**
     * 二级推荐人
     *
     * @Column()
     *
     * @var int|null
     */
    private $second;

    /**
     * 一级推荐人订单
     *
     * @Column(name="order_stair", prop="orderStair")
     *
     * @var int|null
     */
    private $orderStair;

    /**
     * 二级推荐人订单
     *
     * @Column(name="order_second", prop="orderSecond")
     *
     * @var int|null
     */
    private $orderSecond;

    /**
     * 佣金
     *
     * @Column(name="now_money", prop="nowMoney")
     *
     * @var float|null
     */
    private $nowMoney;

    /**
     * 小程序用户会话密匙
     *
     * @Column(name="session_key", prop="sessionKey")
     *
     * @var string|null
     */
    private $sessionKey;

    /**
     * 用户类型
     *
     * @Column(name="user_type", prop="userType")
     *
     * @var string|null
     */
    private $userType;


    /**
     * @param int $uid
     *
     * @return self
     */
    public function setUid(int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @param string|null $unionid
     *
     * @return self
     */
    public function setUnionid(?string $unionid): self
    {
        $this->unionid = $unionid;

        return $this;
    }

    /**
     * @param string|null $openid
     *
     * @return self
     */
    public function setOpenid(?string $openid): self
    {
        $this->openid = $openid;

        return $this;
    }

    /**
     * @param string|null $routineOpenid
     *
     * @return self
     */
    public function setRoutineOpenid(?string $routineOpenid): self
    {
        $this->routineOpenid = $routineOpenid;

        return $this;
    }

    /**
     * @param string $nickname
     *
     * @return self
     */
    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * @param string $headimgurl
     *
     * @return self
     */
    public function setHeadimgurl(string $headimgurl): self
    {
        $this->headimgurl = $headimgurl;

        return $this;
    }

    /**
     * @param int $sex
     *
     * @return self
     */
    public function setSex(int $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @param string $province
     *
     * @return self
     */
    public function setProvince(string $province): self
    {
        $this->province = $province;

        return $this;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param string|null $remark
     *
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * @param int|null $groupid
     *
     * @return self
     */
    public function setGroupid(?int $groupid): self
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * @param string|null $tagidList
     *
     * @return self
     */
    public function setTagidList(?string $tagidList): self
    {
        $this->tagidList = $tagidList;

        return $this;
    }

    /**
     * @param int|null $subscribe
     *
     * @return self
     */
    public function setSubscribe(?int $subscribe): self
    {
        $this->subscribe = $subscribe;

        return $this;
    }

    /**
     * @param int|null $subscribeTime
     *
     * @return self
     */
    public function setSubscribeTime(?int $subscribeTime): self
    {
        $this->subscribeTime = $subscribeTime;

        return $this;
    }

    /**
     * @param int|null $addTime
     *
     * @return self
     */
    public function setAddTime(?int $addTime): self
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * @param int|null $stair
     *
     * @return self
     */
    public function setStair(?int $stair): self
    {
        $this->stair = $stair;

        return $this;
    }

    /**
     * @param int|null $second
     *
     * @return self
     */
    public function setSecond(?int $second): self
    {
        $this->second = $second;

        return $this;
    }

    /**
     * @param int|null $orderStair
     *
     * @return self
     */
    public function setOrderStair(?int $orderStair): self
    {
        $this->orderStair = $orderStair;

        return $this;
    }

    /**
     * @param int|null $orderSecond
     *
     * @return self
     */
    public function setOrderSecond(?int $orderSecond): self
    {
        $this->orderSecond = $orderSecond;

        return $this;
    }

    /**
     * @param float|null $nowMoney
     *
     * @return self
     */
    public function setNowMoney(?float $nowMoney): self
    {
        $this->nowMoney = $nowMoney;

        return $this;
    }

    /**
     * @param string|null $sessionKey
     *
     * @return self
     */
    public function setSessionKey(?string $sessionKey): self
    {
        $this->sessionKey = $sessionKey;

        return $this;
    }

    /**
     * @param string|null $userType
     *
     * @return self
     */
    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * @return int
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @return string|null
     */
    public function getUnionid(): ?string
    {
        return $this->unionid;
    }

    /**
     * @return string|null
     */
    public function getOpenid(): ?string
    {
        return $this->openid;
    }

    /**
     * @return string|null
     */
    public function getRoutineOpenid(): ?string
    {
        return $this->routineOpenid;
    }

    /**
     * @return string
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getHeadimgurl(): ?string
    {
        return $this->headimgurl;
    }

    /**
     * @return int
     */
    public function getSex(): ?int
    {
        return $this->sex;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @return int|null
     */
    public function getGroupid(): ?int
    {
        return $this->groupid;
    }

    /**
     * @return string|null
     */
    public function getTagidList(): ?string
    {
        return $this->tagidList;
    }

    /**
     * @return int|null
     */
    public function getSubscribe(): ?int
    {
        return $this->subscribe;
    }

    /**
     * @return int|null
     */
    public function getSubscribeTime(): ?int
    {
        return $this->subscribeTime;
    }

    /**
     * @return int|null
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

    /**
     * @return int|null
     */
    public function getStair(): ?int
    {
        return $this->stair;
    }

    /**
     * @return int|null
     */
    public function getSecond(): ?int
    {
        return $this->second;
    }

    /**
     * @return int|null
     */
    public function getOrderStair(): ?int
    {
        return $this->orderStair;
    }

    /**
     * @return int|null
     */
    public function getOrderSecond(): ?int
    {
        return $this->orderSecond;
    }

    /**
     * @return float|null
     */
    public function getNowMoney(): ?float
    {
        return $this->nowMoney;
    }

    /**
     * @return string|null
     */
    public function getSessionKey(): ?string
    {
        return $this->sessionKey;
    }

    /**
     * @return string|null
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }

}
