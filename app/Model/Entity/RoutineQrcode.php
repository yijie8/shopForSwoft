<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 小程序二维码管理表
 * Class RoutineQrcode
 *
 * @since 2.0
 *
 * @Entity(table="routine_qrcode")
 */
class RoutineQrcode extends Model
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
     * 二维码类型 spread(用户推广) product_spread(产品推广)
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
     * 状态 0不可用 1可用
     *
     * @Column()
     *
     * @var int|null
     */
    private $status;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var string|null
     */
    private $addTime;

    /**
     * 小程序页面路径带参数
     *
     * @Column()
     *
     * @var string|null
     */
    private $page;

    /**
     * 小程序二维码路径
     *
     * @Column(name="qrcode_url", prop="qrcodeUrl")
     *
     * @var string|null
     */
    private $qrcodeUrl;

    /**
     * 二维码添加时间
     *
     * @Column(name="url_time", prop="urlTime")
     *
     * @var int|null
     */
    private $urlTime;


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
     * @param string|null $addTime
     *
     * @return self
     */
    public function setAddTime(?string $addTime): self
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * @param string|null $page
     *
     * @return self
     */
    public function setPage(?string $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @param string|null $qrcodeUrl
     *
     * @return self
     */
    public function setQrcodeUrl(?string $qrcodeUrl): self
    {
        $this->qrcodeUrl = $qrcodeUrl;

        return $this;
    }

    /**
     * @param int|null $urlTime
     *
     * @return self
     */
    public function setUrlTime(?int $urlTime): self
    {
        $this->urlTime = $urlTime;

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
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getAddTime(): ?string
    {
        return $this->addTime;
    }

    /**
     * @return string|null
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * @return string|null
     */
    public function getQrcodeUrl(): ?string
    {
        return $this->qrcodeUrl;
    }

    /**
     * @return int|null
     */
    public function getUrlTime(): ?int
    {
        return $this->urlTime;
    }

}
