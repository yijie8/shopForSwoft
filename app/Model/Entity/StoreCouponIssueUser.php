<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 优惠券前台用户领取记录表
 * Class StoreCouponIssueUser
 *
 * @since 2.0
 *
 * @Entity(table="store_coupon_issue_user")
 */
class StoreCouponIssueUser extends Model
{
    /**
     * 领取优惠券用户ID
     *
     * @Column()
     *
     * @var int|null
     */
    private $uid;

    /**
     * 优惠券前台领取ID
     *
     * @Column(name="issue_coupon_id", prop="issueCouponId")
     *
     * @var int|null
     */
    private $issueCouponId;

    /**
     * 领取时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int|null
     */
    private $addTime;


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
     * @param int|null $issueCouponId
     *
     * @return self
     */
    public function setIssueCouponId(?int $issueCouponId): self
    {
        $this->issueCouponId = $issueCouponId;

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
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @return int|null
     */
    public function getIssueCouponId(): ?int
    {
        return $this->issueCouponId;
    }

    /**
     * @return int|null
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
