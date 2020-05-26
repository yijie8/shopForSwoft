<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 附件管理表
 * Class SystemAttachment
 *
 * @since 2.0
 *
 * @Entity(table="system_attachment")
 */
class SystemAttachment extends Model
{
    /**
     * 
     * @Id()
     * @Column(name="att_id", prop="attId")
     *
     * @var int
     */
    private $attId;

    /**
     * 附件名称
     *
     * @Column()
     *
     * @var string
     */
    private $name;

    /**
     * 附件路径
     *
     * @Column(name="att_dir", prop="attDir")
     *
     * @var string
     */
    private $attDir;

    /**
     * 压缩图片路径
     *
     * @Column(name="satt_dir", prop="sattDir")
     *
     * @var string|null
     */
    private $sattDir;

    /**
     * 附件大小
     *
     * @Column(name="att_size", prop="attSize")
     *
     * @var string
     */
    private $attSize;

    /**
     * 附件类型
     *
     * @Column(name="att_type", prop="attType")
     *
     * @var string
     */
    private $attType;

    /**
     * 分类ID0编辑器,1产品图片,2拼团图片,3砍价图片,4秒杀图片,5文章图片,6组合数据图
     *
     * @Column()
     *
     * @var int
     */
    private $pid;

    /**
     * 上传时间
     *
     * @Column()
     *
     * @var int
     */
    private $time;

    /**
     * 图片上传类型 1本地 2七牛云 3OSS 4COS
     *
     * @Column(name="image_type", prop="imageType")
     *
     * @var int
     */
    private $imageType;

    /**
     * 图片上传模块类型 1 后台上传 2 用户生成
     *
     * @Column(name="module_type", prop="moduleType")
     *
     * @var int
     */
    private $moduleType;


    /**
     * @param int $attId
     *
     * @return self
     */
    public function setAttId(int $attId): self
    {
        $this->attId = $attId;

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
     * @param string $attDir
     *
     * @return self
     */
    public function setAttDir(string $attDir): self
    {
        $this->attDir = $attDir;

        return $this;
    }

    /**
     * @param string|null $sattDir
     *
     * @return self
     */
    public function setSattDir(?string $sattDir): self
    {
        $this->sattDir = $sattDir;

        return $this;
    }

    /**
     * @param string $attSize
     *
     * @return self
     */
    public function setAttSize(string $attSize): self
    {
        $this->attSize = $attSize;

        return $this;
    }

    /**
     * @param string $attType
     *
     * @return self
     */
    public function setAttType(string $attType): self
    {
        $this->attType = $attType;

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
     * @param int $time
     *
     * @return self
     */
    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @param int $imageType
     *
     * @return self
     */
    public function setImageType(int $imageType): self
    {
        $this->imageType = $imageType;

        return $this;
    }

    /**
     * @param int $moduleType
     *
     * @return self
     */
    public function setModuleType(int $moduleType): self
    {
        $this->moduleType = $moduleType;

        return $this;
    }

    /**
     * @return int
     */
    public function getAttId(): ?int
    {
        return $this->attId;
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
    public function getAttDir(): ?string
    {
        return $this->attDir;
    }

    /**
     * @return string|null
     */
    public function getSattDir(): ?string
    {
        return $this->sattDir;
    }

    /**
     * @return string
     */
    public function getAttSize(): ?string
    {
        return $this->attSize;
    }

    /**
     * @return string
     */
    public function getAttType(): ?string
    {
        return $this->attType;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * @return int
     */
    public function getTime(): ?int
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getImageType(): ?int
    {
        return $this->imageType;
    }

    /**
     * @return int
     */
    public function getModuleType(): ?int
    {
        return $this->moduleType;
    }

}
