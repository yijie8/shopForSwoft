<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品秒杀产品表
 * Class StoreSeckill
 *
 * @since 2.0
 *
 * @Entity(table="store_seckill")
 */
class StoreSeckill extends Model
{
    /**
     * 商品秒杀产品表id
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
     * 成本
     *
     * @Column()
     *
     * @var float
     */
    private $cost;

    /**
     * 原价
     *
     * @Column(name="ot_price", prop="otPrice")
     *
     * @var float
     */
    private $otPrice;

    /**
     * 返多少积分
     *
     * @Column(name="give_integral", prop="giveIntegral")
     *
     * @var float
     */
    private $giveIntegral;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 库存
     *
     * @Column()
     *
     * @var int
     */
    private $stock;

    /**
     * 销量
     *
     * @Column()
     *
     * @var int
     */
    private $sales;

    /**
     * 单位名
     *
     * @Column(name="unit_name", prop="unitName")
     *
     * @var string
     */
    private $unitName;

    /**
     * 邮费
     *
     * @Column()
     *
     * @var float
     */
    private $postage;

    /**
     * 内容
     *
     * @Column()
     *
     * @var string|null
     */
    private $description;

    /**
     * 开始时间
     *
     * @Column(name="start_time", prop="startTime")
     *
     * @var string
     */
    private $startTime;

    /**
     * 结束时间
     *
     * @Column(name="stop_time", prop="stopTime")
     *
     * @var string
     */
    private $stopTime;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var string
     */
    private $addTime;

    /**
     * 产品状态
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 是否包邮
     *
     * @Column(name="is_postage", prop="isPostage")
     *
     * @var int
     */
    private $isPostage;

    /**
     * 热门推荐
     *
     * @Column(name="is_hot", prop="isHot")
     *
     * @var int
     */
    private $isHot;

    /**
     * 删除 0未删除1已删除
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;

    /**
     * 最多秒杀几个
     *
     * @Column()
     *
     * @var int
     */
    private $num;

    /**
     * 显示
     *
     * @Column(name="is_show", prop="isShow")
     *
     * @var int
     */
    private $isShow;


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
     * @param float $cost
     *
     * @return self
     */
    public function setCost(float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * @param float $otPrice
     *
     * @return self
     */
    public function setOtPrice(float $otPrice): self
    {
        $this->otPrice = $otPrice;

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
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @param string $stopTime
     *
     * @return self
     */
    public function setStopTime(string $stopTime): self
    {
        $this->stopTime = $stopTime;

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
     * @param int $num
     *
     * @return self
     */
    public function setNum(int $num): self
    {
        $this->num = $num;

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
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @return float
     */
    public function getOtPrice(): ?float
    {
        return $this->otPrice;
    }

    /**
     * @return float
     */
    public function getGiveIntegral(): ?float
    {
        return $this->giveIntegral;
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
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @return int
     */
    public function getSales(): ?int
    {
        return $this->sales;
    }

    /**
     * @return string
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * @return float
     */
    public function getPostage(): ?float
    {
        return $this->postage;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @return string
     */
    public function getStopTime(): ?string
    {
        return $this->stopTime;
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
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getIsPostage(): ?int
    {
        return $this->isPostage;
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
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @return int
     */
    public function getIsShow(): ?int
    {
        return $this->isShow;
    }

}
