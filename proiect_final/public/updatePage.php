<!--de adaugat css-ul -->
<?php
include '../functions.php';
use App\Entities\Category;
use App\Entities\Product;

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

    <section id="page-title" style="background-color: white">

        <div class="container clearfix" style="text">
            <h1>Update Product Page</h1>
        </div>

    </section>
    <!-- Content
            ============================================= -->
    <section id="content">

        <div class="content-wrap bg-light">

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <h4 class="mb-0">Form Feilds Update</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-result"></div>

                                <div class="form-widget">
                                    <?php
                                    $id=$_GET["id"];

                                    $product = $entityManager->getRepository(App\Entities\Product::class)->find($id);

                                    ?>

                                    <form class="mb-0" id="template-contactform" name="form" action="../processUpdate.php?id=<?php echo $product->getId()?>" method="post" enctype="multipart/form-data">

                                        <div class="row">

                                            <div class="col-12 bottommargin-sm">
                                                <label for="template-contactform-default-select">Category</label>
                                                <select id="template-contactform-default-select" name="category" class="form-select">
                                                    <option value="" disabled selected>Select One</option>
                                                    <?php foreach ($entityManager->getRepository(Category::class)->findAll() as $category): ?>

                                                        <option value="Value"><?php echo $category->getName() ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                            </div>

                                            <div class="col-12 bottommargin-sm">
                                                <label for="template-contactform-default-select">Manufacturer</label>
                                                <select id="template-contactform-default-select" name="manufacturer" class="form-select">
                                                    <option value="" disabled selected>Select One</option>
                                                    <?php foreach ($entityManager->getRepository(\App\Entities\Manufacturer::class)->findAll() as $manufacturer): ?>

                                                        <option value="Value"><?php echo $manufacturer->getName() ?></option>

                                                    <?php endforeach; ?>

                                                </select>
                                            </div>

                                            <div class="col-12 bottommargin-sm">
                                                <label for="template-contactform-name">Name Product</label>
                                                <input type="text" id="template-contactform-name" name="name" value="" class="form-control required" placeholder="Enter the name of the product" />
                                            </div>

                                            <div class="col-12 bottommargin-sm">
                                                <label for="template-contactform-rating" class="mb-0">Price</label>
                                                <input id="template-contactform-rating" name="price" type="number" class="rating" max="9999999" data-size="md">
                                            </div>
<!--                                            <div class="col-12 bottommargin-sm">-->
<!--                                                <label for="template-contactform-upload">Upload Images:</label><br>-->
<!--                                                <input id="template-contactform-upload" type="file" name="template-contactform-upload[]" multiple class="file file-loading" data-show-preview="false">-->
<!--                                            </div>-->


                                            <div class="col-12 bottommargin-sm">
                                                <label for="template-contactform-name">Description</label>
                                                <input type="text" id="template-contactform-name" name="description" value="" class="form-control required" placeholder="Enter description of the product" />
                                            </div>
                                            <div class="col-12 bottommargin-sm">
                                                <label for="template-contactform-rating" class="mb-0">Stock Quantity</label>
                                                <input id="template-contactform-rating" name="stock_quantity" type="number" class="rating" max="9999" data-size="md">
                                            </div>




                                            <!--                                        <div class="col-12 bottommargin-sm">-->
                                            <!--                                            <label for="template-contactform-message">Description:<small class="text-danger">*</small></label>-->
                                            <!--                                            <textarea class="required form-control textarea-message" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>-->
                                            <!--                                        </div>-->




<!--                                            <div class="col-12 d-none">-->
<!--                                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" />-->
<!--                                            </div>-->
                                            <div class="col-12">
                                                <button type="submit" name="template-contactform-submit" class="btn btn-secondary w-100 btn-lg" style="background-color: #48c9b0">UPDATE PRODUCT</button>
                                            </div>

<!--                                            <input type="hidden" name="prefix" value="template-contactform-">-->

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #content end -->

</div>
</body>
</html>

