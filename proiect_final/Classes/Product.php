<?php
/**
 * Created by PhpStorm.
 * User: Anca
 * Date: 10/19/2022
 * Time: 8:45 PM
 */

namespace Classes;


use Doctrine\ORM\Mapping as ORM;

class Product
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */public $id;
    /**
     * @ORM\Column(type="string")
     */
    public $name;
    /**
     * @ORM\Column(type="string")
     */
    public $price;
    /**
     * @ORM\Column(type="integer")
     */
    public $categoryId;

    public static function getTableName() {
        return'product';
    }

}