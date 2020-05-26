<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 订单操作记录表
 * Class StoreOrderStatus
 *
 * @since 2.0
 *
 * @Entity(table="store_order_status")
 */
class StoreOrderStatus extends Model
{
    /**
     * 订单id
     *
     * @Column()
     *
     * @var int
     */
    private $oid;

    /**
     * 操作类型
     *
     * @Column(name="change_type", prop="changeType")
     *
     * @var string
     */
    private $changeType;

    /**
     * 操作备注
     *
     * @Column(name="change_message", prop="changeMessage")
     *
     * @var string
     */
    private $changeMessage;

    /**
     * 操作时间
     *
     * @Column(name="change_time", prop="changeTime")
     *
     * @var int
     */
    private $changeTime;


    /**
     * @param int $oid
     *
     * @return self
     */
    public function setOid(int $oid): self
    {
        $this->oid = $oid;

        return $this;
    }

    /**
     * @param string $changeType
     *
     * @return self
     */
    public function setChangeType(string $changeType): self
    {
        $this->changeType = $changeType;

        return $this;
    }

    /**
     * @param string $changeMessage
     *
     * @return self
     */
    public function setChangeMessage(string $changeMessage): self
    {
        $this->changeMessage = $changeMessage;

        return $this;
    }

    /**
     * @param int $changeTime
     *
     * @return self
     */
    public function setChangeTime(int $changeTime): self
    {
        $this->changeTime = $changeTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getOid(): ?int
    {
        return $this->oid;
    }

    /**
     * @return string
     */
    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    /**
     * @return string
     */
    public function getChangeMessage(): ?string
    {
        return $this->changeMessage;
    }

    /**
     * @return int
     */
    public function getChangeTime(): ?int
    {
        return $this->changeTime;
    }

}
