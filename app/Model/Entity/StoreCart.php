<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 购物车表
 * Class StoreCart
 *
 * @since 2.0
 *
 * @Entity(table="store_cart")
 */
class StoreCart extends Model
{
    /**
     * 购物车表ID
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
     * @var int
     */
    private $uid;

    /**
     * 类型
     *
     * @Column()
     *
     * @var string
     */
    private $type;

    /**
     * 商品ID
     *
     * @Column(name="product_id", prop="productId")
     *
     * @var int
     */
    private $productId;

    /**
     * 商品属性
     *
     * @Column(name="product_attr_unique", prop="productAttrUnique")
     *
     * @var string
     */
    private $productAttrUnique;

    /**
     * 商品数量
     *
     * @Column(name="cart_num", prop="cartNum")
     *
     * @var int
     */
    private $cartNum;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 0 = 未购买 1 = 已购买
     *
     * @Column(name="is_pay", prop="isPay")
     *
     * @var int
     */
    private $isPay;

    /**
     * 是否删除
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;

    /**
     * 是否为立即购买
     *
     * @Column(name="is_new", prop="isNew")
     *
     * @var int
     */
    private $isNew;

    /**
     * 拼团id
     *
     * @Column(name="combination_id", prop="combinationId")
     *
     * @var int|null
     */
    private $combinationId;

    /**
     * 秒杀产品ID
     *
     * @Column(name="seckill_id", prop="seckillId")
     *
     * @var int
     */
    private $seckillId;

    /**
     * 砍价id
     *
     * @Column(name="bargain_id", prop="bargainId")
     *
     * @var int
     */
    private $bargainId;


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
     * @param string $productAttrUnique
     *
     * @return self
     */
    public function setProductAttrUnique(string $productAttrUnique): self
    {
        $this->productAttrUnique = $productAttrUnique;

        return $this;
    }

    /**
     * @param int $cartNum
     *
     * @return self
     */
    public function setCartNum(int $cartNum): self
    {
        $this->cartNum = $cartNum;

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
     * @param int|null $combinationId
     *
     * @return self
     */
    public function setCombinationId(?int $combinationId): self
    {
        $this->combinationId = $combinationId;

        return $this;
    }

    /**
     * @param int $seckillId
     *
     * @return self
     */
    public function setSeckillId(int $seckillId): self
    {
        $this->seckillId = $seckillId;

        return $this;
    }

    /**
     * @param int $bargainId
     *
     * @return self
     */
    public function setBargainId(int $bargainId): self
    {
        $this->bargainId = $bargainId;

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
    public function getType(): ?string
    {
        return $this->type;
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
    public function getProductAttrUnique(): ?string
    {
        return $this->productAttrUnique;
    }

    /**
     * @return int
     */
    public function getCartNum(): ?int
    {
        return $this->cartNum;
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
    public function getIsPay(): ?int
    {
        return $this->isPay;
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
    public function getIsNew(): ?int
    {
        return $this->isNew;
    }

    /**
     * @return int|null
     */
    public function getCombinationId(): ?int
    {
        return $this->combinationId;
    }

    /**
     * @return int
     */
    public function getSeckillId(): ?int
    {
        return $this->seckillId;
    }

    /**
     * @return int
     */
    public function getBargainId(): ?int
    {
        return $this->bargainId;
    }

}
