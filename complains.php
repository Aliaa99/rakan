<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>الشكاوى والمقترحات</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الملف الشخصى</a></li>
            <li class="breadcrumb-item active" aria-current="page">الشكاوى والمقترحات</li>
        </ol>
    </nav>
    </article>
</section>
<div class="container mb-60 mt-30">
    <div class="row">
        <div class="col-sm-12 text-center py-20">
            <img src="images/illustrations_images/complaints.png" class="mb-4 mx-auto" width="30%" alt="">
        </div>
        <div class="col-sm-12">
            <h5><strong>اختر النوع</strong></h5>
            <form action="">
                <input type="radio" id="male" name="gender" value="male">
                <label for="male" class="px-10">قسم الشكاوى</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female" class="px-10">قسم المقترحات</label><br>

                <h5 class="mt-30"><strong>اقترح علينا</strong></h5>
                <textarea name="" id="" cols="30" rows="6" placeholder="اكتب اقتراحك هنا .."></textarea>
                <button type="button" class="btn btn-primary mt-20">ارسال</button>

            </form>
        </div>
    </div>
</div>
<?php
    include 'controllers/footer.php';
?>