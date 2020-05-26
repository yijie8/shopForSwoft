<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 文章内容表
 * Class ArticleContent
 *
 * @since 2.0
 *
 * @Entity(table="article_content")
 */
class ArticleContent extends Model
{
    /**
     * 文章id
     * @Id(incrementing=false)
     * @Column()
     *
     * @var int
     */
    private $nid;

    /**
     * 文章内容
     *
     * @Column()
     *
     * @var string
     */
    private $content;


    /**
     * @param int $nid
     *
     * @return self
     */
    public function setNid(int $nid): self
    {
        $this->nid = $nid;

        return $this;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return int
     */
    public function getNid(): ?int
    {
        return $this->nid;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

}
