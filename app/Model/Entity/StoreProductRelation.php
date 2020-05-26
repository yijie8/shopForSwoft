<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品点赞和收藏表
 * Class StoreProductRelation
 *
 * @since 2.0
 *
 * @Entity(table="store_product_relation")
 */
class StoreProductRelation extends Model
{
    /**
     * 用户ID
     * @Id(incrementing=false)
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 商品ID
     *
     * @Column(name="product_id", prop="productId")
     *
     * @var int
     */
    private $productId;

    /**
     * 类型(收藏(collect）、点赞(like))
     *
     * @Column()
     *
     * @var string
     */
    private $type;

    /**
     * 某种类型的商品(普通商品、秒杀商品)
     *
     * @Column()
     *
     * @var string
     */
    private $category;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;


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
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

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
     * @return int
     */
    public function getUid(): ?int
    {
        return $this->uid;
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
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @return int
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
