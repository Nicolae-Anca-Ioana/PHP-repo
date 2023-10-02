<?php
/**
 * Created by PhpStorm.
 * User: Anca
 * Date: 10/23/2022
 * Time: 9:09 AM
 */

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
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
     * @ORM\Column(type="string", length=200, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     * @ORM\Column(type="string", length=200, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     * @ORM\Column(type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $address;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $phone;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $role;

    /**
     * @var Cart
     * @ORM\OneToOne(targetEntity="Cart", mappedBy="users",orphanRemoval=true)
     */
    private $cart;

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
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
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
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return Cart
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @param Cart $cart
     * @return User
     */
    public function setCart($cart): User
    {
        $this->cart = $cart;
        return $this;
    }


}