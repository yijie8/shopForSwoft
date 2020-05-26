<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 客服用户对话记录表
 * Class StoreServiceLog
 *
 * @since 2.0
 *
 * @Entity(table="store_service_log")
 */
class StoreServiceLog extends Model
{
    /**
     * 客服用户对话记录表ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 商户id
     *
     * @Column(name="mer_id", prop="merId")
     *
     * @var int
     */
    private $merId;

    /**
     * 消息内容
     *
     * @Column()
     *
     * @var string
     */
    private $msn;

    /**
     * 发送人uid
     *
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * 接收人uid
     *
     * @Column(name="to_uid", prop="toUid")
     *
     * @var int
     */
    private $toUid;

    /**
     * 发送时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 是否已读（0：否；1：是；）
     *
     * @Column()
     *
     * @var int
     */
    private $type;

    /**
     * 是否提醒过
     *
     * @Column()
     *
     * @var int
     */
    private $remind;

    /**
     * 消息类型 1=文字 2=表情 3=图片 4=语音
     *
     * @Column(name="msn_type", prop="msnType")
     *
     * @var int
     */
    private $msnType;


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
     * @param int $merId
     *
     * @return self
     */
    public function setMerId(int $merId): self
    {
        $this->merId = $merId;

        return $this;
    }

    /**
     * @param string $msn
     *
     * @return self
     */
    public function setMsn(string $msn): self
    {
        $this->msn = $msn;

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
     * @param int $toUid
     *
     * @return self
     */
    public function setToUid(int $toUid): self
    {
        $this->toUid = $toUid;

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
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param int $remind
     *
     * @return self
     */
    public function setRemind(int $remind): self
    {
        $this->remind = $remind;

        return $this;
    }

    /**
     * @param int $msnType
     *
     * @return self
     */
    public function setMsnType(int $msnType): self
    {
        $this->msnType = $msnType;

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
    public function getMerId(): ?int
    {
        return $this->merId;
    }

    /**
     * @return string
     */
    public function getMsn(): ?string
    {
        return $this->msn;
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
    public function getToUid(): ?int
    {
        return $this->toUid;
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
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getRemind(): ?int
    {
        return $this->remind;
    }

    /**
     * @return int
     */
    public function getMsnType(): ?int
    {
        return $this->msnType;
    }

}
