<?php
/**
 * Created by PhpStorm.
 * User: Anca
 * Date: 10/22/2022
 * Time: 2:20 PM
 */

namespace App\Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ManufacturerRepository")
 * @ORM\Table(name="manufacturers")
 */
class Manufacturer
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
     * @var Product[]
     * @ORM\OneToMany(targetEntity="Product", mappedBy="manufacturer", orphanRemoval=true)
     */
    private $products;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return Manufacturer
     */
    public function setProducts(array $products): Manufacturer
    {
        $this->products = $products;
        return $this;
    }
}