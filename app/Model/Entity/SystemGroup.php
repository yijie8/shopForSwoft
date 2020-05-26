<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 组合数据表
 * Class SystemGroup
 *
 * @since 2.0
 *
 * @Entity(table="system_group")
 */
class SystemGroup extends Model
{
    /**
     * 组合数据ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 数据组名称
     *
     * @Column()
     *
     * @var string
     */
    private $name;

    /**
     * 数据提示
     *
     * @Column()
     *
     * @var string
     */
    private $info;

    /**
     * 数据字段
     *
     * @Column(name="config_name", prop="configName")
     *
     * @var string
     */
    private $configName;

    /**
     * 数据组字段以及类型（json数据）
     *
     * @Column()
     *
     * @var string|null
     */
    private $fields;


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
     * @param string $info
     *
     * @return self
     */
    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @param string $configName
     *
     * @return self
     */
    public function setConfigName(string $configName): self
    {
        $this->configName = $configName;

        return $this;
    }

    /**
     * @param string|null $fields
     *
     * @return self
     */
    public function setFields(?string $fields): self
    {
        $this->fields = $fields;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getConfigName(): ?string
    {
        return $this->configName;
    }

    /**
     * @return string|null
     */
    public function getFields(): ?string
    {
        return $this->fields;
    }

}
