<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 客服表
 * Class StoreService
 *
 * @since 2.0
 *
 * @Entity(table="store_service")
 */
class StoreService extends Model
{
    /**
     * 客服id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 商户id
     *
     * @Column(name="mer_id", prop="merId")
     *
     * @var int
     */
    private $merId;

    /**
     * 客服uid
     *
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 客服头像
     *
     * @Column()
     *
     * @var string
     */
    private $avatar;

    /**
     * 代理名称
     *
     * @Column()
     *
     * @var string
     */
    private $nickname;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 0隐藏1显示
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 订单通知1开启0关闭
     *
     * @Column()
     *
     * @var int|null
     */
    private $notify;

    /**
     * 是否展示统计管理
     *
     * @Column()
     *
     * @var int
     */
    private $customer;


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
     * @param int $merId
     *
     * @return self
     */
    public function setMerId(int $merId): self
    {
        $this->merId = $merId;

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
     * @param int|null $notify
     *
     * @return self
     */
    public function setNotify(?int $notify): self
    {
        $this->notify = $notify;

        return $this;
    }

    /**
     * @param int $customer
     *
     * @return self
     */
    public function setCustomer(int $customer): self
    {
        $this->customer = $customer;

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
    public function getMerId(): ?int
    {
        return $this->merId;
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
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @return string
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
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
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getNotify(): ?int
    {
        return $this->notify;
    }

    /**
     * @return int
     */
    public function getCustomer(): ?int
    {
        return $this->customer;
    }

}
