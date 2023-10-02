<!--de adaugat css-ul -->
<?php
include '../functions.php';
use App\Entities\Category;
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

        <div class="container clearfix">
            <h1>Save New Product Page</h1>
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
                            <h4 class="mb-0">Form Feilds</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-widget">
<!--                                <div class="form-result"></div>-->

                                <form class="mb-0" id="template-contactform" method="post" name="products" action="../processSave.php" >
<!--//de folosit names fara underscode-->
                                    <div class="row">
                                        <div class="col-12 bottommargin-sm">
                                                <label for="template-contactform-default-select">Category</label>
                                                <select id="template-contactform-default-select" name="category" class="form-select">
                                                    <option value="" disabled selected>Select One</option>
                                                    <?php foreach ($entityManager->getRepository(Category::class)->findAll() as $category): ?>
                                                        <option value="<?php echo $category->getId() ?>"><?php echo $category->getName() ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                        </div>
                                        <div class="col-12 bottommargin-sm">
                                            <label for="template-contactform-default-select">Manufacturer</label>
                                            <select id="template-contactform-default-select" name="manufacturer" class="form-select">
                                                <option value="" disabled selected>Select One</option>
                                                <?php foreach ($entityManager->getRepository(\App\Entities\Manufacturer::class)->findAll() as $manufacturer): ?>
                                                <option value="<?php echo $manufacturer->getId() ?>"><?php echo $manufacturer->getName() ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-12 bottommargin-sm">
                                            <label for="template-contactform-name">Name Product</label>
                                            <input type="text" id="product_name" name="name" value="" class="form-control required" placeholder="Enter the name of the product" />
                                        </div>

                                        <div class="col-12 bottommargin-sm">
                                            <label for="template-contactform-rating" class="mb-0">Price</label>
                                            <input id="template-contactform-rating" name="price" type="number" class="rating" max="999999" data-size="md">
                                        </div>
<!--                                        <div class="col-12 bottommargin-sm">-->
<!--                                            <label for="template-contactform-upload">Upload Images:</label><br>-->
<!--                                            <input id="template-contactform-upload" type="file" name="image" class="file file-loading">-->
<!--                                        </div>-->

                                        <div class="col-12 form-group">
                                            <label for="image">Image:</label>
                                            <input id="template-contactform-upload" class="form-control" type="file" placeholder="Image" name="image" required />
                                        </div>



                                            <div class="col-12 bottommargin-sm">
                                            <label for="template-contactform-name">Description</label>
                                            <input type="text" id="template-contactform-name" name="description" value="" class="form-control required" placeholder="Enter description of the product" />
                                        </div>
                                        <div class="col-12 bottommargin-sm">
                                            <label for="template-contactform-rating" class="mb-0">Stock Quantity</label>
                                            <input id="template-contactform-rating" name="stock_quantity" type="number" class="rating" max="5000" data-size="md">
                                        </div>


                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-secondary w-100 btn-lg" style="background-color: #48c9b0">ADD NEW PRODUCT</button>
                                        </div>

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

