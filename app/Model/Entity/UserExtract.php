<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户提现表
 * Class UserExtract
 *
 * @since 2.0
 *
 * @Entity(table="user_extract")
 */
class UserExtract extends Model
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
     * 
     *
     * @Column()
     *
     * @var int|null
     */
    private $uid;

    /**
     * 名称
     *
     * @Column(name="real_name", prop="realName")
     *
     * @var string|null
     */
    private $realName;

    /**
     * bank = 银行卡 alipay = 支付宝wx=微信
     *
     * @Column(name="extract_type", prop="extractType")
     *
     * @var string|null
     */
    private $extractType;

    /**
     * 银行卡
     *
     * @Column(name="bank_code", prop="bankCode")
     *
     * @var string|null
     */
    private $bankCode;

    /**
     * 开户地址
     *
     * @Column(name="bank_address", prop="bankAddress")
     *
     * @var string|null
     */
    private $bankAddress;

    /**
     * 支付宝账号
     *
     * @Column(name="alipay_code", prop="alipayCode")
     *
     * @var string|null
     */
    private $alipayCode;

    /**
     * 提现金额
     *
     * @Column(name="extract_price", prop="extractPrice")
     *
     * @var float|null
     */
    private $extractPrice;

    /**
     * 
     *
     * @Column()
     *
     * @var string|null
     */
    private $mark;

    /**
     * 
     *
     * @Column()
     *
     * @var float|null
     */
    private $balance;

    /**
     * 无效原因
     *
     * @Column(name="fail_msg", prop="failMsg")
     *
     * @var string|null
     */
    private $failMsg;

    /**
     * 
     *
     * @Column(name="fail_time", prop="failTime")
     *
     * @var int|null
     */
    private $failTime;

    /**
     * 添加时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int|null
     */
    private $addTime;

    /**
     * -1 未通过 0 审核中 1 已提现
     *
     * @Column()
     *
     * @var int|null
     */
    private $status;

    /**
     * 微信号
     *
     * @Column()
     *
     * @var string|null
     */
    private $wechat;


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
     * @param int|null $uid
     *
     * @return self
     */
    public function setUid(?int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @param string|null $realName
     *
     * @return self
     */
    public function setRealName(?string $realName): self
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * @param string|null $extractType
     *
     * @return self
     */
    public function setExtractType(?string $extractType): self
    {
        $this->extractType = $extractType;

        return $this;
    }

    /**
     * @param string|null $bankCode
     *
     * @return self
     */
    public function setBankCode(?string $bankCode): self
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * @param string|null $bankAddress
     *
     * @return self
     */
    public function setBankAddress(?string $bankAddress): self
    {
        $this->bankAddress = $bankAddress;

        return $this;
    }

    /**
     * @param string|null $alipayCode
     *
     * @return self
     */
    public function setAlipayCode(?string $alipayCode): self
    {
        $this->alipayCode = $alipayCode;

        return $this;
    }

    /**
     * @param float|null $extractPrice
     *
     * @return self
     */
    public function setExtractPrice(?float $extractPrice): self
    {
        $this->extractPrice = $extractPrice;

        return $this;
    }

    /**
     * @param string|null $mark
     *
     * @return self
     */
    public function setMark(?string $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * @param float|null $balance
     *
     * @return self
     */
    public function setBalance(?float $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * @param string|null $failMsg
     *
     * @return self
     */
    public function setFailMsg(?string $failMsg): self
    {
        $this->failMsg = $failMsg;

        return $this;
    }

    /**
     * @param int|null $failTime
     *
     * @return self
     */
    public function setFailTime(?int $failTime): self
    {
        $this->failTime = $failTime;

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
     * @param int|null $status
     *
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param string|null $wechat
     *
     * @return self
     */
    public function setWechat(?string $wechat): self
    {
        $this->wechat = $wechat;

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
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @return string|null
     */
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @return string|null
     */
    public function getExtractType(): ?string
    {
        return $this->extractType;
    }

    /**
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    /**
     * @return string|null
     */
    public function getBankAddress(): ?string
    {
        return $this->bankAddress;
    }

    /**
     * @return string|null
     */
    public function getAlipayCode(): ?string
    {
        return $this->alipayCode;
    }

    /**
     * @return float|null
     */
    public function getExtractPrice(): ?float
    {
        return $this->extractPrice;
    }

    /**
     * @return string|null
     */
    public function getMark(): ?string
    {
        return $this->mark;
    }

    /**
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }

    /**
     * @return string|null
     */
    public function getFailMsg(): ?string
    {
        return $this->failMsg;
    }

    /**
     * @return int|null
     */
    public function getFailTime(): ?int
    {
        return $this->failTime;
    }

    /**
     * @return int|null
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getWechat(): ?string
    {
        return $this->wechat;
    }

}
