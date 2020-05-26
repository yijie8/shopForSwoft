<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户表
 * Class User
 *
 * @since 2.0
 *
 * @Entity(table="user")
 */
class User extends Model
{
    /**
     * 用户id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 用户账号
     *
     * @Column()
     *
     * @var string
     */
    private $account;

    /**
     * 用户密码
     *
     * @Column(hidden=true)
     *
     * @var string
     */
    private $pwd;

    /**
     * 真实姓名
     *
     * @Column(name="real_name", prop="realName")
     *
     * @var string
     */
    private $realName;

    /**
     * 生日
     *
     * @Column()
     *
     * @var int
     */
    private $birthday;

    /**
     * 身份证号码
     *
     * @Column(name="card_id", prop="cardId")
     *
     * @var string
     */
    private $cardId;

    /**
     * 用户备注
     *
     * @Column()
     *
     * @var string
     */
    private $mark;

    /**
     * 合伙人id
     *
     * @Column(name="partner_id", prop="partnerId")
     *
     * @var int
     */
    private $partnerId;

    /**
     * 用户分组id
     *
     * @Column(name="group_id", prop="groupId")
     *
     * @var int
     */
    private $groupId;

    /**
     * 用户昵称
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
    private $avatar;

    /**
     * 手机号码
     *
     * @Column()
     *
     * @var string|null
     */
    private $phone;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 添加ip
     *
     * @Column(name="add_ip", prop="addIp")
     *
     * @var string
     */
    private $addIp;

    /**
     * 最后一次登录时间
     *
     * @Column(name="last_time", prop="lastTime")
     *
     * @var int
     */
    private $lastTime;

    /**
     * 最后一次登录ip
     *
     * @Column(name="last_ip", prop="lastIp")
     *
     * @var string
     */
    private $lastIp;

    /**
     * 用户余额
     *
     * @Column(name="now_money", prop="nowMoney")
     *
     * @var float
     */
    private $nowMoney;

    /**
     * 佣金金额
     *
     * @Column(name="brokerage_price", prop="brokeragePrice")
     *
     * @var float
     */
    private $brokeragePrice;

    /**
     * 用户剩余积分
     *
     * @Column()
     *
     * @var float
     */
    private $integral;

    /**
     * 连续签到天数
     *
     * @Column(name="sign_num", prop="signNum")
     *
     * @var int
     */
    private $signNum;

    /**
     * 1为正常，0为禁止
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 等级
     *
     * @Column()
     *
     * @var int
     */
    private $level;

    /**
     * 推广元id
     *
     * @Column(name="spread_uid", prop="spreadUid")
     *
     * @var int
     */
    private $spreadUid;

    /**
     * 推广员关联时间
     *
     * @Column(name="spread_time", prop="spreadTime")
     *
     * @var int
     */
    private $spreadTime;

    /**
     * 用户类型
     *
     * @Column(name="user_type", prop="userType")
     *
     * @var string
     */
    private $userType;

    /**
     * 是否为推广员
     *
     * @Column(name="is_promoter", prop="isPromoter")
     *
     * @var int
     */
    private $isPromoter;

    /**
     * 用户购买次数
     *
     * @Column(name="pay_count", prop="payCount")
     *
     * @var int|null
     */
    private $payCount;

    /**
     * 下级人数
     *
     * @Column(name="spread_count", prop="spreadCount")
     *
     * @var int|null
     */
    private $spreadCount;

    /**
     * 清理会员时间
     *
     * @Column(name="clean_time", prop="cleanTime")
     *
     * @var int|null
     */
    private $cleanTime;

    /**
     * 详细地址
     *
     * @Column()
     *
     * @var string
     */
    private $addres;

    /**
     * 管理员编号
     *
     * @Column()
     *
     * @var int|null
     */
    private $adminid;

