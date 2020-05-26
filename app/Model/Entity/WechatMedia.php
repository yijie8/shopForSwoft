<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 微信回复表
 * Class WechatMedia
 *
 * @since 2.0
 *
 * @Entity(table="wechat_media")
 */
class WechatMedia extends Model
{
    /**
     * 微信视频音频id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 回复类型
     *
     * @Column()
     *
     * @var string
     */
    private $type;

    /**
     * 文件路径
     *
     * @Column()
     *
     * @var string
     */
    private $path;

    /**
     * 微信服务器返回的id
     *
     * @Column(name="media_id", prop="mediaId")
     *
     * @var string
     */
    private $mediaId;

    /**
     * 地址
     *
     * @Column()
     *
     * @var string
     */
    private $url;

    /**
     * 是否永久或者临时 0永久1临时
     *
     * @Column()
     *
     * @var int
     */
    private $temporary;

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
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @param string $mediaId
     *
     * @return self
     */
    public function setMediaId(string $mediaId): self
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param int $temporary
     *
     * @return self
     */
    public function setTemporary(int $temporary): self
    {
        $this->temporary = $temporary;

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
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getTemporary(): ?int
    {
        return $this->temporary;
    }

    /**
     * @return int
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
