<?php
include '../functions.php';
//use App\Entities\User;
//$pageName = "Admin Page";
//if (!$_SESSION["admin"]) {
//$_SESSION["user-error"] = "You are not authorized to access this section. Please log in as an administrator!";
//header("Location:login.php");
//return;

?>

<!DOCTYPE html>
<html>
<?php
include '../parts/head.php';
?>
<body>
<div id="wrapper" class="clearfix">
    <?php
    include '../parts/admin-header.php';
    ?>

    <section id="page-title" style="background-color: white">
        <div class="successlogin">
            <?php if (isset($_SESSION["loggedin"])) : ?>
                <div class="alert alert-success" style="width:30%;text-align:center">
                    <?php echo $_SESSION["loggedin"]; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container clearfix">
            <h1>Admin page</h1>
            <img src="images/Tech_Atelier_Banner_1_resized.png"/>

        </div>

    </section><!-- #page-title end -->

    <div id="header-wrap" class="border-top border-f5">
    <nav class="primary-menu sub-title">

    <ul class="menu-container">
        <li class="menu-item">
            <a class="menu-link" href="http://45.15.23.59/national03/anca/proiect_final/public/savePage.php"><div>Save Product</div><span>Save product page</span></a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="http://45.15.23.59/national03/anca/proiect_final/public/deletePage.php"><div>Delete Product</div><span>Delete product page</span></a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="http://45.15.23.59/national03/anca/proiect_final/public/index.php"><div>Go Homepage</div><span>Go back to products page</span></a>
        </li>
    </ul>
</nav>
    </div>
</div>
</body>
</html>