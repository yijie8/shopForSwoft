<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 小程序access_token表
 * Class RoutineAccessToken
 *
 * @since 2.0
 *
 * @Entity(table="routine_access_token")
 */
class RoutineAccessToken extends Model
{
    /**
     * 小程序access_token表ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * openid
     *
     * @Column(name="access_token", prop="accessToken")
     *
     * @var string
     */
    private $accessToken;

    /**
     * 添加时间
     *
     * @Column(name="stop_time", prop="stopTime")
     *
     * @var int
     */
    private $stopTime;


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
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * @param int $stopTime
     *
     * @return self
     */
    public function setStopTime(int $stopTime): self
    {
        $this->stopTime = $stopTime;

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
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * @return int
     */
    public function getStopTime(): ?int
    {
        return $this->stopTime;
    }

}
