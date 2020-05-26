<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 订单购物详情表
 * Class StoreOrderCartInfo
 *
 * @since 2.0
 *
 * @Entity(table="store_order_cart_info")
 */
class StoreOrderCartInfo extends Model
{
    /**
     * 订单id
     * @Id(incrementing=false)
     * @Column()
     *
     * @var int
     */
    private $oid;

    /**
     * 购物车id
     *
     * @Column(name="cart_id", prop="cartId")
     *
     * @var int
     */
    private $cartId;

    /**
     * 商品ID
     *
     * @Column(name="product_id", prop="productId")
     *
     * @var int
     */
    private $productId;

    /**
     * 购买东西的详细信息
     *
     * @Column(name="cart_info", prop="cartInfo")
     *
     * @var string
     */
    private $cartInfo;

    /**
     * 唯一id
     *
     * @Column()
     *
     * @var string
     */
    private $unique;


    /**
     * @param int $oid
     *
     * @return self
     */
    public function setOid(int $oid): self
    {
        $this->oid = $oid;

        return $this;
    }

    /**
     * @param int $cartId
     *
     * @return self
     */
    public function setCartId(int $cartId): self
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @param string $cartInfo
     *
     * @return self
     */
    public function setCartInfo(string $cartInfo): self
    {
        $this->cartInfo = $cartInfo;

        return $this;
    }

    /**
     * @param string $unique
     *
     * @return self
     */
    public function setUnique(string $unique): self
    {
        $this->unique = $unique;

        return $this;
    }

    /**
     * @return int
     */
    public function getOid(): ?int
    {
        return $this->oid;
    }

    /**
     * @return int
     */
    public function getCartId(): ?int
    {
        return $this->cartId;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @return string
     */
    public function getCartInfo(): ?string
    {
        return $this->cartInfo;
    }

    /**
     * @return string
     */
    public function getUnique(): ?string
    {
        return $this->unique;
    }

}
