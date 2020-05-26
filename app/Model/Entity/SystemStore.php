<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 门店自提
 * Class SystemStore
 *
 * @since 2.0
 *
 * @Entity(table="system_store")
 */
class SystemStore extends Model
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
     * 门店名称
     *
     * @Column()
     *
     * @var string
     */
    private $name;

    /**
     * 简介
     *
     * @Column()
     *
     * @var string
     */
    private $introduction;

    /**
     * 手机号码
     *
     * @Column()
     *
     * @var string
     */
    private $phone;

    /**
     * 省市区
     *
     * @Column()
     *
     * @var string
     */
    private $address;

    /**
     * 详细地址
     *
     * @Column(name="detailed_address", prop="detailedAddress")
     *
     * @var string
     */
    private $detailedAddress;

    /**
     * 门店logo
     *
     * @Column()
     *
     * @var string
     */
    private $image;

    /**
     * 纬度
     *
     * @Column()
     *
     * @var string
     */
    private $latitude;

    /**
     * 经度
     *
     * @Column()
     *
     * @var string
     */
    private $longitude;

    /**
     * 核销有效日期
     *
     * @Column(name="valid_time", prop="validTime")
     *
     * @var string
     */
    private $validTime;

    /**
     * 每日营业开关时间
     *
     * @Column(name="day_time", prop="dayTime")
     *
     * @var string
     */
    private $dayTime;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 是否显示
     *
     * @Column(name="is_show", prop="isShow")
     *
     * @var int
     */
    private $isShow;

    /**
     * 是否删除
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
     * @param string $introduction
     *
     * @return self
     */
    public function setIntroduction(string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    /**
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string $detailedAddress
     *
     * @return self
     */
    public function setDetailedAddress(string $detailedAddress): self
    {
        $this->detailedAddress = $detailedAddress;

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
     * @param string $latitude
     *
     * @return self
     */
    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @param string $validTime
     *
     * @return self
     */
    public function setValidTime(string $validTime): self
    {
        $this->validTime = $validTime;

        return $this;
    }

    /**
     * @param string $dayTime
     *
     * @return self
     */
    public function setDayTime(string $dayTime): self
    {
        $this->dayTime = $dayTime;

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
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getDetailedAddress(): ?string
    {
        return $this->detailedAddress;
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
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @return string
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @return string
     */
    public function getValidTime(): ?string
    {
        return $this->validTime;
    }

    /**
     * @return string
     */
    public function getDayTime(): ?string
    {
        return $this->dayTime;
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
    public function getIsShow(): ?int
    {
        return $this->isShow;
    }

    /**
     * @return int
     */
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

}
