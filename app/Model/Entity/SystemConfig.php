<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 配置表
 * Class SystemConfig
 *
 * @since 2.0
 *
 * @Entity(table="system_config")
 */
class SystemConfig extends Model
{
    /**
     * 配置id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 字段名称
     *
     * @Column(name="menu_name", prop="menuName")
     *
     * @var string
     */
    private $menuName;

    /**
     * 类型(文本框,单选按钮...)
     *
     * @Column()
     *
     * @var string
     */
    private $type;

    /**
     * 表单类型
     *
     * @Column(name="input_type", prop="inputType")
     *
     * @var string|null
     */
    private $inputType;

    /**
     * 配置分类id
     *
     * @Column(name="config_tab_id", prop="configTabId")
     *
     * @var int
     */
    private $configTabId;

    /**
     * 规则 单选框和多选框
     *
     * @Column()
     *
     * @var string|null
     */
    private $parameter;

    /**
     * 上传文件格式1单图2多图3文件
     *
     * @Column(name="upload_type", prop="uploadType")
     *
     * @var int|null
     */
    private $uploadType;

    /**
     * 规则
     *
     * @Column()
     *
     * @var string|null
     */
    private $required;

    /**
     * 多行文本框的宽度
     *
     * @Column()
     *
     * @var int|null
     */
    private $width;

    /**
     * 多行文框的高度
     *
     * @Column()
     *
     * @var int|null
     */
    private $high;

    /**
     * 默认值
     *
     * @Column()
     *
     * @var string|null
     */
    private $value;

    /**
     * 配置名称
     *
     * @Column()
     *
     * @var string
     */
    private $info;

    /**
     * 配置简介
     *
     * @Column()
     *
     * @var string|null
     */
    private $desc;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 是否隐藏
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
     * @param string $menuName
     *
     * @return self
     */
    public function setMenuName(string $menuName): self
    {
        $this->menuName = $menuName;

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
     * @param string|null $inputType
     *
     * @return self
     */
    public function setInputType(?string $inputType): self
    {
        $this->inputType = $inputType;

        return $this;
    }

    /**
     * @param int $configTabId
     *
     * @return self
     */
    public function setConfigTabId(int $configTabId): self
    {
        $this->configTabId = $configTabId;

        return $this;
    }

    /**
     * @param string|null $parameter
     *
     * @return self
     */
    public function setParameter(?string $parameter): self
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * @param int|null $uploadType
     *
     * @return self
     */
    public function setUploadType(?int $uploadType): self
    {
        $this->uploadType = $uploadType;

        return $this;
    }

    /**
     * @param string|null $required
     *
     * @return self
     */
    public function setRequired(?string $required): self
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @param int|null $width
     *
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @param int|null $high
     *
     * @return self
     */
    public function setHigh(?int $high): self
    {
        $this->high = $high;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

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
     * @param string|null $desc
     *
     * @return self
     */
    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * @param int $sort
     *
     * @return self
     */
    public function setSort(int $sort): self
    {
        $this->sort = $sort;

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
    public function getMenuName(): ?string
    {
        return $this->menuName;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getInputType(): ?string
    {
        return $this->inputType;
    }

    /**
     * @return int
     */
    public function getConfigTabId(): ?int
    {
        return $this->configTabId;
    }

    /**
     * @return string|null
     */
    public function getParameter(): ?string
    {
        return $this->parameter;
    }

    /**
     * @return int|null
     */
    public function getUploadType(): ?int
    {
        return $this->uploadType;
    }

    /**
     * @return string|null
     */
    public function getRequired(): ?string
    {
        return $this->required;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @return int|null
     */
    public function getHigh(): ?int
    {
        return $this->high;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    /**
     * @return string|null
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * @return int
     */
    public function getSort(): ?int
    {
        return $this->sort;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

}
