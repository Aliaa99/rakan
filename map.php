<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>الموقع على الخريطه</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">اختر المنطقه</a></li>
            <li class="breadcrumb-item active" aria-current="page">الموقع على الخريطه</li>
        </ol>
    </nav>
    </article>
</section>
<div class="container mb-60 mt-30">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13619.994661900431!2d31.822097349999993!3d31.41416285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1610130353765!5m2!1sen!2seg" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <section class="user-name user-name__borderless  mt-30">
        <button type="button" class="btn btn-primary" onclick="window.location.href='images-upload.php'">
            استمرار
        </button>
        <a href="choose-area.php" class="color-primary">تحديد يدوى </a>
    </section>
</div>
<?php
    include 'controllers/footer.php';
?>