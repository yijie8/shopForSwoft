<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 砍价表
 * Class StoreBargain
 *
 * @since 2.0
 *
 * @Entity(table="store_bargain")
 */
class StoreBargain extends Model
{
    /**
     * 砍价产品ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 关联产品ID
     *
     * @Column(name="product_id", prop="productId")
     *
     * @var int
     */
    private $productId;

    /**
     * 砍价活动名称
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 砍价活动图片
     *
     * @Column()
     *
     * @var string
     */
    private $image;

    /**
     * 单位名称
     *
     * @Column(name="unit_name", prop="unitName")
     *
     * @var string|null
     */
    private $unitName;

    /**
     * 库存
     *
     * @Column()
     *
     * @var int|null
     */
    private $stock;

    /**
     * 销量
     *
     * @Column()
     *
     * @var int|null
     */
    private $sales;

    /**
     * 砍价产品轮播图
     *
     * @Column()
     *
     * @var string
     */
    private $images;

    /**
     * 砍价开启时间
     *
     * @Column(name="start_time", prop="startTime")
     *
     * @var int
     */
    private $startTime;

    /**
     * 砍价结束时间
     *
     * @Column(name="stop_time", prop="stopTime")
     *
     * @var int
     */
    private $stopTime;

    /**
     * 砍价产品名称
     *
     * @Column(name="store_name", prop="storeName")
     *
     * @var string|null
     */
    private $storeName;

    /**
     * 砍价金额
     *
     * @Column()
     *
     * @var float|null
     */
    private $price;

    /**
     * 砍价商品最低价
     *
     * @Column(name="min_price", prop="minPrice")
     *
     * @var float|null
     */
    private $minPrice;

    /**
     * 每次购买的砍价产品数量
     *
     * @Column()
     *
     * @var int|null
     */
    private $num;

    /**
     * 用户每次砍价的最大金额
     *
     * @Column(name="bargain_max_price", prop="bargainMaxPrice")
     *
     * @var float|null
     */
    private $bargainMaxPrice;

    /**
     * 用户每次砍价的最小金额
     *
     * @Column(name="bargain_min_price", prop="bargainMinPrice")
     *
     * @var float|null
     */
    private $bargainMinPrice;

    /**
     * 用户每次砍价的次数
     *
     * @Column(name="bargain_num", prop="bargainNum")
     *
     * @var int
     */
    private $bargainNum;

    /**
     * 砍价状态 0(到砍价时间不自动开启)  1(到砍价时间自动开启时间)
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 砍价详情
     *
     * @Column()
     *
     * @var string|null
     */
    private $description;

    /**
     * 反多少积分
     *
     * @Column(name="give_integral", prop="giveIntegral")
     *
     * @var float
     */
    private $giveIntegral;

    /**
     * 砍价活动简介
     *
     * @Column()
     *
     * @var string|null
     */
    private $info;

    /**
     * 成本价
     *
     * @Column()
     *
     * @var float|null
     */
    private $cost;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 是否推荐0不推荐1推荐
     *
     * @Column(name="is_hot", prop="isHot")
     *
     * @var int
     */
    private $isHot;

    /**
     * 是否删除 0未删除 1删除
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
     * @var int|null
     */
    private $addTime;

    /**
     * 是否包邮 0不包邮 1包邮
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
     * @var float|null
     */
    private $postage;

    /**
     * 砍价规则
     *
     * @Column()
     *
     * @var string|null
     */
    private $rule;

    /**
     * 砍价产品浏览量
     *
     * @Column()
     *
     * @var int|null
     */
    private $look;

    /**
     * 砍价产品分享量
     *
     * @Column()
     *
     * @var int|null
     */
    private $share;


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
     * @param string|null $unitName
     *
     * @return self
     */
    public function setUnitName(?string $unitName): self
    {
        $this->unitName = $unitName;

        return $this;
    }

