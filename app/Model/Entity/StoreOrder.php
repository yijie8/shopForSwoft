<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 订单表
 * Class StoreOrder
 *
 * @since 2.0
 *
 * @Entity(table="store_order")
 */
class StoreOrder extends Model
{
    /**
     * 订单ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 订单号
     *
     * @Column(name="order_id", prop="orderId")
     *
     * @var string
     */
    private $orderId;

    /**
     * 用户id
     *
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 用户姓名
     *
     * @Column(name="real_name", prop="realName")
     *
     * @var string
     */
    private $realName;

    /**
     * 用户电话
     *
     * @Column(name="user_phone", prop="userPhone")
     *
     * @var string
     */
    private $userPhone;

    /**
     * 详细地址
     *
     * @Column(name="user_address", prop="userAddress")
     *
     * @var string
     */
    private $userAddress;

    /**
     * 购物车id
     *
     * @Column(name="cart_id", prop="cartId")
     *
     * @var string
     */
    private $cartId;

    /**
     * 运费金额
     *
     * @Column(name="freight_price", prop="freightPrice")
     *
     * @var float
     */
    private $freightPrice;

    /**
     * 订单商品总数
     *
     * @Column(name="total_num", prop="totalNum")
     *
     * @var int
     */
    private $totalNum;

    /**
     * 订单总价
     *
     * @Column(name="total_price", prop="totalPrice")
     *
     * @var float
     */
    private $totalPrice;

    /**
     * 邮费
     *
     * @Column(name="total_postage", prop="totalPostage")
     *
     * @var float
     */
    private $totalPostage;

    /**
     * 实际支付金额
     *
     * @Column(name="pay_price", prop="payPrice")
     *
     * @var float
     */
    private $payPrice;

    /**
     * 支付邮费
     *
     * @Column(name="pay_postage", prop="payPostage")
     *
     * @var float
     */
    private $payPostage;

    /**
     * 抵扣金额
     *
     * @Column(name="deduction_price", prop="deductionPrice")
     *
     * @var float
     */
    private $deductionPrice;

    /**
     * 优惠券id
     *
     * @Column(name="coupon_id", prop="couponId")
     *
     * @var int
     */
    private $couponId;

    /**
     * 优惠券金额
     *
     * @Column(name="coupon_price", prop="couponPrice")
     *
     * @var float
     */
    private $couponPrice;

    /**
     * 支付状态
     *
     * @Column()
     *
     * @var int
     */
    private $paid;

    /**
     * 支付时间
     *
     * @Column(name="pay_time", prop="payTime")
     *
     * @var int|null
     */
    private $payTime;

    /**
     * 支付方式
     *
     * @Column(name="pay_type", prop="payType")
     *
     * @var string
     */
    private $payType;

    /**
     * 创建时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 订单状态（-1 : 申请退款 -2 : 退货成功 0：待发货；1：待收货；2：已收货；3：待评价；-1：已退款）
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 0 未退款 1 申请中 2 已退款
     *
     * @Column(name="refund_status", prop="refundStatus")
     *
     * @var int
     */
    private $refundStatus;

    /**
     * 退款图片
     *
     * @Column(name="refund_reason_wap_img", prop="refundReasonWapImg")
     *
     * @var string|null
     */
    private $refundReasonWapImg;

    /**
     * 退款用户说明
     *
     * @Column(name="refund_reason_wap_explain", prop="refundReasonWapExplain")
     *
     * @var string|null
     */
    private $refundReasonWapExplain;

    /**
     * 退款时间
     *
     * @Column(name="refund_reason_time", prop="refundReasonTime")
     *
     * @var int|null
     */
    private $refundReasonTime;

    /**
     * 前台退款原因
     *
     * @Column(name="refund_reason_wap", prop="refundReasonWap")
     *
     * @var string|null
     */
    private $refundReasonWap;

    /**
     * 不退款的理由
     *
     * @Column(name="refund_reason", prop="refundReason")
     *
     * @var string|null
     */
    private $refundReason;

    /**
     * 退款金额
     *
     * @Column(name="refund_price", prop="refundPrice")
     *
     * @var float
     */
    private $refundPrice;

    /**
     * 快递名称/送货人姓名
     *
     * @Column(name="delivery_name", prop="deliveryName")
     *
     * @var string|null
     */
    private $deliveryName;

    /**
     * 发货类型
     *
     * @Column(name="delivery_type", prop="deliveryType")
     *
     * @var string|null
     */
    private $deliveryType;

    /**
     * 快递单号/手机号
     *
     * @Column(name="delivery_id", prop="deliveryId")
     *
     * @var string|null
     */
    private $deliveryId;

