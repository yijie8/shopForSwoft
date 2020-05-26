<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 优惠券表
 * Class StoreCoupon
 *
 * @since 2.0
 *
 * @Entity(table="store_coupon")
 */
class StoreCoupon extends Model
{
    /**
     * 优惠券表ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 优惠券名称
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 兑换消耗积分值
     *
     * @Column()
     *
     * @var int
     */
    private $integral;

    /**
     * 兑换的优惠券面值
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
     * 优惠券有效期限（单位：天）
     *
     * @Column(name="coupon_time", prop="couponTime")
     *
     * @var int
     */
    private $couponTime;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 状态（0：关闭，1：开启）
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 兑换项目添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

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
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param int $integral
     *
     * @return self
     */
    public function setIntegral(int $integral): self
    {
        $this->integral = $integral;

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
     * @param int $couponTime
     *
     * @return self
     */
    public function setCouponTime(int $couponTime): self
    {
        $this->couponTime = $couponTime;

        return $this;
    }

    /**
     * @param int $sort
     *
     * @return self
     */
    public function setSort(int $sort): self
    {
        $this->sort = $sort;

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
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getIntegral(): ?int
    {
        return $this->integral;
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
    public function getCouponTime(): ?int
    {
        return $this->couponTime;
    }

    /**
     * @return int
     */
    public function getSort(): ?int
    {
        return $this->sort;
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
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

    /**
     * @return int
     */
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

}
