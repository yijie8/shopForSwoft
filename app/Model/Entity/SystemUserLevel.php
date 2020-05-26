<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 设置用户等级表
 * Class SystemUserLevel
 *
 * @since 2.0
 *
 * @Entity(table="system_user_level")
 */
class SystemUserLevel extends Model
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
     * 商户id
     *
     * @Column(name="mer_id", prop="merId")
     *
     * @var int
     */
    private $merId;

    /**
     * 会员名称
     *
     * @Column()
     *
     * @var string
     */
    private $name;

    /**
     * 购买金额
     *
     * @Column()
     *
     * @var float
     */
    private $money;

    /**
     * 有效时间
     *
     * @Column(name="valid_date", prop="validDate")
     *
     * @var int
     */
    private $validDate;

    /**
     * 是否为永久会员
     *
     * @Column(name="is_forever", prop="isForever")
     *
     * @var int
     */
    private $isForever;

    /**
     * 是否购买,1=购买,0=不购买
     *
     * @Column(name="is_pay", prop="isPay")
     *
     * @var int
     */
    private $isPay;

    /**
     * 是否显示 1=显示,0=隐藏
     *
     * @Column(name="is_show", prop="isShow")
     *
     * @var int
     */
    private $isShow;

    /**
     * 会员等级
     *
     * @Column()
     *
     * @var int
     */
    private $grade;

    /**
     * 享受折扣
     *
     * @Column()
     *
     * @var float
     */
    private $discount;

    /**
     * 会员卡背景
     *
     * @Column()
     *
     * @var string
     */
    private $image;

    /**
     * 会员图标
     *
     * @Column()
     *
     * @var string
     */
    private $icon;

    /**
     * 说明
     *
     * @Column()
     *
     * @var string
     */
    private $explain;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 是否删除.1=删除,0=未删除
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
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param float $money
     *
     * @return self
     */
    public function setMoney(float $money): self
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @param int $validDate
     *
     * @return self
     */
    public function setValidDate(int $validDate): self
    {
        $this->validDate = $validDate;

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
     * @param int $isPay
     *
     * @return self
     */
    public function setIsPay(int $isPay): self
    {
        $this->isPay = $isPay;

        return $this;
    }

    /**
     * @param int $isShow
     *
     * @return self
     */
    public function setIsShow(int $isShow): self
    {
        $this->isShow = $isShow;

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
     * @param float $discount
     *
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @param string $explain
     *
     * @return self
     */
    public function setExplain(string $explain): self
    {
        $this->explain = $explain;

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
     * @return int
     */
    public function getMerId(): ?int
    {
        return $this->merId;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getMoney(): ?float
    {
        return $this->money;
    }

    /**
     * @return int
     */
    public function getValidDate(): ?int
    {
        return $this->validDate;
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
    public function getIsPay(): ?int
    {
        return $this->isPay;
    }

    /**
     * @return int
     */
    public function getIsShow(): ?int
    {
        return $this->isShow;
    }

    /**
     * @return int
     */
    public function getGrade(): ?int
    {
        return $this->grade;
    }

    /**
     * @return float
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @return string
     */
    public function getExplain(): ?string
    {
        return $this->explain;
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
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

}
