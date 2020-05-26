<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品表
 * Class StoreProduct
 *
 * @since 2.0
 *
 * @Entity(table="store_product")
 */
class StoreProduct extends Model
{
    /**
     * 商品id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 商户Id(0为总后台管理员创建,不为0的时候是商户后台创建)
     *
     * @Column(name="mer_id", prop="merId")
     *
     * @var int
     */
    private $merId;

    /**
     * 商品图片
     *
     * @Column()
     *
     * @var string
     */
    private $image;

    /**
     * 轮播图
     *
     * @Column(name="slider_image", prop="sliderImage")
     *
     * @var string
     */
    private $sliderImage;

    /**
     * 商品名称
     *
     * @Column(name="store_name", prop="storeName")
     *
     * @var string
     */
    private $storeName;

    /**
     * 商品简介
     *
     * @Column(name="store_info", prop="storeInfo")
     *
     * @var string
     */
    private $storeInfo;

    /**
     * 关键字
     *
     * @Column()
     *
     * @var string
     */
    private $keyword;

    /**
     * 产品条码（一维码）
     *
     * @Column(name="bar_code", prop="barCode")
     *
     * @var string
     */
    private $barCode;

    /**
     * 分类id
     *
     * @Column(name="cate_id", prop="cateId")
     *
     * @var string
     */
    private $cateId;

    /**
     * 商品价格
     *
     * @Column()
     *
     * @var float
     */
    private $price;

    /**
     * 会员价格
     *
     * @Column(name="vip_price", prop="vipPrice")
     *
     * @var float
     */
    private $vipPrice;

    /**
     * 市场价
     *
     * @Column(name="ot_price", prop="otPrice")
     *
     * @var float
     */
    private $otPrice;

    /**
     * 邮费
     *
     * @Column()
     *
     * @var float
     */
    private $postage;

    /**
     * 单位名
     *
     * @Column(name="unit_name", prop="unitName")
     *
     * @var string
     */
    private $unitName;

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
     * 状态（0：未上架，1：上架）
     *
     * @Column(name="is_show", prop="isShow")
     *
     * @var int
     */
    private $isShow;

    /**
     * 是否热卖
     *
     * @Column(name="is_hot", prop="isHot")
     *
     * @var int
     */
    private $isHot;

    /**
     * 是否优惠
     *
     * @Column(name="is_benefit", prop="isBenefit")
     *
     * @var int
     */
    private $isBenefit;

    /**
     * 是否精品
     *
     * @Column(name="is_best", prop="isBest")
     *
     * @var int
     */
    private $isBest;

    /**
     * 是否新品
     *
     * @Column(name="is_new", prop="isNew")
     *
     * @var int
     */
    private $isNew;

    /**
     * 产品描述
     *
     * @Column()
     *
     * @var string
     */
    private $description;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 是否包邮
     *
     * @Column(name="is_postage", prop="isPostage")
     *
     * @var int
     */
    private $isPostage;

    /**
     * 是否删除
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;

    /**
     * 商户是否代理 0不可代理1可代理
     *
     * @Column(name="mer_use", prop="merUse")
     *
     * @var int
     */
    private $merUse;

    /**
     * 获得积分
     *
     * @Column(name="give_integral", prop="giveIntegral")
     *
     * @var float
     */
    private $giveIntegral;

    /**
     * 成本价
     *
     * @Column()
     *
     * @var float
     */
    private $cost;

    /**
     * 秒杀状态 0 未开启 1已开启
     *
     * @Column(name="is_seckill", prop="isSeckill")
     *
     * @var int
     */
    private $isSeckill;

    /**
     * 砍价状态 0未开启 1开启
     *
     * @Column(name="is_bargain", prop="isBargain")
     *
     * @var int|null
     */
    private $isBargain;

    /**
     * 是否优品推荐
     *
     * @Column(name="is_good", prop="isGood")
     *
     * @var int
     */
    private $isGood;

    /**
     * 虚拟销量
     *
     * @Column()
     *
     * @var int|null
     */
    private $ficti;

    /**
     * 浏览量
     *
     * @Column()
     *
     * @var int|null
     */
    private $browse;

    /**
     * 产品二维码地址(用户小程序海报)
     *
     * @Column(name="code_path", prop="codePath")
     *
     * @var string
     */
    private $codePath;

