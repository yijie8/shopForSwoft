<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 砍价用户帮助表
 * Class StoreBargainUserHelp
 *
 * @since 2.0
 *
 * @Entity(table="store_bargain_user_help")
 */
class StoreBargainUserHelp extends Model
{
    /**
     * 砍价用户帮助表ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 帮助的用户id
     *
     * @Column()
     *
     * @var int|null
     */
    private $uid;

    /**
     * 砍价产品ID
     *
     * @Column(name="bargain_id", prop="bargainId")
     *
     * @var int|null
     */
    private $bargainId;

    /**
     * 用户参与砍价表id
     *
     * @Column(name="bargain_user_id", prop="bargainUserId")
     *
     * @var int|null
     */
    private $bargainUserId;

    /**
     * 帮助砍价多少金额
     *
     * @Column()
     *
     * @var float|null
     */
    private $price;

    /**
     * 添加时间
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
     * @param int|null $bargainUserId
     *
     * @return self
     */
    public function setBargainUserId(?int $bargainUserId): self
    {
        $this->bargainUserId = $bargainUserId;

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
     * @return int|null
     */
    public function getBargainUserId(): ?int
    {
        return $this->bargainUserId;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return int|null
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
