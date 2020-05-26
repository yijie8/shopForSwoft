<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class UserToken
 *
 * @since 2.0
 *
 * @Entity(table="user_token")
 */
class UserToken extends Model
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
     * 用户 id
     *
     * @Column()
     *
     * @var int
     */
    private $uid;

    /**
     * token
     *
     * @Column()
     *
     * @var string
     */
    private $token;

    /**
     * 创建时间
     *
     * @Column(name="create_time", prop="createTime")
     *
     * @var string
     */
    private $createTime;

    /**
     * 到期事件
     *
     * @Column(name="expires_time", prop="expiresTime")
     *
     * @var string
     */
    private $expiresTime;

    /**
     * 登录ip
     *
     * @Column(name="login_ip", prop="loginIp")
     *
     * @var string|null
     */
    private $loginIp;


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
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @param string $createTime
     *
     * @return self
     */
    public function setCreateTime(string $createTime): self
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * @param string $expiresTime
     *
     * @return self
     */
    public function setExpiresTime(string $expiresTime): self
    {
        $this->expiresTime = $expiresTime;

        return $this;
    }

    /**
     * @param string|null $loginIp
     *
     * @return self
     */
    public function setLoginIp(?string $loginIp): self
    {
        $this->loginIp = $loginIp;

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
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @return string
     */
    public function getExpiresTime(): ?string
    {
        return $this->expiresTime;
    }

    /**
     * @return string|null
     */
    public function getLoginIp(): ?string
    {
        return $this->loginIp;
    }

}
