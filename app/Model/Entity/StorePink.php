<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 拼团表
 * Class StorePink
 *
 * @since 2.0
 *
 * @Entity(table="store_pink")
 */
class StorePink extends Model
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
     * 用户id
     *
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 订单id 生成
     *
     * @Column(name="order_id", prop="orderId")
     *
     * @var string
     */
    private $orderId;

    /**
     * 订单id  数据库
     *
     * @Column(name="order_id_key", prop="orderIdKey")
     *
     * @var int
     */
    private $orderIdKey;

    /**
     * 购买商品个数
     *
     * @Column(name="total_num", prop="totalNum")
     *
     * @var int
     */
    private $totalNum;

    /**
     * 购买总金额
     *
     * @Column(name="total_price", prop="totalPrice")
     *
     * @var float
     */
    private $totalPrice;

    /**
     * 拼团产品id
     *
     * @Column()
     *
     * @var int
     */
    private $cid;

    /**
     * 产品id
     *
     * @Column()
     *
     * @var int
     */
    private $pid;

    /**
     * 拼图总人数
     *
     * @Column()
     *
     * @var int
     */
    private $people;

    /**
     * 拼团产品单价
     *
     * @Column()
     *
     * @var float
     */
    private $price;

    /**
     * 开始时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var string
     */
    private $addTime;

    /**
     * 
     *
     * @Column(name="stop_time", prop="stopTime")
     *
     * @var string
     */
    private $stopTime;

    /**
     * 团长id 0为团长
     *
     * @Column(name="k_id", prop="kId")
     *
     * @var int
     */
    private $kId;

    /**
     * 是否发送模板消息0未发送1已发送
     *
     * @Column(name="is_tpl", prop="isTpl")
     *
     * @var int
     */
    private $isTpl;

    /**
     * 是否退款 0未退款 1已退款
     *
     * @Column(name="is_refund", prop="isRefund")
     *
     * @var int
     */
    private $isRefund;

    /**
     * 状态1进行中2已完成3未完成
     *
     * @Column()
     *
     * @var int
     */
    private $status;


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
     * @param int $orderIdKey
     *
     * @return self
     */
    public function setOrderIdKey(int $orderIdKey): self
    {
        $this->orderIdKey = $orderIdKey;

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
     * @param int $pid
     *
     * @return self
     */
    public function setPid(int $pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * @param int $people
     *
     * @return self
     */
    public function setPeople(int $people): self
    {
        $this->people = $people;

        return $this;
    }

    /**
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param string $addTime
     *
     * @return self
     */
    public function setAddTime(string $addTime): self
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * @param string $stopTime
     *
     * @return self
     */
    public function setStopTime(string $stopTime): self
    {
        $this->stopTime = $stopTime;

        return $this;
    }

    /**
     * @param int $kId
     *
     * @return self
     */
    public function setKId(int $kId): self
    {
        $this->kId = $kId;

        return $this;
    }

    /**
     * @param int $isTpl
     *
     * @return self
     */
    public function setIsTpl(int $isTpl): self
    {
        $this->isTpl = $isTpl;

        return $this;
    }

    /**
     * @param int $isRefund
     *
     * @return self
     */
    public function setIsRefund(int $isRefund): self
    {
        $this->isRefund = $isRefund;

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
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @return int
     */
    public function getOrderIdKey(): ?int
    {
        return $this->orderIdKey;
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
     * @return int
     */
    public function getCid(): ?int
    {
        return $this->cid;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * @return int
     */
    public function getPeople(): ?int
    {
        return $this->people;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getAddTime(): ?string
    {
        return $this->addTime;
    }

    /**
     * @return string
     */
    public function getStopTime(): ?string
    {
        return $this->stopTime;
    }

    /**
     * @return int
     */
    public function getKId(): ?int
    {
        return $this->kId;
    }

    /**
     * @return int
     */
    public function getIsTpl(): ?int
    {
        return $this->isTpl;
    }

    /**
     * @return int
     */
    public function getIsRefund(): ?int
    {
        return $this->isRefund;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

}