    /**
     * 淘宝京东1688类型
     *
     * @Column(name="soure_link", prop="soureLink")
     *
     * @var string|null
     */
    private $soureLink;


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
     * @param string $sliderImage
     *
     * @return self
     */
    public function setSliderImage(string $sliderImage): self
    {
        $this->sliderImage = $sliderImage;

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return self
     */
    public function setStoreName(string $storeName): self
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * @param string $storeInfo
     *
     * @return self
     */
    public function setStoreInfo(string $storeInfo): self
    {
        $this->storeInfo = $storeInfo;

        return $this;
    }

    /**
     * @param string $keyword
     *
     * @return self
     */
    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * @param string $barCode
     *
     * @return self
     */
    public function setBarCode(string $barCode): self
    {
        $this->barCode = $barCode;

        return $this;
    }

    /**
     * @param string $cateId
     *
     * @return self
     */
    public function setCateId(string $cateId): self
    {
        $this->cateId = $cateId;

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
     * @param float $vipPrice
     *
     * @return self
     */
    public function setVipPrice(float $vipPrice): self
    {
        $this->vipPrice = $vipPrice;

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
     * @param int $isBenefit
     *
     * @return self
     */
    public function setIsBenefit(int $isBenefit): self
    {
        $this->isBenefit = $isBenefit;

        return $this;
    }

    /**
     * @param int $isBest
     *
     * @return self
     */
    public function setIsBest(int $isBest): self
    {
        $this->isBest = $isBest;

        return $this;
    }

    /**
     * @param int $isNew
     *
     * @return self
     */
    public function setIsNew(int $isNew): self
    {
        $this->isNew = $isNew;

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
     * @param int $merUse
     *
     * @return self
     */
    public function setMerUse(int $merUse): self
    {
        $this->merUse = $merUse;

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
     * @param int $isSeckill
     *
     * @return self
     */
    public function setIsSeckill(int $isSeckill): self
    {
        $this->isSeckill = $isSeckill;

        return $this;
    }

    /**
     * @param int|null $isBargain
     *
     * @return self
     */
    public function setIsBargain(?int $isBargain): self
    {
        $this->isBargain = $isBargain;

        return $this;
    }

    /**
     * @param int $isGood
     *
     * @return self
     */
    public function setIsGood(int $isGood): self
    {
        $this->isGood = $isGood;

        return $this;
    }

    /**
     * @param int|null $ficti
     *
     * @return self
     */
    public function setFicti(?int $ficti): self
    {
        $this->ficti = $ficti;

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
     * @param string $codePath
     *
     * @return self
     */
    public function setCodePath(string $codePath): self
    {
        $this->codePath = $codePath;

        return $this;
    }

    /**
     * @param string|null $soureLink
     *
     * @return self
     */
    public function setSoureLink(?string $soureLink): self
    {
        $this->soureLink = $soureLink;

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
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getSliderImage(): ?string
    {
        return $this->sliderImage;
    }

    /**
     * @return string
     */
    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    /**
     * @return string
     */
    public function getStoreInfo(): ?string
    {
        return $this->storeInfo;
    }

    /**
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * @return string
     */
    public function getBarCode(): ?string
    {
        return $this->barCode;
    }

    /**
     * @return string
     */
    public function getCateId(): ?string
    {
        return $this->cateId;
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
    public function getVipPrice(): ?float
    {
        return $this->vipPrice;
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
    public function getPostage(): ?float
    {
        return $this->postage;
    }

    /**
     * @return string
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
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
     * @return int
     */
    public function getIsShow(): ?int
    {
        return $this->isShow;
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
    public function getIsBenefit(): ?int
    {
        return $this->isBenefit;
    }

    /**
     * @return int
     */
    public function getIsBest(): ?int
    {
        return $this->isBest;
    }

    /**
     * @return int
     */
    public function getIsNew(): ?int
    {
        return $this->isNew;
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
     * @return int
     */
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

    /**
     * @return int
     */
    public function getMerUse(): ?int
    {
        return $this->merUse;
    }

    /**
     * @return float
     */
    public function getGiveIntegral(): ?float
    {
        return $this->giveIntegral;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @return int
     */
    public function getIsSeckill(): ?int
    {
        return $this->isSeckill;
    }

    /**
     * @return int|null
     */
    public function getIsBargain(): ?int
    {
        return $this->isBargain;
    }

    /**
     * @return int
     */
    public function getIsGood(): ?int
    {
        return $this->isGood;
    }

    /**
     * @return int|null
     */
    public function getFicti(): ?int
    {
        return $this->ficti;
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
    public function getCodePath(): ?string
    {
        return $this->codePath;
    }

    /**
     * @return string|null
     */
    public function getSoureLink(): ?string
    {
        return $this->soureLink;
    }

}
