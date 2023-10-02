<?php
namespace App\Entities;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ProductRepository")
 * @ORM\Table(name="products")
 */
class Product
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
     * @ORM\Column(type="string", length=300, nullable=false)
     */
    private $name;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=false)
     */
    private $price;

    /**
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $image;

    /**
     * @var string
     * @ORM\Column(type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var Category
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id",referencedColumnName="id")
     */
    private $category;

    /**
     * @var Manufacturer
     * @ORM\ManyToOne(targetEntity="Manufacturer",inversedBy="products")
     * @ORM\JoinColumn(name="manufacturer_id",referencedColumnName="id")
     */
    private $manufacturer;

    /**
     * @var integer
     * @ORM\Column(type="integer",nullable=false)
     */
    private $stock_quantity;



//OnetoMany-test1

    /**
     * @var CartProduct
     * @ORM\OneToMany(targetEntity="CartProduct",mappedBy="product", orphanRemoval=true)
     */
    private $cartItems;


    public function __construct()
    {
        $this->image = new ArrayCollection();
        $this->cartItems = new ArrayCollection();
    }

    /**
     * @return CartProduct
     */
    public function getCartItems(): CartProduct
    {
        return $this->cartItems;
    }

    /**
     *
     * @param CartProduct $cartItems
     * @return Product
     */
    public function setCartItems($cartItems): Product
    {
        $this->cartItems = $cartItems;
        return $this;
    }


//end test 1


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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName($name): Product
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Product
     */
    public function setPrice($price): Product
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Product
     */
    public function setImage($image): Product
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Product
     */
    public function setDescription(string $description): Product
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     * @return Product
     */
    public function setCategory($category): Product
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return Manufacturer
     */
    public function getManufacturer(): Manufacturer
    {
        return $this->manufacturer;
    }

    /**
     * @param Manufacturer $manufacturer
     * @return Product
     */
    public function setManufacturer(Manufacturer $manufacturer): Product
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return int
     */
    public function getStockQuantity(): int
    {
        return $this->stock_quantity;
    }

    /**
     * @param int $stock_quantity
     * @return Product
     */
    public function setStockQuantity(int $stock_quantity): Product
    {
        $this->stock_quantity = $stock_quantity;
        return $this;
    }


    public function fromArray($data) {
    foreach ($data as $key => $value) {
        $this->$key = $value;
    }
}

    public function toArray() : array {
    return get_object_vars($this);
    }




}