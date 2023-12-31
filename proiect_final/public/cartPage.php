<?php
include '../functions.php';
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

<!-- Page Title
    ============================================= -->
<section id="page-title" style="background-color: white">

    <div class="container">
        <h1>Cart</h1>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">

            <table class="table cart mb-5">
                <thead>
                <tr>
                    <th class="cart-product-remove">&nbsp;</th>
                    <th class="cart-product-thumbnail">&nbsp;</th>
                    <th class="cart-product-name">Product</th>
                    <th class="cart-product-price">Unit Price</th>
                    <th class="cart-product-quantity">Quantity</th>
                    <th class="cart-product-subtotal">Total</th>
                </tr>
                </thead>
                <tbody>
                <tr class="cart_item">
                    <td class="cart-product-remove">
                        <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                    </td>

                    <td class="cart-product-thumbnail">
                        <a href="#"><img width="64" height="64" src="images/shop/thumbs/small/dress-3.jpg" alt="Pink Printed Dress"></a>
                    </td>

                    <td class="cart-product-name">
                        <a href="#">Pink Printed Dress</a>
                    </td>

                    <td class="cart-product-price">
                        <span class="amount">$19.99</span>
                    </td>

                    <td class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input type="text" name="quantity" value="2" class="qty" />
                            <input type="button" value="+" class="plus">
                        </div>
                    </td>

                    <td class="cart-product-subtotal">
                        <span class="amount">$39.98</span>
                    </td>
                </tr>
                <tr class="cart_item">
                    <td class="cart-product-remove">
                        <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                    </td>

                    <td class="cart-product-thumbnail">
                        <a href="#"><img width="64" height="64" src="images/shop/thumbs/small/shoes-2.jpg" alt="Checked Canvas Shoes"></a>
                    </td>

                    <td class="cart-product-name">
                        <a href="#">Checked Canvas Shoes</a>
                    </td>

                    <td class="cart-product-price">
                        <span class="amount">$24.99</span>
                    </td>

                    <td class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input type="text" name="quantity" value="1" class="qty" />
                            <input type="button" value="+" class="plus">
                        </div>
                    </td>

                    <td class="cart-product-subtotal">
                        <span class="amount">$24.99</span>
                    </td>
                </tr>
                <tr class="cart_item">
                    <td class="cart-product-remove">
                        <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                    </td>

                    <td class="cart-product-thumbnail">
                        <a href="#"><img width="64" height="64" src="images/shop/thumbs/small/tshirt-2.jpg" alt="Pink Printed Dress"></a>
                    </td>

                    <td class="cart-product-name">
                        <a href="#">Blue Men Tshirt</a>
                    </td>

                    <td class="cart-product-price">
                        <span class="amount">$13.99</span>
                    </td>

                    <td class="cart-product-quantity">
                        <div class="quantity">
                            <input type="button" value="-" class="minus">
                            <input type="text" name="quantity" value="3" class="qty" />
                            <input type="button" value="+" class="plus">
                        </div>
                    </td>

                    <td class="cart-product-subtotal">
                        <span class="amount">$41.97</span>
                    </td>
                </tr>
                <tr class="cart_item">
                    <td colspan="6">
                        <div class="row justify-content-between py-2 col-mb-30">
                            <div class="col-lg-auto pe-lg-0">
                                <a href="#" class="button button-3d m-0">Update Cart</a>
                                <a href="shop.html" class="button button-3d mt-2 mt-sm-0 me-0">Proceed to Checkout</a>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>

            </table>



                <div class="col-lg-6">
                    <h4>Cart Totals</h4>

                    <div class="table-responsive">
                        <table class="table cart cart-totals">
                            <tbody>
                            <tr class="cart_item">
                                <td class="cart-product-name">
                                    <strong>Cart Subtotal</strong>
                                </td>

                                <td class="cart-product-name">
                                    <span class="amount">$106.94</span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="cart-product-name">
                                    <strong>Shipping</strong>
                                </td>

                                <td class="cart-product-name">
                                    <span class="amount">Free Delivery</span>
                                </td>
                            </tr>
                            <tr class="cart_item">
                                <td class="cart-product-name">
                                    <strong>Total</strong>
                                </td>

                                <td class="cart-product-name">
                                    <span class="amount color lead"><strong>$106.94</strong></span>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- #content end -->
    <?php
    include '../parts/footer.php'
    ?>

    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>