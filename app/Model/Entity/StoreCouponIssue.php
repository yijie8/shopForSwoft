<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 优惠券前台领取表
 * Class StoreCouponIssue
 *
 * @since 2.0
 *
 * @Entity(table="store_coupon_issue")
 */
class StoreCouponIssue extends Model
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
     * 优惠券ID
     *
     * @Column()
     *
     * @var int|null
     */
    private $cid;

    /**
     * 优惠券领取开启时间
     *
     * @Column(name="start_time", prop="startTime")
     *
     * @var int|null
     */
    private $startTime;

    /**
     * 优惠券领取结束时间
     *
     * @Column(name="end_time", prop="endTime")
     *
     * @var int|null
     */
    private $endTime;

    /**
     * 优惠券领取数量
     *
     * @Column(name="total_count", prop="totalCount")
     *
     * @var int|null
     */
    private $totalCount;

    /**
     * 优惠券剩余领取数量
     *
     * @Column(name="remain_count", prop="remainCount")
     *
     * @var int|null
     */
    private $remainCount;

    /**
     * 是否无限张数
     *
     * @Column(name="is_permanent", prop="isPermanent")
     *
     * @var int
     */
    private $isPermanent;

    /**
     * 1 正常 0 未开启 -1 已无效
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;

    /**
     * 优惠券添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int|null
     */
    private $addTime;


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
     * @param int|null $cid
     *
     * @return self
     */
    public function setCid(?int $cid): self
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * @param int|null $startTime
     *
     * @return self
     */
    public function setStartTime(?int $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @param int|null $endTime
     *
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @param int|null $totalCount
     *
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * @param int|null $remainCount
     *
     * @return self
     */
    public function setRemainCount(?int $remainCount): self
    {
        $this->remainCount = $remainCount;

        return $this;
    }

    /**
     * @param int $isPermanent
     *
     * @return self
     */
    public function setIsPermanent(int $isPermanent): self
    {
        $this->isPermanent = $isPermanent;

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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getCid(): ?int
    {
        return $this->cid;
    }

    /**
     * @return int|null
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * @return int|null
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @return int|null
     */
    public function getRemainCount(): ?int
    {
        return $this->remainCount;
    }

    /**
     * @return int
     */
    public function getIsPermanent(): ?int
    {
        return $this->isPermanent;
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
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

    /**
     * @return int|null
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
