<?php
require_once "functions.php";
use App\Entities\Product;

$id= intval($_GET['id']);
$product= $entityManager->getRepository(Product::class)->find($id);
$entityManager->remove($product);
$entityManager->flush();

$_SESSION['deleted'] = 'Your product has been successfully deleted!';
header("Location:public/index.php");


