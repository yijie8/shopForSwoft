<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 菜单表
 * Class SystemMenus
 *
 * @since 2.0
 *
 * @Entity(table="system_menus")
 */
class SystemMenus extends Model
{
    /**
     * 菜单ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 父级id
     *
     * @Column()
     *
     * @var int
     */
    private $pid;

    /**
     * 图标
     *
     * @Column()
     *
     * @var string
     */
    private $icon;

    /**
     * 按钮名
     *
     * @Column(name="menu_name", prop="menuName")
     *
     * @var string
     */
    private $menuName;

    /**
     * 模块名
     *
     * @Column()
     *
     * @var string
     */
    private $module;

    /**
     * 控制器
     *
     * @Column()
     *
     * @var string
     */
    private $controller;

    /**
     * 方法名
     *
     * @Column()
     *
     * @var string
     */
    private $action;

    /**
     * 参数
     *
     * @Column()
     *
     * @var string
     */
    private $params;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 是否显示
     *
     * @Column(name="is_show", prop="isShow")
     *
     * @var int
     */
    private $isShow;

    /**
     * 子管理员是否可用
     *
     * @Column()
     *
     * @var int
     */
    private $access;


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
     * @param int $pid
     *
     * @return self
     */
    public function setPid(int $pid): self
    {
        $this->pid = $pid;

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
     * @param string $module
     *
     * @return self
     */
    public function setModule(string $module): self
    {
        $this->module = $module;

        return $this;
    }

    /**
     * @param string $controller
     *
     * @return self
     */
    public function setController(string $controller): self
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @param string $params
     *
     * @return self
     */
    public function setParams(string $params): self
    {
        $this->params = $params;

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
     * @param int $isShow
     *
     * @return self
     */
    public function setIsShow(int $isShow): self
    {
        $this->isShow = $isShow;

        return $this;
    }

    /**
     * @param int $access
     *
     * @return self
     */
    public function setAccess(int $access): self
    {
        $this->access = $access;

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
    public function getPid(): ?int
    {
        return $this->pid;
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
    public function getMenuName(): ?string
    {
        return $this->menuName;
    }

    /**
     * @return string
     */
    public function getModule(): ?string
    {
        return $this->module;
    }

    /**
     * @return string
     */
    public function getController(): ?string
    {
        return $this->controller;
    }

    /**
     * @return string
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getParams(): ?string
    {
        return $this->params;
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
    public function getIsShow(): ?int
    {
        return $this->isShow;
    }

    /**
     * @return int
     */
    public function getAccess(): ?int
    {
        return $this->access;
    }

}
