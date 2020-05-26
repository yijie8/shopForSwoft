<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 文章管理表
 * Class Article
 *
 * @since 2.0
 *
 * @Entity(table="article")
 */
class Article extends Model
{
    /**
     * 文章管理ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 分类id
     *
     * @Column()
     *
     * @var string|null
     */
    private $cid;

    /**
     * 文章标题
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 文章作者
     *
     * @Column()
     *
     * @var string|null
     */
    private $author;

    /**
     * 文章图片
     *
     * @Column(name="image_input", prop="imageInput")
     *
     * @var string
     */
    private $imageInput;

    /**
     * 文章简介
     *
     * @Column()
     *
     * @var string|null
     */
    private $synopsis;

    /**
     * 文章分享标题
     *
     * @Column(name="share_title", prop="shareTitle")
     *
     * @var string|null
     */
    private $shareTitle;

    /**
     * 文章分享简介
     *
     * @Column(name="share_synopsis", prop="shareSynopsis")
     *
     * @var string|null
     */
    private $shareSynopsis;

    /**
     * 浏览次数
     *
     * @Column()
     *
     * @var string|null
     */
    private $visit;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 原文链接
     *
     * @Column()
     *
     * @var string|null
     */
    private $url;

    /**
     * 状态
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var string
     */
    private $addTime;

    /**
     * 是否隐藏
     *
     * @Column()
     *
     * @var int
     */
    private $hide;

    /**
     * 管理员id
     *
     * @Column(name="admin_id", prop="adminId")
     *
     * @var int
     */
    private $adminId;

    /**
     * 商户id
     *
     * @Column(name="mer_id", prop="merId")
     *
     * @var int|null
     */
    private $merId;

    /**
     * 产品关联id
     *
     * @Column(name="product_id", prop="productId")
     *
     * @var int
     */
    private $productId;

    /**
     * 是否热门(小程序)
     *
     * @Column(name="is_hot", prop="isHot")
     *
     * @var int
     */
    private $isHot;

    /**
     * 是否轮播图(小程序)
     *
     * @Column(name="is_banner", prop="isBanner")
     *
     * @var int
     */
    private $isBanner;


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
     * @param string|null $cid
     *
     * @return self
     */
    public function setCid(?string $cid): self
    {
        $this->cid = $cid;

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
     * @param string|null $author
     *
     * @return self
     */
    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @param string $imageInput
     *
     * @return self
     */
    public function setImageInput(string $imageInput): self
    {
        $this->imageInput = $imageInput;

        return $this;
    }

    /**
     * @param string|null $synopsis
     *
     * @return self
     */
    public function setSynopsis(?string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * @param string|null $shareTitle
     *
     * @return self
     */
    public function setShareTitle(?string $shareTitle): self
    {
        $this->shareTitle = $shareTitle;

        return $this;
    }

    /**
     * @param string|null $shareSynopsis
     *
     * @return self
     */
    public function setShareSynopsis(?string $shareSynopsis): self
    {
        $this->shareSynopsis = $shareSynopsis;

        return $this;
    }

    /**
     * @param string|null $visit
     *
     * @return self
     */
    public function setVisit(?string $visit): self
    {
        $this->visit = $visit;

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
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

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
     * @param int $hide
     *
     * @return self
     */
    public function setHide(int $hide): self
    {
        $this->hide = $hide;

        return $this;
    }

    /**
     * @param int $adminId
     *
     * @return self
     */
    public function setAdminId(int $adminId): self
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * @param int|null $merId
     *
     * @return self
     */
    public function setMerId(?int $merId): self
    {
        $this->merId = $merId;

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
     * @param int $isBanner
     *
     * @return self
     */
    public function setIsBanner(int $isBanner): self
    {
        $this->isBanner = $isBanner;

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
     * @return string|null
     */
    public function getCid(): ?string
    {
        return $this->cid;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getImageInput(): ?string
    {
        return $this->imageInput;
    }

    /**
     * @return string|null
     */
    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    /**
     * @return string|null
     */
    public function getShareTitle(): ?string
    {
        return $this->shareTitle;
    }

    /**
     * @return string|null
     */
    public function getShareSynopsis(): ?string
    {
        return $this->shareSynopsis;
    }

    /**
     * @return string|null
     */
    public function getVisit(): ?string
    {
        return $this->visit;
    }

    /**
     * @return int
     */
    public function getSort(): ?int
    {
        return $this->sort;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
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
    public function getHide(): ?int
    {
        return $this->hide;
    }

    /**
     * @return int
     */
    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    /**
     * @return int|null
     */
    public function getMerId(): ?int
    {
        return $this->merId;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
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
    public function getIsBanner(): ?int
    {
        return $this->isBanner;
    }

}
