<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 文件对比表
 * Class SystemFile
 *
 * @since 2.0
 *
 * @Entity(table="system_file")
 */
class SystemFile extends Model
{
    /**
     * 文件对比ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 文件内容
     *
     * @Column()
     *
     * @var string
     */
    private $cthash;

    /**
     * 文价名称
     *
     * @Column()
     *
     * @var string
     */
    private $filename;

    /**
     * 上次访问时间
     *
     * @Column()
     *
     * @var string
     */
    private $atime;

    /**
     * 上次修改时间
     *
     * @Column()
     *
     * @var string
     */
    private $mtime;

    /**
     * 上次改变时间
     *
     * @Column()
     *
     * @var string
     */
    private $ctime;


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
     * @param string $cthash
     *
     * @return self
     */
    public function setCthash(string $cthash): self
    {
        $this->cthash = $cthash;

        return $this;
    }

    /**
     * @param string $filename
     *
     * @return self
     */
    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * @param string $atime
     *
     * @return self
     */
    public function setAtime(string $atime): self
    {
        $this->atime = $atime;

        return $this;
    }

    /**
     * @param string $mtime
     *
     * @return self
     */
    public function setMtime(string $mtime): self
    {
        $this->mtime = $mtime;

        return $this;
    }

    /**
     * @param string $ctime
     *
     * @return self
     */
    public function setCtime(string $ctime): self
    {
        $this->ctime = $ctime;

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
    public function getCthash(): ?string
    {
        return $this->cthash;
    }

    /**
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    public function getAtime(): ?string
    {
        return $this->atime;
    }

    /**
     * @return string
     */
    public function getMtime(): ?string
    {
        return $this->mtime;
    }

    /**
     * @return string
     */
    public function getCtime(): ?string
    {
        return $this->ctime;
    }

}
