<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 文章分类表
 * Class ArticleCategory
 *
 * @since 2.0
 *
 * @Entity(table="article_category")
 */
class ArticleCategory extends Model
{
    /**
     * 文章分类id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 父级ID
     *
     * @Column()
     *
     * @var int
     */
    private $pid;

    /**
     * 文章分类标题
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 文章分类简介
     *
     * @Column()
     *
     * @var string|null
     */
    private $intr;

    /**
     * 文章分类图片
     *
     * @Column()
     *
     * @var string
     */
    private $image;

    /**
     * 状态
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 1删除0未删除
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;

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
    private $hidden;


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
     * @param int $pid
     *
     * @return self
     */
    public function setPid(int $pid): self
    {
        $this->pid = $pid;

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
     * @param string|null $intr
     *
     * @return self
     */
    public function setIntr(?string $intr): self
    {
        $this->intr = $intr;

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
     * @param int $hidden
     *
     * @return self
     */
    public function setHidden(int $hidden): self
    {
        $this->hidden = $hidden;

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
    public function getPid(): ?int
    {
        return $this->pid;
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
    public function getIntr(): ?string
    {
        return $this->intr;
    }

    /**
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
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
    public function getSort(): ?int
    {
        return $this->sort;
    }

    /**
     * @return int
     */
    public function getIsDel(): ?int
    {
        return $this->isDel;
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
    public function getHidden(): ?int
    {
        return $this->hidden;
    }

}
