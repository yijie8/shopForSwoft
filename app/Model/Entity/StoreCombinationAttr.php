<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品属性表
 * Class StoreCombinationAttr
 *
 * @since 2.0
 *
 * @Entity(table="store_combination_attr")
 */
class StoreCombinationAttr extends Model
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
     * 属性名
     *
     * @Column(name="attr_name", prop="attrName")
     *
     * @var string
     */
    private $attrName;

    /**
     * 属性值
     *
     * @Column(name="attr_values", prop="attrValues")
     *
     * @var string
     */
    private $attrValues;


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
     * @param string $attrName
     *
     * @return self
     */
    public function setAttrName(string $attrName): self
    {
        $this->attrName = $attrName;

        return $this;
    }

    /**
     * @param string $attrValues
     *
     * @return self
     */
    public function setAttrValues(string $attrValues): self
    {
        $this->attrValues = $attrValues;

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
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }

    /**
     * @return string
     */
    public function getAttrValues(): ?string
    {
        return $this->attrValues;
    }

}
