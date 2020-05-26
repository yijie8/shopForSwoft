<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 微信二维码管理表
 * Class WechatQrcode
 *
 * @since 2.0
 *
 * @Entity(table="wechat_qrcode")
 */
class WechatQrcode extends Model
{
    /**
     * 微信二维码ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 二维码类型
     *
     * @Column(name="third_type", prop="thirdType")
     *
     * @var string
     */
    private $thirdType;

    /**
     * 用户id
     *
     * @Column(name="third_id", prop="thirdId")
     *
     * @var int
     */
    private $thirdId;

    /**
     * 二维码参数
     *
     * @Column()
     *
     * @var string
     */
    private $ticket;

    /**
     * 二维码有效时间
     *
     * @Column(name="expire_seconds", prop="expireSeconds")
     *
     * @var int
     */
    private $expireSeconds;

    /**
     * 状态
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var string
     */
    private $addTime;

    /**
     * 微信访问url
     *
     * @Column()
     *
     * @var string
     */
    private $url;

    /**
     * 微信二维码url
     *
     * @Column(name="qrcode_url", prop="qrcodeUrl")
     *
     * @var string
     */
    private $qrcodeUrl;

    /**
     * 被扫的次数
     *
     * @Column()
     *
     * @var int
     */
    private $scan;


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
     * @param string $thirdType
     *
     * @return self
     */
    public function setThirdType(string $thirdType): self
    {
        $this->thirdType = $thirdType;

        return $this;
    }

    /**
     * @param int $thirdId
     *
     * @return self
     */
    public function setThirdId(int $thirdId): self
    {
        $this->thirdId = $thirdId;

        return $this;
    }

    /**
     * @param string $ticket
     *
     * @return self
     */
    public function setTicket(string $ticket): self
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * @param int $expireSeconds
     *
     * @return self
     */
    public function setExpireSeconds(int $expireSeconds): self
    {
        $this->expireSeconds = $expireSeconds;

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
     * @param string $qrcodeUrl
     *
     * @return self
     */
    public function setQrcodeUrl(string $qrcodeUrl): self
    {
        $this->qrcodeUrl = $qrcodeUrl;

        return $this;
    }

    /**
     * @param int $scan
     *
     * @return self
     */
    public function setScan(int $scan): self
    {
        $this->scan = $scan;

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
    public function getThirdType(): ?string
    {
        return $this->thirdType;
    }

    /**
     * @return int
     */
    public function getThirdId(): ?int
    {
        return $this->thirdId;
    }

    /**
     * @return string
     */
    public function getTicket(): ?string
    {
        return $this->ticket;
    }

    /**
     * @return int
     */
    public function getExpireSeconds(): ?int
    {
        return $this->expireSeconds;
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
    public function getAddTime(): ?string
    {
        return $this->addTime;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getQrcodeUrl(): ?string
    {
        return $this->qrcodeUrl;
    }

    /**
     * @return int
     */
    public function getScan(): ?int
    {
        return $this->scan;
    }

}
