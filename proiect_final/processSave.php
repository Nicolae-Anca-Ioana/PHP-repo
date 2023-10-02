<?php
require_once "functions.php";
use App\Entities\Product;
use App\Entities\Category;
use App\Entities\Manufacturer;


$productData= $_POST;
$manufacturer= $entityManager->getRepository(Manufacturer::class)->find($_POST['manufacturer']);
$category= $entityManager->getRepository(Category::class)->find($_POST['category']);

$products= new Product();
$products->setName($_POST['name']);
$products->setPrice($_POST['price']);
$products->setDescription($_POST['description']);
$products->setStockQuantity($_POST['stock_quantity']);
$products->setManufacturer($manufacturer);
$products->setCategory($category);
$products->setImage($_POST['image']);

if (isset($_POST)) {
    $image = $_FILES["image"]["name"];
    $targetDir = "images/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    $acceptedExtensions = array("jpg","jpeg","png","gif");
//    var_dump($targetFile);

    if (in_array($imageFileType, $acceptedExtensions)) {
        if (move_uploaded_file($_FILES["image"]['tmp_name'], $targetDir.$image)) {
            $imageArray = [];
            $imageArray["image"] = $image;
            $products->fromArray($imageArray);

            $entityManager->persist($products);
            $entityManager->flush();
        }
    }
}

$entityManager->persist($products);
$entityManager->flush();

$_SESSION['message'] = "New product was inserted";
header('Location:public/index.php');