    /**
     * 用户登陆类型，h5,wechat,routine
     *
     * @Column(name="login_type", prop="loginType")
     *
     * @var string
     */
    private $loginType;


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
     * @param string $account
     *
     * @return self
     */
    public function setAccount(string $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @param string $pwd
     *
     * @return self
     */
    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * @param string $realName
     *
     * @return self
     */
    public function setRealName(string $realName): self
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * @param int $birthday
     *
     * @return self
     */
    public function setBirthday(int $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @param string $cardId
     *
     * @return self
     */
    public function setCardId(string $cardId): self
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * @param string $mark
     *
     * @return self
     */
    public function setMark(string $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * @param int $partnerId
     *
     * @return self
     */
    public function setPartnerId(int $partnerId): self
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    /**
     * @param int $groupId
     *
     * @return self
     */
    public function setGroupId(int $groupId): self
    {
        $this->groupId = $groupId;

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
     * @param string $avatar
     *
     * @return self
     */
    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param int $addTime
     *
     * @return self
     */
    public function setAddTime(int $addTime): self
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * @param string $addIp
     *
     * @return self
     */
    public function setAddIp(string $addIp): self
    {
        $this->addIp = $addIp;

        return $this;
    }

    /**
     * @param int $lastTime
     *
     * @return self
     */
    public function setLastTime(int $lastTime): self
    {
        $this->lastTime = $lastTime;

        return $this;
    }

    /**
     * @param string $lastIp
     *
     * @return self
     */
    public function setLastIp(string $lastIp): self
    {
        $this->lastIp = $lastIp;

        return $this;
    }

    /**
     * @param float $nowMoney
     *
     * @return self
     */
    public function setNowMoney(float $nowMoney): self
    {
        $this->nowMoney = $nowMoney;

        return $this;
    }

    /**
     * @param float $brokeragePrice
     *
     * @return self
     */
    public function setBrokeragePrice(float $brokeragePrice): self
    {
        $this->brokeragePrice = $brokeragePrice;

        return $this;
    }

    /**
     * @param float $integral
     *
     * @return self
     */
    public function setIntegral(float $integral): self
    {
        $this->integral = $integral;

        return $this;
    }

    /**
     * @param int $signNum
     *
     * @return self
     */
    public function setSignNum(int $signNum): self
    {
        $this->signNum = $signNum;

        return $this;
    }

    /**
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @param int $spreadUid
     *
     * @return self
     */
    public function setSpreadUid(int $spreadUid): self
    {
        $this->spreadUid = $spreadUid;

        return $this;
    }

    /**
     * @param int $spreadTime
     *
     * @return self
     */
    public function setSpreadTime(int $spreadTime): self
    {
        $this->spreadTime = $spreadTime;

        return $this;
    }

    /**
     * @param string $userType
     *
     * @return self
     */
    public function setUserType(string $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * @param int $isPromoter
     *
     * @return self
     */
    public function setIsPromoter(int $isPromoter): self
    {
        $this->isPromoter = $isPromoter;

        return $this;
    }

    /**
     * @param int|null $payCount
     *
     * @return self
     */
    public function setPayCount(?int $payCount): self
    {
        $this->payCount = $payCount;

        return $this;
    }

    /**
     * @param int|null $spreadCount
     *
     * @return self
     */
    public function setSpreadCount(?int $spreadCount): self
    {
        $this->spreadCount = $spreadCount;

        return $this;
    }

    /**
     * @param int|null $cleanTime
     *
     * @return self
     */
    public function setCleanTime(?int $cleanTime): self
    {
        $this->cleanTime = $cleanTime;

        return $this;
    }

    /**
     * @param string $addres
     *
     * @return self
     */
    public function setAddres(string $addres): self
    {
        $this->addres = $addres;

        return $this;
    }

    /**
     * @param int|null $adminid
     *
     * @return self
     */
    public function setAdminid(?int $adminid): self
    {
        $this->adminid = $adminid;

        return $this;
    }

    /**
     * @param string $loginType
     *
     * @return self
     */
    public function setLoginType(string $loginType): self
    {
        $this->loginType = $loginType;

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
     * @return string
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    /**
     * @return string
     */
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @return int
     */
    public function getBirthday(): ?int
    {
        return $this->birthday;
    }

    /**
     * @return string
     */
    public function getCardId(): ?string
    {
        return $this->cardId;
    }

    /**
     * @return string
     */
    public function getMark(): ?string
    {
        return $this->mark;
    }

    /**
     * @return int
     */
    public function getPartnerId(): ?int
    {
        return $this->partnerId;
    }

    /**
     * @return int
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
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
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return int
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

    /**
     * @return string
     */
    public function getAddIp(): ?string
    {
        return $this->addIp;
    }

    /**
     * @return int
     */
    public function getLastTime(): ?int
    {
        return $this->lastTime;
    }

    /**
     * @return string
     */
    public function getLastIp(): ?string
    {
        return $this->lastIp;
    }

    /**
     * @return float
     */
    public function getNowMoney(): ?float
    {
        return $this->nowMoney;
    }

    /**
     * @return float
     */
    public function getBrokeragePrice(): ?float
    {
        return $this->brokeragePrice;
    }

    /**
     * @return float
     */
    public function getIntegral(): ?float
    {
        return $this->integral;
    }

    /**
     * @return int
     */
    public function getSignNum(): ?int
    {
        return $this->signNum;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getSpreadUid(): ?int
    {
        return $this->spreadUid;
    }

    /**
     * @return int
     */
    public function getSpreadTime(): ?int
    {
        return $this->spreadTime;
    }

    /**
     * @return string
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }

    /**
     * @return int
     */
    public function getIsPromoter(): ?int
    {
        return $this->isPromoter;
    }

    /**
     * @return int|null
     */
    public function getPayCount(): ?int
    {
        return $this->payCount;
    }

    /**
     * @return int|null
     */
    public function getSpreadCount(): ?int
    {
        return $this->spreadCount;
    }

    /**
     * @return int|null
     */
    public function getCleanTime(): ?int
    {
        return $this->cleanTime;
    }

    /**
     * @return string
     */
    public function getAddres(): ?string
    {
        return $this->addres;
    }

    /**
     * @return int|null
     */
    public function getAdminid(): ?int
    {
        return $this->adminid;
    }

    /**
     * @return string
     */
    public function getLoginType(): ?string
    {
        return $this->loginType;
    }

}
