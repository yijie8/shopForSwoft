<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 通知模板表
 * Class SystemNotice
 *
 * @since 2.0
 *
 * @Entity(table="system_notice")
 */
class SystemNotice extends Model
{
    /**
     * 通知模板id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 通知标题
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 通知类型
     *
     * @Column()
     *
     * @var string
     */
    private $type;

    /**
     * 图标
     *
     * @Column()
     *
     * @var string
     */
    private $icon;

    /**
     * 链接
     *
     * @Column()
     *
     * @var string
     */
    private $url;

    /**
     * 通知数据
     *
     * @Column(name="table_title", prop="tableTitle")
     *
     * @var string
     */
    private $tableTitle;

    /**
     * 通知模板
     *
     * @Column()
     *
     * @var string
     */
    private $template;

    /**
     * 通知管理员id
     *
     * @Column(name="push_admin", prop="pushAdmin")
     *
     * @var string
     */
    private $pushAdmin;

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
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

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
     * @param string $tableTitle
     *
     * @return self
     */
    public function setTableTitle(string $tableTitle): self
    {
        $this->tableTitle = $tableTitle;

        return $this;
    }

    /**
     * @param string $template
     *
     * @return self
     */
    public function setTemplate(string $template): self
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @param string $pushAdmin
     *
     * @return self
     */
    public function setPushAdmin(string $pushAdmin): self
    {
        $this->pushAdmin = $pushAdmin;

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
    public function getTitle(): ?string
    {
        return $this->title;
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
    public function getIcon(): ?string
    {
        return $this->icon;
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
    public function getTableTitle(): ?string
    {
        return $this->tableTitle;
    }

    /**
     * @return string
     */
    public function getTemplate(): ?string
    {
        return $this->template;
    }

    /**
     * @return string
     */
    public function getPushAdmin(): ?string
    {
        return $this->pushAdmin;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

}