    /**
     * @param int|null $stock
     *
     * @return self
     */
    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * @param int|null $sales
     *
     * @return self
     */
    public function setSales(?int $sales): self
    {
        $this->sales = $sales;

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
     * @param string|null $storeName
     *
     * @return self
     */
    public function setStoreName(?string $storeName): self
    {
        $this->storeName = $storeName;

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
     * @param float|null $minPrice
     *
     * @return self
     */
    public function setMinPrice(?float $minPrice): self
    {
        $this->minPrice = $minPrice;

        return $this;
    }

    /**
     * @param int|null $num
     *
     * @return self
     */
    public function setNum(?int $num): self
    {
        $this->num = $num;

        return $this;
    }

    /**
     * @param float|null $bargainMaxPrice
     *
     * @return self
     */
    public function setBargainMaxPrice(?float $bargainMaxPrice): self
    {
        $this->bargainMaxPrice = $bargainMaxPrice;

        return $this;
    }

    /**
     * @param float|null $bargainMinPrice
     *
     * @return self
     */
    public function setBargainMinPrice(?float $bargainMinPrice): self
    {
        $this->bargainMinPrice = $bargainMinPrice;

        return $this;
    }

    /**
     * @param int $bargainNum
     *
     * @return self
     */
    public function setBargainNum(int $bargainNum): self
    {
        $this->bargainNum = $bargainNum;

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
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param float $giveIntegral
     *
     * @return self
     */
    public function setGiveIntegral(float $giveIntegral): self
    {
        $this->giveIntegral = $giveIntegral;

        return $this;
    }

    /**
     * @param string|null $info
     *
     * @return self
     */
    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @param float|null $cost
     *
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;

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
     * @param int $isHot
     *
     * @return self
     */
    public function setIsHot(int $isHot): self
    {
        $this->isHot = $isHot;

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
     * @param float|null $postage
     *
     * @return self
     */
    public function setPostage(?float $postage): self
    {
        $this->postage = $postage;

        return $this;
    }

    /**
     * @param string|null $rule
     *
     * @return self
     */
    public function setRule(?string $rule): self
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * @param int|null $look
     *
     * @return self
     */
    public function setLook(?int $look): self
    {
        $this->look = $look;

        return $this;
    }

    /**
     * @param int|null $share
     *
     * @return self
     */
    public function setShare(?int $share): self
    {
        $this->share = $share;

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
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * @return int|null
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @return int|null
     */
    public function getSales(): ?int
    {
        return $this->sales;
    }

    /**
     * @return string
     */
    public function getImages(): ?string
    {
        return $this->images;
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
     * @return string|null
     */
    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return float|null
     */
    public function getMinPrice(): ?float
    {
        return $this->minPrice;
    }

    /**
     * @return int|null
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @return float|null
     */
    public function getBargainMaxPrice(): ?float
    {
        return $this->bargainMaxPrice;
    }

    /**
     * @return float|null
     */
    public function getBargainMinPrice(): ?float
    {
        return $this->bargainMinPrice;
    }

    /**
     * @return int
     */
    public function getBargainNum(): ?int
    {
        return $this->bargainNum;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getGiveIntegral(): ?float
    {
        return $this->giveIntegral;
    }

    /**
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    /**
     * @return float|null
     */
    public function getCost(): ?float
    {
        return $this->cost;
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
    public function getIsHot(): ?int
    {
        return $this->isHot;
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

    /**
     * @return int
     */
    public function getIsPostage(): ?int
    {
        return $this->isPostage;
    }

    /**
     * @return float|null
     */
    public function getPostage(): ?float
    {
        return $this->postage;
    }

    /**
     * @return string|null
     */
    public function getRule(): ?string
    {
        return $this->rule;
    }

    /**
     * @return int|null
     */
    public function getLook(): ?int
    {
        return $this->look;
    }

    /**
     * @return int|null
     */
    public function getShare(): ?int
    {
        return $this->share;
    }

}
