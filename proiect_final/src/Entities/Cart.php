<?php

namespace App\Entities;


use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="CartRepository")
 * @ORM\Table(name="carts")
 */
class Cart
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
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $address;

    /**
     * @var User
     * @ORM\OneToOne(targetEntity="User", inversedBy="cart")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $users;

    /**
     * @var CartProduct[]
     * @ORM\OneToMany(targetEntity="CartProduct",mappedBy="cart", orphanRemoval=true)
     */
    private $cart_products;

    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Cart
     */
    public function setEmail(string $email): Cart
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Cart
     */
    public function setAddress($address): Cart
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return User
     */
    public function getUsers(): User
    {
        return $this->users;
    }

    /**
     * @param User $users
     * @return Cart
     */
    public function setUsers($users): Cart
    {
        $this->users = $users;
        return $this;
    }

    /**
     * @return CartProduct|CartProduct[]
     */
    public function getCartProducts(): CartProduct
    {
        return $this->cart_products;
    }

    /**
     * @param CartProduct $cart_products
     * @return Cart
     */
    public function setCartProducts(CartProduct $cart_products): Cart
    {
        $this->cart_products = $cart_products;
        return $this;
    }


}