<?php
/**
 * Created by PhpStorm.
 * User: Anca
 * Date: 10/27/2022
 * Time: 12:17 AM
 */

namespace App\Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="images")
 */
class Image
{
    private $id;

    private $path;

    private $product;

}