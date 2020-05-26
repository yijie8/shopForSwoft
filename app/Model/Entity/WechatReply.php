<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 微信关键字回复表
 * Class WechatReply
 *
 * @since 2.0
 *
 * @Entity(table="wechat_reply")
 */
class WechatReply extends Model
{
    /**
     * 微信关键字回复id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 关键字
     *
     * @Column(name="key", prop="propertyKey")
     *
     * @var string
     */
    private $propertyKey;

    /**
     * 回复类型
     *
     * @Column()
     *
     * @var string
     */
    private $type;

    /**
     * 回复数据
     *
     * @Column()
     *
     * @var string
     */
    private $data;

    /**
     * 0=不可用  1 =可用
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 是否隐藏
     *
     * @Column()
     *
     * @var int
     */
    private $hide;


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
     * @param string $propertyKey
     *
     * @return self
     */
    public function setPropertyKey(string $propertyKey): self
    {
        $this->propertyKey = $propertyKey;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data): self
    {
        $this->data = $data;

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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPropertyKey(): ?string
    {
        return $this->propertyKey;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getData(): ?string
    {
        return $this->data;
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
    public function getHide(): ?int
    {
        return $this->hide;
    }

}
