<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户通知表
 * Class UserNotice
 *
 * @since 2.0
 *
 * @Entity(table="user_notice")
 */
class UserNotice extends Model
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
     * 接收消息的用户id（类型：json数据）
     *
     * @Column()
     *
     * @var string
     */
    private $uid;

    /**
     * 消息通知类型（1：系统消息；2：用户通知）
     *
     * @Column()
     *
     * @var int
     */
    private $type;

    /**
     * 发送人
     *
     * @Column()
     *
     * @var string
     */
    private $user;

    /**
     * 通知消息的标题信息
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 通知消息的内容
     *
     * @Column()
     *
     * @var string
     */
    private $content;

    /**
     * 通知消息发送的时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 是否发送（0：未发送；1：已发送）
     *
     * @Column(name="is_send", prop="isSend")
     *
     * @var int
     */
    private $isSend;

    /**
     * 发送时间
     *
     * @Column(name="send_time", prop="sendTime")
     *
     * @var int
     */
    private $sendTime;


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
     * @param string $uid
     *
     * @return self
     */
    public function setUid(string $uid): self
    {
        $this->uid = $uid;

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
     * @param string $user
     *
     * @return self
     */
    public function setUser(string $user): self
    {
        $this->user = $user;

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
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

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
     * @param int $isSend
     *
     * @return self
     */
    public function setIsSend(int $isSend): self
    {
        $this->isSend = $isSend;

        return $this;
    }

    /**
     * @param int $sendTime
     *
     * @return self
     */
    public function setSendTime(int $sendTime): self
    {
        $this->sendTime = $sendTime;

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
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
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
    public function getIsSend(): ?int
    {
        return $this->isSend;
    }

    /**
     * @return int
     */
    public function getSendTime(): ?int
    {
        return $this->sendTime;
    }

}
