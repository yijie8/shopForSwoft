<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户账单表
 * Class UserBill
 *
 * @since 2.0
 *
 * @Entity(table="user_bill")
 */
class UserBill extends Model
{
    /**
     * 用户账单id
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
     * 关联id
     *
     * @Column(name="link_id", prop="linkId")
     *
     * @var string
     */
    private $linkId;

    /**
     * 0 = 支出 1 = 获得
     *
     * @Column()
     *
     * @var int
     */
    private $pm;

    /**
     * 账单标题
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 明细种类
     *
     * @Column()
     *
     * @var string
     */
    private $category;

    /**
     * 明细类型
     *
     * @Column()
     *
     * @var string
     */
    private $type;

    /**
     * 明细数字
     *
     * @Column()
     *
     * @var float
     */
    private $number;

    /**
     * 剩余
     *
     * @Column()
     *
     * @var float
     */
    private $balance;

    /**
     * 备注
     *
     * @Column()
     *
     * @var string
     */
    private $mark;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 0 = 带确定 1 = 有效 -1 = 无效
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
     * @param string $linkId
     *
     * @return self
     */
    public function setLinkId(string $linkId): self
    {
        $this->linkId = $linkId;

        return $this;
    }

    /**
     * @param int $pm
     *
     * @return self
     */
    public function setPm(int $pm): self
    {
        $this->pm = $pm;

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
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param float $number
     *
     * @return self
     */
    public function setNumber(float $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @param float $balance
     *
     * @return self
     */
    public function setBalance(float $balance): self
    {
        $this->balance = $balance;

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
    public function getLinkId(): ?string
    {
        return $this->linkId;
    }

    /**
     * @return int
     */
    public function getPm(): ?int
    {
        return $this->pm;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return float
     */
    public function getNumber(): ?float
    {
        return $this->number;
    }

    /**
     * @return float
     */
    public function getBalance(): ?float
    {
        return $this->balance;
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

}
