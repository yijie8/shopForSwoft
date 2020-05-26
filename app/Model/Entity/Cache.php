<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 微信缓存表
 * Class Cache
 *
 * @since 2.0
 *
 * @Entity(table="cache")
 */
class Cache extends Model
{
    /**
     * 
     * @Id(incrementing=false)
     * @Column(name="key", prop="propertyKey")
     *
     * @var string
     */
    private $propertyKey;

    /**
     * 缓存数据
     *
     * @Column()
     *
     * @var string|null
     */
    private $result;

    /**
     * 失效时间0=永久
     *
     * @Column(name="expire_time", prop="expireTime")
     *
     * @var int
     */
    private $expireTime;

    /**
     * 缓存时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int|null
     */
    private $addTime;


    /**
     * @param string $propertyKey
     *
     * @return self
     */
    public function setPropertyKey(string $propertyKey): self
    {
        $this->propertyKey = $propertyKey;

        return $this;
    }

    /**
     * @param string|null $result
     *
     * @return self
     */
    public function setResult(?string $result): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @param int $expireTime
     *
     * @return self
     */
    public function setExpireTime(int $expireTime): self
    {
        $this->expireTime = $expireTime;

        return $this;
    }

    /**
     * @param int|null $addTime
     *
     * @return self
     */
    public function setAddTime(?int $addTime): self
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyKey(): ?string
    {
        return $this->propertyKey;
    }

    /**
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * @return int
     */
    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }

    /**
     * @return int|null
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
