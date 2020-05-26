<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户充值表
 * Class UserRecharge
 *
 * @since 2.0
 *
 * @Entity(table="user_recharge")
 */
class UserRecharge extends Model
{
    /**
     * 
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 充值用户UID
     *
     * @Column()
     *
     * @var int|null
     */
    private $uid;

    /**
     * 订单号
     *
     * @Column(name="order_id", prop="orderId")
     *
     * @var string|null
     */
    private $orderId;

    /**
     * 充值金额
     *
     * @Column()
     *
     * @var float|null
     */
    private $price;

    /**
     * 充值类型
     *
     * @Column(name="recharge_type", prop="rechargeType")
     *
     * @var string|null
     */
    private $rechargeType;

    /**
     * 是否充值
     *
     * @Column()
     *
     * @var int|null
     */
    private $paid;

    /**
     * 充值支付时间
     *
     * @Column(name="pay_time", prop="payTime")
     *
     * @var int|null
     */
    private $payTime;

    /**
     * 充值时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int|null
     */
    private $addTime;

    /**
     * 退款金额
     *
     * @Column(name="refund_price", prop="refundPrice")
     *
     * @var float|null
     */
    private $refundPrice;


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
     * @param int|null $uid
     *
     * @return self
     */
    public function setUid(?int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @param string|null $orderId
     *
     * @return self
     */
    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param string|null $rechargeType
     *
     * @return self
     */
    public function setRechargeType(?string $rechargeType): self
    {
        $this->rechargeType = $rechargeType;

        return $this;
    }

    /**
     * @param int|null $paid
     *
     * @return self
     */
    public function setPaid(?int $paid): self
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * @param int|null $payTime
     *
     * @return self
     */
    public function setPayTime(?int $payTime): self
    {
        $this->payTime = $payTime;

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
     * @param float|null $refundPrice
     *
     * @return self
     */
    public function setRefundPrice(?float $refundPrice): self
    {
        $this->refundPrice = $refundPrice;

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
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return string|null
     */
    public function getRechargeType(): ?string
    {
        return $this->rechargeType;
    }

    /**
     * @return int|null
     */
    public function getPaid(): ?int
    {
        return $this->paid;
    }

    /**
     * @return int|null
     */
    public function getPayTime(): ?int
    {
        return $this->payTime;
    }

    /**
     * @return int|null
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

    /**
     * @return float|null
     */
    public function getRefundPrice(): ?float
    {
        return $this->refundPrice;
    }

}
