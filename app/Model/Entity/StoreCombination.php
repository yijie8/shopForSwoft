<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 拼团产品表
 * Class StoreCombination
 *
 * @since 2.0
 *
 * @Entity(table="store_combination")
 */
class StoreCombination extends Model
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
     * 商品id
     *
     * @Column(name="product_id", prop="productId")
     *
     * @var int
     */
    private $productId;

    /**
     * 商户id
     *
     * @Column(name="mer_id", prop="merId")
     *
     * @var int|null
     */
    private $merId;

    /**
     * 推荐图
     *
     * @Column()
     *
     * @var string
     */
    private $image;

    /**
     * 轮播图
     *
     * @Column()
     *
     * @var string
     */
    private $images;

    /**
     * 活动标题
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 活动属性
     *
     * @Column()
     *
     * @var string|null
     */
    private $attr;

    /**
     * 参团人数
     *
     * @Column()
     *
     * @var int
     */
    private $people;

    /**
     * 简介
     *
     * @Column()
     *
     * @var string
     */
    private $info;

    /**
     * 价格
     *
     * @Column()
     *
     * @var float
     */
    private $price;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 销量
     *
     * @Column()
     *
     * @var int
     */
    private $sales;

    /**
     * 库存
     *
     * @Column()
     *
     * @var int
     */
    private $stock;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var string
     */
    private $addTime;

    /**
     * 推荐
     *
     * @Column(name="is_host", prop="isHost")
     *
     * @var int
     */
    private $isHost;

    /**
     * 产品状态
     *
     * @Column(name="is_show", prop="isShow")
     *
     * @var int
     */
    private $isShow;

    /**
     * 
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;

    /**
     * 
     *
     * @Column()
     *
     * @var int
     */
    private $combination;

    /**
     * 商户是否可用1可用0不可用
     *
     * @Column(name="mer_use", prop="merUse")
     *
     * @var int|null
     */
    private $merUse;

    /**
     * 是否包邮1是0否
     *
     * @Column(name="is_postage", prop="isPostage")
     *
     * @var int
     */
    private $isPostage;

    /**
     * 邮费
     *
     * @Column()
     *
     * @var float
     */
    private $postage;

    /**
     * 拼团内容
     *
     * @Column()
     *
     * @var string
     */
    private $description;

    /**
     * 拼团开始时间
     *
     * @Column(name="start_time", prop="startTime")
     *
     * @var int
     */
    private $startTime;

    /**
     * 拼团结束时间
     *
     * @Column(name="stop_time", prop="stopTime")
     *
     * @var int
     */
    private $stopTime;

    /**
     * 拼团订单有效时间
     *
     * @Column(name="effective_time", prop="effectiveTime")
     *
     * @var int
     */
    private $effectiveTime;

    /**
     * 拼图产品成本
     *
     * @Column()
     *
     * @var int
     */
    private $cost;

    /**
     * 浏览量
     *
     * @Column()
     *
     * @var int|null
     */
    private $browse;

    /**
     * 单位名
     *
     * @Column(name="unit_name", prop="unitName")
     *
     * @var string
     */
    private $unitName;


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
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param int|null $merId
     *
     * @return self
     */
    public function setMerId(?int $merId): self
    {
        $this->merId = $merId;

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
     * @param string $images
     *
     * @return self
     */
    public function setImages(string $images): self
    {
        $this->images = $images;

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
     * @param string|null $attr
     *
     * @return self
     */
    public function setAttr(?string $attr): self
    {
        $this->attr = $attr;

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
     * @param string $info
     *
     * @return self
     */
    public function setInfo(string $info): self
    {
        $this->info = $info;

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
     * @param int $sort
     *
     * @return self
     */
    public function setSort(int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param int $sales
     *
     * @return self
     */
    public function setSales(int $sales): self
    {
        $this->sales = $sales;

        return $this;
    }

    /**
     * @param int $stock
     *
     * @return self
     */
    public function setStock(int $stock): self
    {
        $this->stock = $stock;

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
     * @param int $isHost
     *
     * @return self
     */
    public function setIsHost(int $isHost): self
    {
        $this->isHost = $isHost;

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
     * @param int $combination
     *
     * @return self
     */
    public function setCombination(int $combination): self
    {
        $this->combination = $combination;

        return $this;
    }

    /**
     * @param int|null $merUse
     *
     * @return self
     */
    public function setMerUse(?int $merUse): self
    {
        $this->merUse = $merUse;

        return $this;
    }

    /**
     * @param int $isPostage
     *
     * @return self
     */
    public function setIsPostage(int $isPostage): self
    {
        $this->isPostage = $isPostage;

        return $this;
    }

    /**
     * @param float $postage
     *
     * @return self
     */
    public function setPostage(float $postage): self
    {
        $this->postage = $postage;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param int $startTime
     *
     * @return self
     */
    public function setStartTime(int $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @param int $stopTime
     *
     * @return self
     */
    public function setStopTime(int $stopTime): self
    {
        $this->stopTime = $stopTime;

        return $this;
    }

    /**
     * @param int $effectiveTime
     *
     * @return self
     */
    public function setEffectiveTime(int $effectiveTime): self
    {
        $this->effectiveTime = $effectiveTime;

        return $this;
    }

    /**
     * @param int $cost
     *
     * @return self
     */
    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @param int|null $browse
     *
     * @return self
     */
    public function setBrowse(?int $browse): self
    {
        $this->browse = $browse;

        return $this;
    }

    /**
     * @param string $unitName
     *
     * @return self
     */
    public function setUnitName(string $unitName): self
    {
        $this->unitName = $unitName;

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
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return int|null
     */
    public function getMerId(): ?int
    {
        return $this->merId;
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
    public function getImages(): ?string
    {
        return $this->images;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getAttr(): ?string
    {
        return $this->attr;
    }

    /**
     * @return int
     */
    public function getPeople(): ?int
    {
        return $this->people;
    }

    /**
     * @return string
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getSort(): ?int
    {
        return $this->sort;
    }

    /**
     * @return int
     */
    public function getSales(): ?int
    {
        return $this->sales;
    }

    /**
     * @return int
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @return string
     */
    public function getAddTime(): ?string
    {
        return $this->addTime;
    }

    /**
     * @return int
     */
    public function getIsHost(): ?int
    {
        return $this->isHost;
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

    /**
     * @return int
     */
    public function getCombination(): ?int
    {
        return $this->combination;
    }

    /**
     * @return int|null
     */
    public function getMerUse(): ?int
    {
        return $this->merUse;
    }

    /**
     * @return int
     */
    public function getIsPostage(): ?int
    {
        return $this->isPostage;
    }

    /**
     * @return float
     */
    public function getPostage(): ?float
    {
        return $this->postage;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * @return int
     */
    public function getStopTime(): ?int
    {
        return $this->stopTime;
    }

    /**
     * @return int
     */
    public function getEffectiveTime(): ?int
    {
        return $this->effectiveTime;
    }

    /**
     * @return int
     */
    public function getCost(): ?int
    {
        return $this->cost;
    }

    /**
     * @return int|null
     */
    public function getBrowse(): ?int
    {
        return $this->browse;
    }

    /**
     * @return string
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

}
