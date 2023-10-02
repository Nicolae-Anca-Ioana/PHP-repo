<?php
include '../functions.php';
use \App\Entities\Product;
?>

<!DOCTYPE html>
<html>
<?php
include '../parts/head.php';
?>
<body>
<div id="wrapper" class="clearfix">
    <?php
    include '../parts/header.php';
    ?>
<?php
$id= $_GET['id'];
$product= $entityManager->getRepository(Product::class)->find($id);

?>

    <!-- Page Title
   ============================================= -->
    <section id="page-title" style="background-color: white; margin-bottom: 50px">

        <div class="container clearfix">
            <h1>Product Page</h1>

        </div>

    </section><!-- #page-title end -->
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="single-product">
                <div class="product">

                    <div class="row gutter-40">


                        <!-- Shop
           ============================================= -->
                        <div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">
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
                                                    <a href="#"><?php echo $product->getName()?> <?php echo $product->getDescription()?>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        <div class="col-md-5 product-desc">

                            <div class="d-flex align-items-center justify-content-between">

                                <!-- Product Single - Price
                                ============================================= -->
                                <div class="product-price"><i><?php echo $product->getPrice()?> RON</i></div><!-- Product Single - Price End -->


                            </div>



                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                            <form class="cart mb-0 d-flex justify-content-between align-items-center" method="post" enctype='multipart/form-data' >
                                <button type="submit" class="add-to-cart button m-0">Add to cart</button>
                                <button type="submit" class="add-to-cart button m-0" style="text-decoration: none;background-color: gray; color: black;"><a href="../processDelete.php?id=<?php echo $product->getId() ?>">Delete Product</a> </button>
                                <button type="submit" class="add-to-cart button m-0" style="text-decoration: none;background-color: gray; color: black;"><a href="updatePage.php?id=<?php echo $product->getId() ?>">Editeza produs</a> </button>

                            </form><!-- Product Single - Quantity & Cart Button End -->

                            <div class="line"></div>



                            <!-- Product Single - Share
                            ============================================= -->
                            <div class="si-share border-0 d-flex justify-content-between align-items-center mt-4">
                                <span>Share:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Product Single - Share End -->

                        </div>


                        <div class="w-100"></div>

                     </div>
                 </div>
            </div>
        </div>
    </div>

</section><!-- #content end -->

</div>

<?php
include '../parts/footer.php'
?>
</body>
</html>