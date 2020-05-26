<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 评论表
 * Class StoreProductReply
 *
 * @since 2.0
 *
 * @Entity(table="store_product_reply")
 */
class StoreProductReply extends Model
{
    /**
     * 评论ID
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
     * 订单ID
     *
     * @Column()
     *
     * @var int
     */
    private $oid;

    /**
     * 唯一id
     *
     * @Column()
     *
     * @var string
     */
    private $unique;

    /**
     * 产品id
     *
     * @Column(name="product_id", prop="productId")
     *
     * @var int
     */
    private $productId;

    /**
     * 某种商品类型(普通商品、秒杀商品）
     *
     * @Column(name="reply_type", prop="replyType")
     *
     * @var string
     */
    private $replyType;

    /**
     * 商品分数
     *
     * @Column(name="product_score", prop="productScore")
     *
     * @var int
     */
    private $productScore;

    /**
     * 服务分数
     *
     * @Column(name="service_score", prop="serviceScore")
     *
     * @var int
     */
    private $serviceScore;

    /**
     * 评论内容
     *
     * @Column()
     *
     * @var string
     */
    private $comment;

    /**
     * 评论图片
     *
     * @Column()
     *
     * @var string
     */
    private $pics;

    /**
     * 评论时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 管理员回复内容
     *
     * @Column(name="merchant_reply_content", prop="merchantReplyContent")
     *
     * @var string|null
     */
    private $merchantReplyContent;

    /**
     * 管理员回复时间
     *
     * @Column(name="merchant_reply_time", prop="merchantReplyTime")
     *
     * @var int|null
     */
    private $merchantReplyTime;

    /**
     * 0未删除1已删除
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;

    /**
     * 0未回复1已回复
     *
     * @Column(name="is_reply", prop="isReply")
     *
     * @var int
     */
    private $isReply;


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
     * @param int $oid
     *
     * @return self
     */
    public function setOid(int $oid): self
    {
        $this->oid = $oid;

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
     * @param string $replyType
     *
     * @return self
     */
    public function setReplyType(string $replyType): self
    {
        $this->replyType = $replyType;

        return $this;
    }

    /**
     * @param int $productScore
     *
     * @return self
     */
    public function setProductScore(int $productScore): self
    {
        $this->productScore = $productScore;

        return $this;
    }

    /**
     * @param int $serviceScore
     *
     * @return self
     */
    public function setServiceScore(int $serviceScore): self
    {
        $this->serviceScore = $serviceScore;

        return $this;
    }

    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @param string $pics
     *
     * @return self
     */
    public function setPics(string $pics): self
    {
        $this->pics = $pics;

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
     * @param string|null $merchantReplyContent
     *
     * @return self
     */
    public function setMerchantReplyContent(?string $merchantReplyContent): self
    {
        $this->merchantReplyContent = $merchantReplyContent;

        return $this;
    }

    /**
     * @param int|null $merchantReplyTime
     *
     * @return self
     */
    public function setMerchantReplyTime(?int $merchantReplyTime): self
    {
        $this->merchantReplyTime = $merchantReplyTime;

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
     * @param int $isReply
     *
     * @return self
     */
    public function setIsReply(int $isReply): self
    {
        $this->isReply = $isReply;

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
     * @return int
     */
    public function getOid(): ?int
    {
        return $this->oid;
    }

    /**
     * @return string
     */
    public function getUnique(): ?string
    {
        return $this->unique;
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
    public function getReplyType(): ?string
    {
        return $this->replyType;
    }

    /**
     * @return int
     */
    public function getProductScore(): ?int
    {
        return $this->productScore;
    }

    /**
     * @return int
     */
    public function getServiceScore(): ?int
    {
        return $this->serviceScore;
    }

    /**
     * @return string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @return string
     */
    public function getPics(): ?string
    {
        return $this->pics;
    }

    /**
     * @return int
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

    /**
     * @return string|null
     */
    public function getMerchantReplyContent(): ?string
    {
        return $this->merchantReplyContent;
    }

    /**
     * @return int|null
     */
    public function getMerchantReplyTime(): ?int
    {
        return $this->merchantReplyTime;
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
    public function getIsReply(): ?int
    {
        return $this->isReply;
    }

}
