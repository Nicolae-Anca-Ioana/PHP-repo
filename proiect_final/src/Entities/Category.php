<?php
/**
 * Created by PhpStorm.
 * User: Anca
 * Date: 10/23/2022
 * Time: 9:10 AM
 */

namespace App\Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Category
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
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $parent_id;

    /**
     * @var Product[]
     * @ORM\OneToMany(targetEntity="Product", mappedBy="category",orphanRemoval=true)
     */
    private $products;

    /**
     * @return int
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
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parent_id;
    }

    /**
     * @param integer $parent_id
     * @return Category
     */
    public function setParentId($parent_id): Category
    {
        $this->parent_id = $parent_id;
        return $this;
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Product[] $products
     * @return Category
     */
    public function setProducts($products)
    {
        $this->products = $products;
        return $this;
    }



}