    /**
     * 消费赚取积分
     *
     * @Column(name="gain_integral", prop="gainIntegral")
     *
     * @var float
     */
    private $gainIntegral;

    /**
     * 使用积分
     *
     * @Column(name="use_integral", prop="useIntegral")
     *
     * @var float
     */
    private $useIntegral;

    /**
     * 给用户退了多少积分
     *
     * @Column(name="back_integral", prop="backIntegral")
     *
     * @var float|null
     */
    private $backIntegral;

    /**
     * 备注
     *
     * @Column()
     *
     * @var string
     */
    private $mark;

    /**
     * 是否删除
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;

    /**
     * 唯一id(md5加密)类似id
     *
     * @Column()
     *
     * @var string
     */
    private $unique;

    /**
     * 管理员备注
     *
     * @Column()
     *
     * @var string|null
     */
    private $remark;

    /**
     * 商户ID
     *
     * @Column(name="mer_id", prop="merId")
     *
     * @var int
     */
    private $merId;

    /**
     * 
     *
     * @Column(name="is_mer_check", prop="isMerCheck")
     *
     * @var int
     */
    private $isMerCheck;

    /**
     * 拼团产品id0一般产品
     *
     * @Column(name="combination_id", prop="combinationId")
     *
     * @var int|null
     */
    private $combinationId;

    /**
     * 拼团id 0没有拼团
     *
     * @Column(name="pink_id", prop="pinkId")
     *
     * @var int
     */
    private $pinkId;

    /**
     * 成本价
     *
     * @Column()
     *
     * @var float
     */
    private $cost;

    /**
     * 秒杀产品ID
     *
     * @Column(name="seckill_id", prop="seckillId")
     *
     * @var int
     */
    private $seckillId;

    /**
     * 砍价id
     *
     * @Column(name="bargain_id", prop="bargainId")
     *
     * @var int|null
     */
    private $bargainId;

    /**
     * 核销码
     *
     * @Column(name="verify_code", prop="verifyCode")
     *
     * @var string
     */
    private $verifyCode;

    /**
     * 门店id
     *
     * @Column(name="store_id", prop="storeId")
     *
     * @var int
     */
    private $storeId;

    /**
     * 配送方式 1=快递 ，2=门店自提
     *
     * @Column(name="shipping_type", prop="shippingType")
     *
     * @var int
     */
    private $shippingType;

    /**
     * 支付渠道(0微信公众号1微信小程序)
     *
     * @Column(name="is_channel", prop="isChannel")
     *
     * @var int|null
     */
    private $isChannel;

    /**
     * 消息提醒
     *
     * @Column(name="is_remind", prop="isRemind")
     *
     * @var int|null
     */
    private $isRemind;

    /**
     * 后台是否删除
     *
     * @Column(name="is_system_del", prop="isSystemDel")
     *
     * @var int|null
     */
    private $isSystemDel;


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
     * @param string $orderId
     *
     * @return self
     */
    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

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
     * @param string $userPhone
     *
     * @return self
     */
    public function setUserPhone(string $userPhone): self
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * @param string $userAddress
     *
     * @return self
     */
    public function setUserAddress(string $userAddress): self
    {
        $this->userAddress = $userAddress;

        return $this;
    }

    /**
     * @param string $cartId
     *
     * @return self
     */
    public function setCartId(string $cartId): self
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * @param float $freightPrice
     *
     * @return self
     */
    public function setFreightPrice(float $freightPrice): self
    {
        $this->freightPrice = $freightPrice;

        return $this;
    }

    /**
     * @param int $totalNum
     *
     * @return self
     */
    public function setTotalNum(int $totalNum): self
    {
        $this->totalNum = $totalNum;

        return $this;
    }

    /**
     * @param float $totalPrice
     *
     * @return self
     */
    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @param float $totalPostage
     *
     * @return self
     */
    public function setTotalPostage(float $totalPostage): self
    {
        $this->totalPostage = $totalPostage;

        return $this;
    }

    /**
     * @param float $payPrice
     *
     * @return self
     */
    public function setPayPrice(float $payPrice): self
    {
        $this->payPrice = $payPrice;

        return $this;
    }

    /**
     * @param float $payPostage
     *
     * @return self
     */
    public function setPayPostage(float $payPostage): self
    {
        $this->payPostage = $payPostage;

        return $this;
    }

    /**
     * @param float $deductionPrice
     *
     * @return self
     */
    public function setDeductionPrice(float $deductionPrice): self
    {
        $this->deductionPrice = $deductionPrice;

        return $this;
    }

