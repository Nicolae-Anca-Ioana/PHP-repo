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

            <div class="container clearfix">
                <h1>Register</h1>
                <img src="images/Tech_Atelier_Banner_1_resized.png"/>

            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div class="row">


                        <div class="col-md-8">


                            <h3>Register Now!</h3>

                            <p>Welcome to Tech Atelier. Register to buy your favourite products! </p>
                            <?php
                            if (isset($_SESSION['not-confirmed'])) {
                                ?> <div class="alert alert-danger" style="width: 30%; text-align:center"><?php echo $_SESSION['not-confirmed']?> </div>
                                <?php unset($_SESSION['not-confirmed']);
                            }?>

                            <form id="register-form" class="row" action="registerProcess.php" method="POST">

                                <div class="col-6 form-group">
                                    <label for="register-form-name">First Name:</label>
                                    <input type="text" id="register-form-name" name="first-name" class="form-control" />
                                </div>
                                <div class="col-6 form-group">
                                    <label for="register-form-name">Last Name:</label>
                                    <input type="text" id="register-form-name" name="last-name"  class="form-control" />
                                </div>

                                <div class="col-6 form-group">
                                    <label for="register-form-email">Email Address:</label>
                                    <input type="email" id="register-form-email" name="email"  class="form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-6 form-group">
                                    <label for="register-form-username">Address</label>
                                    <input type="text" id="register-form-username" name="address"  class="form-control" />
                                </div>

                                <div class="col-6 form-group">
                                    <label for="register-form-phone">Phone:</label>
                                    <input type="tel" id="register-form-phone" name="phone"  class="form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-6 form-group">
                                    <label for="register-form-password">Choose Password:</label>
                                    <input type="password" id="register-form-password" name="password"  class="form-control" />
                                </div>

                                <div class="col-6 form-group">
                                    <label for="register-form-repassword">Re-enter Password:</label>
                                    <input type="password" id="register-form-repassword" name="confirm-password" class="form-control" />
                                </div>
                                <div class="col-6 form-group">
                                    <label for="register-form-name"></label>
                                    <input type="hidden" id="register-form-name" name="user"  class="form-control" />
                                </div>

<!--                                <div class="w-100"></div>-->

                                <div class="col-12 form-group">
                                    <button class="btn btn-dark m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                                </div>

                            </form>

                        </div>

                    </div>

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
