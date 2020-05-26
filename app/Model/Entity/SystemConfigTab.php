<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 配置分类表
 * Class SystemConfigTab
 *
 * @since 2.0
 *
 * @Entity(table="system_config_tab")
 */
class SystemConfigTab extends Model
{
    /**
     * 配置分类id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 配置分类名称
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 配置分类英文名称
     *
     * @Column(name="eng_title", prop="engTitle")
     *
     * @var string
     */
    private $engTitle;

    /**
     * 配置分类状态
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 配置分类是否显示
     *
     * @Column()
     *
     * @var int
     */
    private $info;

    /**
     * 图标
     *
     * @Column()
     *
     * @var string|null
     */
    private $icon;

    /**
     * 父级ID
     *
     * @Column()
     *
     * @var int|null
     */
    private $pid;

    /**
     * 配置类型
     *
     * @Column()
     *
     * @var int|null
     */
    private $type;


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
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $engTitle
     *
     * @return self
     */
    public function setEngTitle(string $engTitle): self
    {
        $this->engTitle = $engTitle;

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
     * @param int $info
     *
     * @return self
     */
    public function setInfo(int $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @param string|null $icon
     *
     * @return self
     */
    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @param int|null $pid
     *
     * @return self
     */
    public function setPid(?int $pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * @param int|null $type
     *
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;

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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getEngTitle(): ?string
    {
        return $this->engTitle;
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
    public function getInfo(): ?int
    {
        return $this->info;
    }

    /**
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @return int|null
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }

}
