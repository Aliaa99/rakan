<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>المفضله</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الرئيسيه</a></li>
            <li class="breadcrumb-item active" aria-current="page">المفضله</li>
        </ol>
    </nav>
    </article>
</section>
<div class="container mb-60 mt-30">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <?php
                include 'controllers/product.php';
            ?>
        </div>
        <div class="col-md-6 col-sm-6">
            <?php
                include 'controllers/product.php';
            ?>
        </div>
        <div class="col-md-6 col-sm-6">
            <?php
                include 'controllers/product.php';
            ?>
        </div>
        <div class="col-md-6 col-sm-6">
            <?php
                include 'controllers/product.php';
            ?>
        </div>
        <div class="col-md-6 col-sm-6">
            <?php
                include 'controllers/product.php';
            ?>
        </div>
    </div>
</div>
<?php
    include 'controllers/footer.php';
?>