    /**
     * @param int $couponId
     *
     * @return self
     */
    public function setCouponId(int $couponId): self
    {
        $this->couponId = $couponId;

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
     * @param int $paid
     *
     * @return self
     */
    public function setPaid(int $paid): self
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
     * @param string $payType
     *
     * @return self
     */
    public function setPayType(string $payType): self
    {
        $this->payType = $payType;

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
     * @param int $refundStatus
     *
     * @return self
     */
    public function setRefundStatus(int $refundStatus): self
    {
        $this->refundStatus = $refundStatus;

        return $this;
    }

    /**
     * @param string|null $refundReasonWapImg
     *
     * @return self
     */
    public function setRefundReasonWapImg(?string $refundReasonWapImg): self
    {
        $this->refundReasonWapImg = $refundReasonWapImg;

        return $this;
    }

    /**
     * @param string|null $refundReasonWapExplain
     *
     * @return self
     */
    public function setRefundReasonWapExplain(?string $refundReasonWapExplain): self
    {
        $this->refundReasonWapExplain = $refundReasonWapExplain;

        return $this;
    }

    /**
     * @param int|null $refundReasonTime
     *
     * @return self
     */
    public function setRefundReasonTime(?int $refundReasonTime): self
    {
        $this->refundReasonTime = $refundReasonTime;

        return $this;
    }

    /**
     * @param string|null $refundReasonWap
     *
     * @return self
     */
    public function setRefundReasonWap(?string $refundReasonWap): self
    {
        $this->refundReasonWap = $refundReasonWap;

        return $this;
    }

    /**
     * @param string|null $refundReason
     *
     * @return self
     */
    public function setRefundReason(?string $refundReason): self
    {
        $this->refundReason = $refundReason;

        return $this;
    }

    /**
     * @param float $refundPrice
     *
     * @return self
     */
    public function setRefundPrice(float $refundPrice): self
    {
        $this->refundPrice = $refundPrice;

        return $this;
    }

    /**
     * @param string|null $deliveryName
     *
     * @return self
     */
    public function setDeliveryName(?string $deliveryName): self
    {
        $this->deliveryName = $deliveryName;

        return $this;
    }

    /**
     * @param string|null $deliveryType
     *
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    /**
     * @param string|null $deliveryId
     *
     * @return self
     */
    public function setDeliveryId(?string $deliveryId): self
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @param float $gainIntegral
     *
     * @return self
     */
    public function setGainIntegral(float $gainIntegral): self
    {
        $this->gainIntegral = $gainIntegral;

        return $this;
    }

    /**
     * @param float $useIntegral
     *
     * @return self
     */
    public function setUseIntegral(float $useIntegral): self
    {
        $this->useIntegral = $useIntegral;

        return $this;
    }

    /**
     * @param float|null $backIntegral
     *
     * @return self
     */
    public function setBackIntegral(?float $backIntegral): self
    {
        $this->backIntegral = $backIntegral;

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
     * @param string $unique
     *
     * @return self
     */
    public function setUnique(string $unique): self
    {
        $this->unique = $unique;

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
     * @param int $isMerCheck
     *
     * @return self
     */
    public function setIsMerCheck(int $isMerCheck): self
    {
        $this->isMerCheck = $isMerCheck;

        return $this;
    }

    /**
     * @param int|null $combinationId
     *
     * @return self
     */
    public function setCombinationId(?int $combinationId): self
    {
        $this->combinationId = $combinationId;

        return $this;
    }

    /**
     * @param int $pinkId
     *
     * @return self
     */
    public function setPinkId(int $pinkId): self
    {
        $this->pinkId = $pinkId;

        return $this;
    }

    /**
     * @param float $cost
     *
     * @return self
     */
    public function setCost(float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @param int $seckillId
     *
     * @return self
     */
    public function setSeckillId(int $seckillId): self
    {
        $this->seckillId = $seckillId;

        return $this;
    }

    /**
     * @param int|null $bargainId
     *
     * @return self
     */
    public function setBargainId(?int $bargainId): self
    {
        $this->bargainId = $bargainId;

        return $this;
    }

    /**
     * @param string $verifyCode
     *
     * @return self
     */
    public function setVerifyCode(string $verifyCode): self
    {
        $this->verifyCode = $verifyCode;

        return $this;
    }

    /**
     * @param int $storeId
     *
     * @return self
     */
    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * @param int $shippingType
     *
     * @return self
     */
    public function setShippingType(int $shippingType): self
    {
        $this->shippingType = $shippingType;

        return $this;
    }

    /**
     * @param int|null $isChannel
     *
     * @return self
     */
    public function setIsChannel(?int $isChannel): self
    {
        $this->isChannel = $isChannel;

        return $this;
    }

    /**
     * @param int|null $isRemind
     *
     * @return self
     */
    public function setIsRemind(?int $isRemind): self
    {
        $this->isRemind = $isRemind;

        return $this;
    }

    /**
     * @param int|null $isSystemDel
     *
     * @return self
     */
    public function setIsSystemDel(?int $isSystemDel): self
    {
        $this->isSystemDel = $isSystemDel;

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
    public function getOrderId(): ?string
    {
        return $this->orderId;
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
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @return string
     */
    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    /**
     * @return string
     */
    public function getUserAddress(): ?string
    {
        return $this->userAddress;
    }

    /**
     * @return string
     */
    public function getCartId(): ?string
    {
        return $this->cartId;
    }

    /**
     * @return float
     */
    public function getFreightPrice(): ?float
    {
        return $this->freightPrice;
    }

    /**
     * @return int
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }

    /**
     * @return float
     */
    public function getTotalPostage(): ?float
    {
        return $this->totalPostage;
    }

    /**
     * @return float
     */
    public function getPayPrice(): ?float
    {
        return $this->payPrice;
    }

    /**
     * @return float
     */
    public function getPayPostage(): ?float
    {
        return $this->payPostage;
    }

    /**
     * @return float
     */
    public function getDeductionPrice(): ?float
    {
        return $this->deductionPrice;
    }

    /**
     * @return int
     */
    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    /**
     * @return float
     */
    public function getCouponPrice(): ?float
    {
        return $this->couponPrice;
    }

    /**
     * @return int
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
     * @return string
     */
    public function getPayType(): ?string
    {
        return $this->payType;
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
     * @return int
     */
    public function getRefundStatus(): ?int
    {
        return $this->refundStatus;
    }

    /**
     * @return string|null
     */
    public function getRefundReasonWapImg(): ?string
    {
        return $this->refundReasonWapImg;
    }

    /**
     * @return string|null
     */
    public function getRefundReasonWapExplain(): ?string
    {
        return $this->refundReasonWapExplain;
    }

    /**
     * @return int|null
     */
    public function getRefundReasonTime(): ?int
    {
        return $this->refundReasonTime;
    }

    /**
     * @return string|null
     */
    public function getRefundReasonWap(): ?string
    {
        return $this->refundReasonWap;
    }

    /**
     * @return string|null
     */
    public function getRefundReason(): ?string
    {
        return $this->refundReason;
    }

    /**
     * @return float
     */
    public function getRefundPrice(): ?float
    {
        return $this->refundPrice;
    }

    /**
     * @return string|null
     */
    public function getDeliveryName(): ?string
    {
        return $this->deliveryName;
    }

    /**
     * @return string|null
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @return string|null
     */
    public function getDeliveryId(): ?string
    {
        return $this->deliveryId;
    }

    /**
     * @return float
     */
    public function getGainIntegral(): ?float
    {
        return $this->gainIntegral;
    }

    /**
     * @return float
     */
    public function getUseIntegral(): ?float
    {
        return $this->useIntegral;
    }

    /**
     * @return float|null
     */
    public function getBackIntegral(): ?float
    {
        return $this->backIntegral;
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
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

    /**
     * @return string
     */
    public function getUnique(): ?string
    {
        return $this->unique;
    }

    /**
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
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
    public function getIsMerCheck(): ?int
    {
        return $this->isMerCheck;
    }

    /**
     * @return int|null
     */
    public function getCombinationId(): ?int
    {
        return $this->combinationId;
    }

    /**
     * @return int
     */
    public function getPinkId(): ?int
    {
        return $this->pinkId;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @return int
     */
    public function getSeckillId(): ?int
    {
        return $this->seckillId;
    }

    /**
     * @return int|null
     */
    public function getBargainId(): ?int
    {
        return $this->bargainId;
    }

    /**
     * @return string
     */
    public function getVerifyCode(): ?string
    {
        return $this->verifyCode;
    }

    /**
     * @return int
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
     * @return int
     */
    public function getShippingType(): ?int
    {
        return $this->shippingType;
    }

    /**
     * @return int|null
     */
    public function getIsChannel(): ?int
    {
        return $this->isChannel;
    }

    /**
     * @return int|null
     */
    public function getIsRemind(): ?int
    {
        return $this->isRemind;
    }

    /**
     * @return int|null
     */
    public function getIsSystemDel(): ?int
    {
        return $this->isSystemDel;
    }

}
