<?php
include '../functions.php';
use App\Entities\Product;
//$id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<?php
include '../parts/head.php';
?>
<body>

<div id="wrapper" class="container clearfix">
    <?php
    include '../parts/header.php';
    ?>
    <div class="row">
        <div class ="col-12">
            <?php foreach ($entityManager->getRepository(Product::class)->findAll() as $product): ?>

            <div class="alert alert-danger" role="alert">
               <?php echo $product->getName()?><?php echo $product->getDescription()?>
                <a href="../processDelete.php?id=<?php echo $product->getId();; ?>" type="button" class="btn btn-danger">Yes </a>
                <a href="http://45.15.23.59/national03/anca/proiect_final/public/index.php" type="button" class="btn btn-danger"> NO </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
</body>
</html>






























<!--<form method="post" action="path('app_course_group_delete','id': course_group.id" onsubmit="return confirm('Are you sure you want to delete this item?');">-->
<!--    <input type="hidden" name="_token" value="{{ csrf_token('delete' ~ course_group.id) }}">-->
<!--    <button class="btn">Delete</button>-->
<!--</form>-->