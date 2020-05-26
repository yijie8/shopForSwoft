<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 表单id表记录表
 * Class RoutineFormId
 *
 * @since 2.0
 *
 * @Entity(table="routine_form_id")
 */
class RoutineFormId extends Model
{
    /**
     * 表单ID表ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 用户uid
     *
     * @Column()
     *
     * @var int|null
     */
    private $uid;

    /**
     * 表单ID
     *
     * @Column(name="form_id", prop="formId")
     *
     * @var string
     */
    private $formId;

    /**
     * 表单ID失效时间
     *
     * @Column(name="stop_time", prop="stopTime")
     *
     * @var int|null
     */
    private $stopTime;

    /**
     * 状态1 未使用 2不能使用
     *
     * @Column()
     *
     * @var int|null
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
     * @param string $formId
     *
     * @return self
     */
    public function setFormId(string $formId): self
    {
        $this->formId = $formId;

        return $this;
    }

    /**
     * @param int|null $stopTime
     *
     * @return self
     */
    public function setStopTime(?int $stopTime): self
    {
        $this->stopTime = $stopTime;

        return $this;
    }

    /**
     * @param int|null $status
     *
     * @return self
     */
    public function setStatus(?int $status): self
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
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getFormId(): ?string
    {
        return $this->formId;
    }

    /**
     * @return int|null
     */
    public function getStopTime(): ?int
    {
        return $this->stopTime;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

}
