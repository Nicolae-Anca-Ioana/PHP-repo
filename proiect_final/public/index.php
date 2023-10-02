<?php
include '../functions.php';
use \App\Entities\Product;
//$products= $entityManager->getRepository(Product::class)->findBy(['name'=>'TEST de sters']);
//$products= $entityManager->getRepository(Product::class)->findAll();
//foreach ($products as $product){
//    echo "<pre>";
//    echo $product->getImage();
//    echo "</pre>";
//
//}
//var_dump(count($products))
?>


<!DOCTYPE html>
<html>

<?php
include '../parts/head.php';
?>
<body>

<!-- Document Wrapper
  ============================================= -->
<div id="wrapper" class="clearfix">

<?php
include '../parts/header.php';
?>




    <!-- Page Title
    ============================================= -->
    <section id="page-title" style="background-color: white">

        <div class="container clearfix">
            <h1>Shop</h1>
            <img src="images/Tech_Atelier_Banner_1_resized.png">
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix">
                <div class="successlogin">
                    <?php if (isset($_SESSION["loggedin"])) : ?>
                    <div class="alert alert-success" style="width:30%;text-align:center">
                        <?php echo $_SESSION["loggedin"]; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <!-- Shop
                ============================================= -->
                <div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">
                    <?php foreach ($entityManager->getRepository(Product::class)->findAll() as $product): ?>

                    <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="grid-inner">

                                <div class="product-image" style="width:200px; height: 250px; object-fit:cover;">
                                    <a href="#"><img src="../images/<?php echo $product->getImage()?>" alt="Image PC"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title">
                                        <h3>
                                            <a href="individualPage.php?id=<?php echo $product->getId()?>"><?php echo $product->getName()?> <?php echo $product->getDescription()?>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="product-price" style="color:#48c9b0; font-weight: bold;font-size:22px  "><?php echo $product->getPrice()?><span> RON</span>
                                    </div>
                                    <button type="button" class="btn btn-outline-secondary" style="background-color:#48c9b0; color: black; border: none">ADD TO CART</button>
                                    <button type="button" class="btn btn-outline-secondary" style="text-decoration: none"><a href="individualPage.php?id=<?php echo $product->getId()?>">View Product</a> </button>
                                </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div><!-- #shop end -->

            </div>
        </div>
    </section><!-- #content end -->

<?php
include '../parts/footer.php'
?>

</div><!-- #wrapper end -->




<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>
</body>

</html>









