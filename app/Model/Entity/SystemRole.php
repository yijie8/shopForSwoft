<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 身份管理表
 * Class SystemRole
 *
 * @since 2.0
 *
 * @Entity(table="system_role")
 */
class SystemRole extends Model
{
    /**
     * 身份管理id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 身份管理名称
     *
     * @Column(name="role_name", prop="roleName")
     *
     * @var string
     */
    private $roleName;

    /**
     * 身份管理权限(menus_id)
     *
     * @Column()
     *
     * @var string
     */
    private $rules;

    /**
     * 
     *
     * @Column()
     *
     * @var int
     */
    private $level;

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
     * @param string $roleName
     *
     * @return self
     */
    public function setRoleName(string $roleName): self
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * @param string $rules
     *
     * @return self
     */
    public function setRules(string $rules): self
    {
        $this->rules = $rules;

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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    /**
     * @return string
     */
    public function getRules(): ?string
    {
        return $this->rules;
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

}
