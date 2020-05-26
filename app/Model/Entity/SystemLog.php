<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 管理员操作记录表
 * Class SystemLog
 *
 * @since 2.0
 *
 * @Entity(table="system_log")
 */
class SystemLog extends Model
{
    /**
     * 管理员操作记录ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 管理员id
     *
     * @Column(name="admin_id", prop="adminId")
     *
     * @var int
     */
    private $adminId;

    /**
     * 管理员姓名
     *
     * @Column(name="admin_name", prop="adminName")
     *
     * @var string
     */
    private $adminName;

    /**
     * 链接
     *
     * @Column()
     *
     * @var string
     */
    private $path;

    /**
     * 行为
     *
     * @Column()
     *
     * @var string
     */
    private $page;

    /**
     * 访问类型
     *
     * @Column()
     *
     * @var string
     */
    private $method;

    /**
     * 登录IP
     *
     * @Column()
     *
     * @var string
     */
    private $ip;

    /**
     * 类型
     *
     * @Column()
     *
     * @var string
     */
    private $type;

    /**
     * 操作时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 商户id
     *
     * @Column(name="merchant_id", prop="merchantId")
     *
     * @var int
     */
    private $merchantId;


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
     * @param int $adminId
     *
     * @return self
     */
    public function setAdminId(int $adminId): self
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * @param string $adminName
     *
     * @return self
     */
    public function setAdminName(string $adminName): self
    {
        $this->adminName = $adminName;

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
     * @param string $page
     *
     * @return self
     */
    public function setPage(string $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->ip = $ip;

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
     * @param int $merchantId
     *
     * @return self
     */
    public function setMerchantId(int $merchantId): self
    {
        $this->merchantId = $merchantId;

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
    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    /**
     * @return string
     */
    public function getAdminName(): ?string
    {
        return $this->adminName;
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
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * @return string
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
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
    public function getMerchantId(): ?int
    {
        return $this->merchantId;
    }

}
