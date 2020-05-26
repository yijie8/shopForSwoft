<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品属性值表
 * Class StoreCombinationAttrValue
 *
 * @since 2.0
 *
 * @Entity(table="store_combination_attr_value")
 */
class StoreCombinationAttrValue extends Model
{
    /**
     * 商品ID
     *
     * @Column(name="product_id", prop="productId")
     *
     * @var int
     */
    private $productId;

    /**
     * 商品属性索引值 (attr_value|attr_value[|....])
     * @Id(incrementing=false)
     * @Column()
     *
     * @var string
     */
    private $suk;

    /**
     * 属性对应的库存
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
     * 属性金额
     *
     * @Column()
     *
     * @var float
     */
    private $price;

    /**
     * 图片
     *
     * @Column()
     *
     * @var string|null
     */
    private $image;

    /**
     * 唯一值
     *
     * @Column()
     *
     * @var string
     */
    private $unique;

    /**
     * 成本价
     *
     * @Column()
     *
     * @var float
     */
    private $cost;


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
     * @param string $suk
     *
     * @return self
     */
    public function setSuk(string $suk): self
    {
        $this->suk = $suk;

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
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @param string $unique
     *
     * @return self
     */
    public function setUnique(string $unique): self
    {
        $this->unique = $unique;

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
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return string
     */
    public function getSuk(): ?string
    {
        return $this->suk;
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
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getUnique(): ?string
    {
        return $this->unique;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

}
