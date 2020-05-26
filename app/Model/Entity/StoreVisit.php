<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 产品浏览分析表
 * Class StoreVisit
 *
 * @since 2.0
 *
 * @Entity(table="store_visit")
 */
class StoreVisit extends Model
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
     * 产品ID
     *
     * @Column(name="product_id", prop="productId")
     *
     * @var int|null
     */
    private $productId;

    /**
     * 产品类型
     *
     * @Column(name="product_type", prop="productType")
     *
     * @var string|null
     */
    private $productType;

    /**
     * 产品分类ID
     *
     * @Column(name="cate_id", prop="cateId")
     *
     * @var int|null
     */
    private $cateId;

    /**
     * 产品类型
     *
     * @Column()
     *
     * @var string|null
     */
    private $type;

    /**
     * 用户ID
     *
     * @Column()
     *
     * @var int|null
     */
    private $uid;

    /**
     * 访问次数
     *
     * @Column()
     *
     * @var int|null
     */
    private $count;

    /**
     * 备注描述
     *
     * @Column()
     *
     * @var string|null
     */
    private $content;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int|null
     */
    private $addTime;


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
     * @param int|null $productId
     *
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param string|null $productType
     *
     * @return self
     */
    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @param int|null $cateId
     *
     * @return self
     */
    public function setCateId(?int $cateId): self
    {
        $this->cateId = $cateId;

        return $this;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param int|null $uid
     *
     * @return self
     */
    public function setUid(?int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @param int|null $count
     *
     * @return self
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    /**
     * @return int|null
     */
    public function getCateId(): ?int
    {
        return $this->cateId;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @return int|null
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
