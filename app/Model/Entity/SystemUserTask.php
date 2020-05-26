<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 等级任务设置
 * Class SystemUserTask
 *
 * @since 2.0
 *
 * @Entity(table="system_user_task")
 */
class SystemUserTask extends Model
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
     * 任务名称
     *
     * @Column()
     *
     * @var string
     */
    private $name;

    /**
     * 配置原名
     *
     * @Column(name="real_name", prop="realName")
     *
     * @var string
     */
    private $realName;

    /**
     * 任务类型
     *
     * @Column(name="task_type", prop="taskType")
     *
     * @var string
     */
    private $taskType;

    /**
     * 限定数
     *
     * @Column()
     *
     * @var int
     */
    private $number;

    /**
     * 等级id
     *
     * @Column(name="level_id", prop="levelId")
     *
     * @var int
     */
    private $levelId;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 是否显示
     *
     * @Column(name="is_show", prop="isShow")
     *
     * @var int
     */
    private $isShow;

    /**
     * 是否务必达成任务,1务必达成,0=满足其一
     *
     * @Column(name="is_must", prop="isMust")
     *
     * @var int
     */
    private $isMust;

    /**
     * 任务说明
     *
     * @Column()
     *
     * @var string
     */
    private $illustrate;

    /**
     * 新增时间
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
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $realName
     *
     * @return self
     */
    public function setRealName(string $realName): self
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * @param string $taskType
     *
     * @return self
     */
    public function setTaskType(string $taskType): self
    {
        $this->taskType = $taskType;

        return $this;
    }

    /**
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @param int $levelId
     *
     * @return self
     */
    public function setLevelId(int $levelId): self
    {
        $this->levelId = $levelId;

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
     * @param int $isMust
     *
     * @return self
     */
    public function setIsMust(int $isMust): self
    {
        $this->isMust = $isMust;

        return $this;
    }

    /**
     * @param string $illustrate
     *
     * @return self
     */
    public function setIllustrate(string $illustrate): self
    {
        $this->illustrate = $illustrate;

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
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @return string
     */
    public function getTaskType(): ?string
    {
        return $this->taskType;
    }

    /**
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @return int
     */
    public function getLevelId(): ?int
    {
        return $this->levelId;
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
    public function getIsShow(): ?int
    {
        return $this->isShow;
    }

    /**
     * @return int
     */
    public function getIsMust(): ?int
    {
        return $this->isMust;
    }

    /**
     * @return string
     */
    public function getIllustrate(): ?string
    {
        return $this->illustrate;
    }

    /**
     * @return int
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
