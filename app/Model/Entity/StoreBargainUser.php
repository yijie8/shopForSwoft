<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户参与砍价表
 * Class StoreBargainUser
 *
 * @since 2.0
 *
 * @Entity(table="store_bargain_user")
 */
class StoreBargainUser extends Model
{
    /**
     * 用户参与砍价表ID
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
     * @var int|null
     */
    private $uid;

    /**
     * 砍价产品id
     *
     * @Column(name="bargain_id", prop="bargainId")
     *
     * @var int|null
     */
    private $bargainId;

    /**
     * 砍价的最低价
     *
     * @Column(name="bargain_price_min", prop="bargainPriceMin")
     *
     * @var float|null
     */
    private $bargainPriceMin;

    /**
     * 砍价金额
     *
     * @Column(name="bargain_price", prop="bargainPrice")
     *
     * @var float|null
     */
    private $bargainPrice;

    /**
     * 砍掉的价格
     *
     * @Column()
     *
     * @var float|null
     */
    private $price;

    /**
     * 状态 1参与中 2 活动结束参与失败 3活动结束参与成功
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 参与时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int|null
     */
    private $addTime;

    /**
     * 是否取消
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
     * @param float|null $bargainPriceMin
     *
     * @return self
     */
    public function setBargainPriceMin(?float $bargainPriceMin): self
    {
        $this->bargainPriceMin = $bargainPriceMin;

        return $this;
    }

    /**
     * @param float|null $bargainPrice
     *
     * @return self
     */
    public function setBargainPrice(?float $bargainPrice): self
    {
        $this->bargainPrice = $bargainPrice;

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
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @return int|null
     */
    public function getBargainId(): ?int
    {
        return $this->bargainId;
    }

    /**
     * @return float|null
     */
    public function getBargainPriceMin(): ?float
    {
        return $this->bargainPriceMin;
    }

    /**
     * @return float|null
     */
    public function getBargainPrice(): ?float
    {
        return $this->bargainPrice;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
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
