<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品属性详情表
 * Class StoreCombinationAttrResult
 *
 * @since 2.0
 *
 * @Entity(table="store_combination_attr_result")
 */
class StoreCombinationAttrResult extends Model
{
    /**
     * 商品ID
     * @Id(incrementing=false)
     * @Column(name="product_id", prop="productId")
     *
     * @var int
     */
    private $productId;

    /**
     * 商品属性参数
     *
     * @Column()
     *
     * @var string
     */
    private $result;

    /**
     * 上次修改时间
     *
     * @Column(name="change_time", prop="changeTime")
     *
     * @var int
     */
    private $changeTime;


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
     * @param string $result
     *
     * @return self
     */
    public function setResult(string $result): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @param int $changeTime
     *
     * @return self
     */
    public function setChangeTime(int $changeTime): self
    {
        $this->changeTime = $changeTime;

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
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * @return int
     */
    public function getChangeTime(): ?int
    {
        return $this->changeTime;
    }

}
