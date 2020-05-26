<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户等级记录表
 * Class UserLevel
 *
 * @since 2.0
 *
 * @Entity(table="user_level")
 */
class UserLevel extends Model
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
     * 用户uid
     *
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 等级vip
     *
     * @Column(name="level_id", prop="levelId")
     *
     * @var int
     */
    private $levelId;

    /**
     * 会员等级
     *
     * @Column()
     *
     * @var int
     */
    private $grade;

    /**
     * 过期时间
     *
     * @Column(name="valid_time", prop="validTime")
     *
     * @var int
     */
    private $validTime;

    /**
     * 是否永久
     *
     * @Column(name="is_forever", prop="isForever")
     *
     * @var int
     */
    private $isForever;

    /**
     * 商户id
     *
     * @Column(name="mer_id", prop="merId")
     *
     * @var int
     */
    private $merId;

    /**
     * 0:禁止,1:正常
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 备注
     *
     * @Column()
     *
     * @var string
     */
    private $mark;

    /**
     * 是否已通知
     *
     * @Column()
     *
     * @var int
     */
    private $remind;

    /**
     * 是否删除,0=未删除,1=删除
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 享受折扣
     *
     * @Column()
     *
     * @var int
     */
    private $discount;


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
     * @param int $levelId
     *
     * @return self
     */
    public function setLevelId(int $levelId): self
    {
        $this->levelId = $levelId;

        return $this;
    }

    /**
     * @param int $grade
     *
     * @return self
     */
    public function setGrade(int $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * @param int $validTime
     *
     * @return self
     */
    public function setValidTime(int $validTime): self
    {
        $this->validTime = $validTime;

        return $this;
    }

    /**
     * @param int $isForever
     *
     * @return self
     */
    public function setIsForever(int $isForever): self
    {
        $this->isForever = $isForever;

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
     * @param int $remind
     *
     * @return self
     */
    public function setRemind(int $remind): self
    {
        $this->remind = $remind;

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
     * @param int $discount
     *
     * @return self
     */
    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;

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
     * @return int
     */
    public function getLevelId(): ?int
    {
        return $this->levelId;
    }

    /**
     * @return int
     */
    public function getGrade(): ?int
    {
        return $this->grade;
    }

    /**
     * @return int
     */
    public function getValidTime(): ?int
    {
        return $this->validTime;
    }

    /**
     * @return int
     */
    public function getIsForever(): ?int
    {
        return $this->isForever;
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
    public function getStatus(): ?int
    {
        return $this->status;
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
    public function getRemind(): ?int
    {
        return $this->remind;
    }

    /**
     * @return int
     */
    public function getIsDel(): ?int
    {
        return $this->isDel;
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
    public function getDiscount(): ?int
    {
        return $this->discount;
    }

}
