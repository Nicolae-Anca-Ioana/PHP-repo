<?php
include '../functions.php';
//session_start();
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
            <h1>Form Elements</h1>
                <img src="images/Tech_Atelier_Banner_1_resized.png"/>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row gutter-40 col-mb-80">
                    <div class="postcontent col-lg-9">

                        <h3>Login Form</h3>
                        <div>
                        <?php
                        if (isset($_SESSION['login'])):
                            ?> <div class="alert alert-danger" style="width:30%;text-align:center">
                                <?php echo $_SESSION['login'];
//                                var_dump($_SESSION['login'])

                                ?>
                            </div>
                            <?php unset($_SESSION['login']);

                        ?>
                            </div>
                        <?php endif ?>
                        <form style="max-width: 25rem;" action="loginProcess.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="col-12 form-group">
                                <button class="btn btn-dark m-0" id="register-form-submit" name="register-form-submit" value="register">Login Now</button>
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