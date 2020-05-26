<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 附件分类表
 * Class SystemAttachmentCategory
 *
 * @since 2.0
 *
 * @Entity(table="system_attachment_category")
 */
class SystemAttachmentCategory extends Model
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
     * 父级ID
     *
     * @Column()
     *
     * @var int|null
     */
    private $pid;

    /**
     * 分类名称
     *
     * @Column()
     *
     * @var string
     */
    private $name;

    /**
     * 分类目录
     *
     * @Column()
     *
     * @var string|null
     */
    private $enname;


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
     * @param string|null $enname
     *
     * @return self
     */
    public function setEnname(?string $enname): self
    {
        $this->enname = $enname;

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
     * @return int|null
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getEnname(): ?string
    {
        return $this->enname;
    }

}
