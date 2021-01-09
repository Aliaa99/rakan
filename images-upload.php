<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>تحميل الصور</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الشروط والأحكام</a></li>
            <li class="breadcrumb-item active" aria-current="page">تحميل الصور</li>
        </ol>
    </nav>
    </article>
</section>
<div class="container mb-60 mt-30">
    <form action="">
        <h4 class="px-10 py-20 mt-0 user-name user-name__borderless "><strong>تحميل الصور</strong></h4>
        <div class="checkbox-card">
            <div class="row">
               تحميل الصور
            </div>
        </div>
        <button type="button" class="btn btn-primary mt-30" onclick="window.location.href='choose-district.php'">
            <!-- <a href="messages.php"> -->
            استمرار
            <!-- </a>     -->
        </button>
    </form>
</div>
<?php
    include 'controllers/footer.php';
?>