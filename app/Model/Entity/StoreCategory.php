<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品分类表
 * Class StoreCategory
 *
 * @since 2.0
 *
 * @Entity(table="store_category")
 */
class StoreCategory extends Model
{
    /**
     * 商品分类表ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 父id
     *
     * @Column()
     *
     * @var int
     */
    private $pid;

    /**
     * 分类名称
     *
     * @Column(name="cate_name", prop="cateName")
     *
     * @var string
     */
    private $cateName;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 图标
     *
     * @Column()
     *
     * @var string
     */
    private $pic;

    /**
     * 是否推荐
     *
     * @Column(name="is_show", prop="isShow")
     *
     * @var int
     */
    private $isShow;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
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
     * @param string $cateName
     *
     * @return self
     */
    public function setCateName(string $cateName): self
    {
        $this->cateName = $cateName;

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
     * @param string $pic
     *
     * @return self
     */
    public function setPic(string $pic): self
    {
        $this->pic = $pic;

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
    public function getCateName(): ?string
    {
        return $this->cateName;
    }

    /**
     * @return int
     */
    public function getSort(): ?int
    {
        return $this->sort;
    }

    /**
     * @return string
     */
    public function getPic(): ?string
    {
        return $this->pic;
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
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
