<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 微信模板
 * Class WechatTemplate
 *
 * @since 2.0
 *
 * @Entity(table="wechat_template")
 */
class WechatTemplate extends Model
{
    /**
     * 模板id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 模板编号
     *
     * @Column()
     *
     * @var string
     */
    private $tempkey;

    /**
     * 模板名
     *
     * @Column()
     *
     * @var string
     */
    private $name;

    /**
     * 回复内容
     *
     * @Column()
     *
     * @var string
     */
    private $content;

    /**
     * 模板ID
     *
     * @Column()
     *
     * @var string|null
     */
    private $tempid;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var string
     */
    private $addTime;

    /**
     * 状态
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
     * @param string $tempkey
     *
     * @return self
     */
    public function setTempkey(string $tempkey): self
    {
        $this->tempkey = $tempkey;

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
     * @param string|null $tempid
     *
     * @return self
     */
    public function setTempid(?string $tempid): self
    {
        $this->tempid = $tempid;

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
     * @return string
     */
    public function getTempkey(): ?string
    {
        return $this->tempkey;
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
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @return string|null
     */
    public function getTempid(): ?string
    {
        return $this->tempid;
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
    public function getStatus(): ?int
    {
        return $this->status;
    }

}
