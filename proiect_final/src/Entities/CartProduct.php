<?php
/**
 * Created by PhpStorm.
 * User: Anca
 * Date: 10/23/2022
 * Time: 9:10 AM
 */

namespace App\Entities;


//use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CartProductRepository")
 * @ORM\Table(name="cart_products")
 */
class CartProduct
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $quantity;

    /**
     * @var Cart
     * @ORM\ManyToOne(targetEntity="Cart", inversedBy="cart_products")
     * @ORM\JoinColumn(name="cart_id",referencedColumnName="id")
     */
    private $cart;


//Test1
    /**
     * @var Product
     * @ORM\ManyToOne(targetEntity="Product",inversedBy="cartItems")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;


    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return CartProduct
     */
    public function setProduct(Product $product): CartProduct
    {
        $this->product = $product;
        return $this;
    }

//End Test 1

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


    /**
     * @return Cart
     */
    public function getCart(): Cart
    {
        return $this->cart;
    }

    /**
     * @param Cart $cart
     * @return CartProduct
     */
    public function setCart($cart): CartProduct
    {
        $this->cart = $cart;
        return $this;
    }



}