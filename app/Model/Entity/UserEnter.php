<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商户申请表
 * Class UserEnter
 *
 * @since 2.0
 *
 * @Entity(table="user_enter")
 */
class UserEnter extends Model
{
    /**
     * 商户申请ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 用户ID
     *
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 商户所在省
     *
     * @Column()
     *
     * @var string
     */
    private $province;

    /**
     * 商户所在市
     *
     * @Column()
     *
     * @var string
     */
    private $city;

    /**
     * 商户所在区
     *
     * @Column()
     *
     * @var string
     */
    private $district;

    /**
     * 商户详细地址
     *
     * @Column()
     *
     * @var string
     */
    private $address;

    /**
     * 商户名称
     *
     * @Column(name="merchant_name", prop="merchantName")
     *
     * @var string
     */
    private $merchantName;

    /**
     * 
     *
     * @Column(name="link_user", prop="linkUser")
     *
     * @var string
     */
    private $linkUser;

    /**
     * 商户电话
     *
     * @Column(name="link_tel", prop="linkTel")
     *
     * @var string
     */
    private $linkTel;

    /**
     * 商户证书
     *
     * @Column()
     *
     * @var string
     */
    private $charter;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 审核时间
     *
     * @Column(name="apply_time", prop="applyTime")
     *
     * @var int
     */
    private $applyTime;

    /**
     * 通过时间
     *
     * @Column(name="success_time", prop="successTime")
     *
     * @var int
     */
    private $successTime;

    /**
     * 未通过原因
     *
     * @Column(name="fail_message", prop="failMessage")
     *
     * @var string
     */
    private $failMessage;

    /**
     * 未通过时间
     *
     * @Column(name="fail_time", prop="failTime")
     *
     * @var int
     */
    private $failTime;

    /**
     * -1 审核未通过 0未审核 1审核通过
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 0 = 开启 1= 关闭
     *
     * @Column(name="is_lock", prop="isLock")
     *
     * @var int
     */
    private $isLock;

    /**
     * 是否删除
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;


    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

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
     * @param string $district
     *
     * @return self
     */
    public function setDistrict(string $district): self
    {
        $this->district = $district;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string $merchantName
     *
     * @return self
     */
    public function setMerchantName(string $merchantName): self
    {
        $this->merchantName = $merchantName;

        return $this;
    }

    /**
     * @param string $linkUser
     *
     * @return self
     */
    public function setLinkUser(string $linkUser): self
    {
        $this->linkUser = $linkUser;

        return $this;
    }

    /**
     * @param string $linkTel
     *
     * @return self
     */
    public function setLinkTel(string $linkTel): self
    {
        $this->linkTel = $linkTel;

        return $this;
    }

    /**
     * @param string $charter
     *
     * @return self
     */
    public function setCharter(string $charter): self
    {
        $this->charter = $charter;

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
     * @param int $applyTime
     *
     * @return self
     */
    public function setApplyTime(int $applyTime): self
    {
        $this->applyTime = $applyTime;

        return $this;
    }

    /**
     * @param int $successTime
     *
     * @return self
     */
    public function setSuccessTime(int $successTime): self
    {
        $this->successTime = $successTime;

        return $this;
    }

    /**
     * @param string $failMessage
     *
     * @return self
     */
    public function setFailMessage(string $failMessage): self
    {
        $this->failMessage = $failMessage;

        return $this;
    }

    /**
     * @param int $failTime
     *
     * @return self
     */
    public function setFailTime(int $failTime): self
    {
        $this->failTime = $failTime;

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
     * @param int $isLock
     *
     * @return self
     */
    public function setIsLock(int $isLock): self
    {
        $this->isLock = $isLock;

        return $this;
    }

    /**
     * @param int $isDel
     *
     * @return self
     */
    public function setIsDel(int $isDel): self
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
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
    public function getProvince(): ?string
    {
        return $this->province;
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
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }

    /**
     * @return string
     */
    public function getLinkUser(): ?string
    {
        return $this->linkUser;
    }

    /**
     * @return string
     */
    public function getLinkTel(): ?string
    {
        return $this->linkTel;
    }

    /**
     * @return string
     */
    public function getCharter(): ?string
    {
        return $this->charter;
    }

    /**
     * @return int
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

    /**
     * @return int
     */
    public function getApplyTime(): ?int
    {
        return $this->applyTime;
    }

    /**
     * @return int
     */
    public function getSuccessTime(): ?int
    {
        return $this->successTime;
    }

    /**
     * @return string
     */
    public function getFailMessage(): ?string
    {
        return $this->failMessage;
    }

    /**
     * @return int
     */
    public function getFailTime(): ?int
    {
        return $this->failTime;
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
    public function getIsLock(): ?int
    {
        return $this->isLock;
    }

    /**
     * @return int
     */
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

}
