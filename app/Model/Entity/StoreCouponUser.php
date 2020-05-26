<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 优惠券发放记录表
 * Class StoreCouponUser
 *
 * @since 2.0
 *
 * @Entity(table="store_coupon_user")
 */
class StoreCouponUser extends Model
{
    /**
     * 优惠券发放记录id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 兑换的项目id
     *
     * @Column()
     *
     * @var int
     */
    private $cid;

    /**
     * 优惠券所属用户
     *
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 优惠券名称
     *
     * @Column(name="coupon_title", prop="couponTitle")
     *
     * @var string
     */
    private $couponTitle;

    /**
     * 优惠券的面值
     *
     * @Column(name="coupon_price", prop="couponPrice")
     *
     * @var float
     */
    private $couponPrice;

    /**
     * 最低消费多少金额可用优惠券
     *
     * @Column(name="use_min_price", prop="useMinPrice")
     *
     * @var float
     */
    private $useMinPrice;

    /**
     * 优惠券创建时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 优惠券结束时间
     *
     * @Column(name="end_time", prop="endTime")
     *
     * @var int
     */
    private $endTime;

    /**
     * 使用时间
     *
     * @Column(name="use_time", prop="useTime")
     *
     * @var int
     */
    private $useTime;

    /**
     * 获取方式
     *
     * @Column()
     *
     * @var string
     */
    private $type;

    /**
     * 状态（0：未使用，1：已使用, 2:已过期）
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 是否有效
     *
     * @Column(name="is_fail", prop="isFail")
     *
     * @var int
     */
    private $isFail;


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
     * @param int $cid
     *
     * @return self
     */
    public function setCid(int $cid): self
    {
        $this->cid = $cid;

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
     * @param string $couponTitle
     *
     * @return self
     */
    public function setCouponTitle(string $couponTitle): self
    {
        $this->couponTitle = $couponTitle;

        return $this;
    }

    /**
     * @param float $couponPrice
     *
     * @return self
     */
    public function setCouponPrice(float $couponPrice): self
    {
        $this->couponPrice = $couponPrice;

        return $this;
    }

    /**
     * @param float $useMinPrice
     *
     * @return self
     */
    public function setUseMinPrice(float $useMinPrice): self
    {
        $this->useMinPrice = $useMinPrice;

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
     * @param int $endTime
     *
     * @return self
     */
    public function setEndTime(int $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @param int $useTime
     *
     * @return self
     */
    public function setUseTime(int $useTime): self
    {
        $this->useTime = $useTime;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

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
     * @param int $isFail
     *
     * @return self
     */
    public function setIsFail(int $isFail): self
    {
        $this->isFail = $isFail;

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
    public function getCid(): ?int
    {
        return $this->cid;
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
    public function getCouponTitle(): ?string
    {
        return $this->couponTitle;
    }

    /**
     * @return float
     */
    public function getCouponPrice(): ?float
    {
        return $this->couponPrice;
    }

    /**
     * @return float
     */
    public function getUseMinPrice(): ?float
    {
        return $this->useMinPrice;
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
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * @return int
     */
    public function getUseTime(): ?int
    {
        return $this->useTime;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
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
    public function getIsFail(): ?int
    {
        return $this->isFail;
    }

}
