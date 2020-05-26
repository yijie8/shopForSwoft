<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 通知记录表
 * Class SystemNoticeAdmin
 *
 * @since 2.0
 *
 * @Entity(table="system_notice_admin")
 */
class SystemNoticeAdmin extends Model
{
    /**
     * 通知记录ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 通知类型
     *
     * @Column(name="notice_type", prop="noticeType")
     *
     * @var string
     */
    private $noticeType;

    /**
     * 通知的管理员
     *
     * @Column(name="admin_id", prop="adminId")
     *
     * @var int
     */
    private $adminId;

    /**
     * 关联ID
     *
     * @Column(name="link_id", prop="linkId")
     *
     * @var int
     */
    private $linkId;

    /**
     * 通知的数据
     *
     * @Column(name="table_data", prop="tableData")
     *
     * @var string
     */
    private $tableData;

    /**
     * 点击次数
     *
     * @Column(name="is_click", prop="isClick")
     *
     * @var int
     */
    private $isClick;

    /**
     * 访问次数
     *
     * @Column(name="is_visit", prop="isVisit")
     *
     * @var int
     */
    private $isVisit;

    /**
     * 访问时间
     *
     * @Column(name="visit_time", prop="visitTime")
     *
     * @var int
     */
    private $visitTime;

    /**
     * 通知时间
     *
     * @Column(name="add_time", prop="addTime")
     *
     * @var int
     */
    private $addTime;


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
     * @param string $noticeType
     *
     * @return self
     */
    public function setNoticeType(string $noticeType): self
    {
        $this->noticeType = $noticeType;

        return $this;
    }

    /**
     * @param int $adminId
     *
     * @return self
     */
    public function setAdminId(int $adminId): self
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * @param int $linkId
     *
     * @return self
     */
    public function setLinkId(int $linkId): self
    {
        $this->linkId = $linkId;

        return $this;
    }

    /**
     * @param string $tableData
     *
     * @return self
     */
    public function setTableData(string $tableData): self
    {
        $this->tableData = $tableData;

        return $this;
    }

    /**
     * @param int $isClick
     *
     * @return self
     */
    public function setIsClick(int $isClick): self
    {
        $this->isClick = $isClick;

        return $this;
    }

    /**
     * @param int $isVisit
     *
     * @return self
     */
    public function setIsVisit(int $isVisit): self
    {
        $this->isVisit = $isVisit;

        return $this;
    }

    /**
     * @param int $visitTime
     *
     * @return self
     */
    public function setVisitTime(int $visitTime): self
    {
        $this->visitTime = $visitTime;

        return $this;
    }

    /**
     * @param int $addTime
     *
     * @return self
     */
    public function setAddTime(int $addTime): self
    {
        $this->addTime = $addTime;

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
    public function getNoticeType(): ?string
    {
        return $this->noticeType;
    }

    /**
     * @return int
     */
    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    /**
     * @return int
     */
    public function getLinkId(): ?int
    {
        return $this->linkId;
    }

    /**
     * @return string
     */
    public function getTableData(): ?string
    {
        return $this->tableData;
    }

    /**
     * @return int
     */
    public function getIsClick(): ?int
    {
        return $this->isClick;
    }

    /**
     * @return int
     */
    public function getIsVisit(): ?int
    {
        return $this->isVisit;
    }

    /**
     * @return int
     */
    public function getVisitTime(): ?int
    {
        return $this->visitTime;
    }

    /**
     * @return int
     */
    public function getAddTime(): ?int
    {
        return $this->addTime;
    }

}
