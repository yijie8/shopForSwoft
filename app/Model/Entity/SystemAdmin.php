<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 后台管理员表
 * Class SystemAdmin
 *
 * @since 2.0
 *
 * @Entity(table="system_admin")
 */
class SystemAdmin extends Model
{
    /**
     * 后台管理员表ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 后台管理员账号
     *
     * @Column()
     *
     * @var string
     */
    private $account;

    /**
     * 后台管理员密码
     *
     * @Column(hidden=true)
     *
     * @var string
     */
    private $pwd;

    /**
     * 后台管理员姓名
     *
     * @Column(name="real_name", prop="realName")
     *
     * @var string
     */
    private $realName;

    /**
     * 后台管理员权限(menus_id)
     *
     * @Column()
     *
     * @var string
     */
    private $roles;

    /**
     * 后台管理员最后一次登录ip
     *
     * @Column(name="last_ip", prop="lastIp")
     *
     * @var string|null
     */
    private $lastIp;

    /**
     * 后台管理员最后一次登录时间
     *
     * @Column(name="last_time", prop="lastTime")
     *
     * @var int|null
     */
    private $lastTime;

    /**
     * 后台管理员添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;

    /**
     * 登录次数
     *
     * @Column(name="login_count", prop="loginCount")
     *
     * @var int
     */
    private $loginCount;

    /**
     * 后台管理员级别
     *
     * @Column()
     *
     * @var int
     */
    private $level;

    /**
     * 后台管理员状态 1有效0无效
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 
     *
     * @Column(name="is_del", prop="isDel")
     *
     * @var int
     */
    private $isDel;


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
     * @param string $account
     *
     * @return self
     */
    public function setAccount(string $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @param string $pwd
     *
     * @return self
     */
    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * @param string $realName
     *
     * @return self
     */
    public function setRealName(string $realName): self
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * @param string $roles
     *
     * @return self
     */
    public function setRoles(string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @param string|null $lastIp
     *
     * @return self
     */
    public function setLastIp(?string $lastIp): self
    {
        $this->lastIp = $lastIp;

        return $this;
    }

    /**
     * @param int|null $lastTime
     *
     * @return self
     */
    public function setLastTime(?int $lastTime): self
    {
        $this->lastTime = $lastTime;

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
     * @param int $loginCount
     *
     * @return self
     */
    public function setLoginCount(int $loginCount): self
    {
        $this->loginCount = $loginCount;

        return $this;
    }

    /**
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level): self
    {
        $this->level = $level;

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
     * @param int $isDel
     *
     * @return self
     */
    public function setIsDel(int $isDel): self
    {
        $this->isDel = $isDel;

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
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    /**
     * @return string
     */
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @return string
     */
    public function getRoles(): ?string
    {
        return $this->roles;
    }

    /**
     * @return string|null
     */
    public function getLastIp(): ?string
    {
        return $this->lastIp;
    }

    /**
     * @return int|null
     */
    public function getLastTime(): ?int
    {
        return $this->lastTime;
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
    public function getLoginCount(): ?int
    {
        return $this->loginCount;
    }

    /**
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
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
    public function getIsDel(): ?int
    {
        return $this->isDel;
    }

}
