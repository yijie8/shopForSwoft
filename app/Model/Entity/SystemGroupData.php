<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 组合数据详情表
 * Class SystemGroupData
 *
 * @since 2.0
 *
 * @Entity(table="system_group_data")
 */
class SystemGroupData extends Model
{
    /**
     * 组合数据详情ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 对应的数据组id
     *
     * @Column()
     *
     * @var int
     */
    private $gid;

    /**
     * 数据组对应的数据值（json数据）
     *
     * @Column()
     *
     * @var string
     */
    private $value;

    /**
     * 添加数据时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 数据排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 状态（1：开启；2：关闭；）
     *
     * @Column()
     *
     * @var int
     */
    private $status;


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
     * @param int $gid
     *
     * @return self
     */
    public function setGid(int $gid): self
    {
        $this->gid = $gid;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getGid(): ?int
    {
        return $this->gid;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
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

}
