<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 图文消息管理表
 * Class WechatNewsCategory
 *
 * @since 2.0
 *
 * @Entity(table="wechat_news_category")
 */
class WechatNewsCategory extends Model
{
    /**
     * 图文消息管理ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 图文名称
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
     * 状态
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 文章id
     *
     * @Column(name="new_id", prop="newId")
     *
     * @var string
     */
    private $newId;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var string
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
     * @param string $newId
     *
     * @return self
     */
    public function setNewId(string $newId): self
    {
        $this->newId = $newId;

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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
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
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getNewId(): ?string
    {
        return $this->newId;
    }

    /**
     * @return string
     */
    public function getAddTime(): ?string
    {
        return $this->addTime;
    }

}
