<?php
require_once "functions.php";
use \App\Entities\Product;

$id=$_GET["id"];
$product = $entityManager->getRepository(Product::class)->find($_GET['id']);
$product->setName($_POST['name']);
$product->setPrice($_POST['price']);
$product->setDescription($_POST['description']);
$product->setStockQuantity($_POST['stock_quantity']);

$entityManager->persist($product);
$entityManager->flush();

$_SESSION['edited'] = 'Your product has been edited!';
header('Location:public/individualPage.php?id='.$_GET['id']);






