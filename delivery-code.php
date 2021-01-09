<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>كود الإستلام</strong></h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="auction-details.php">تفاصيل المزاد</a></li>
                <li class="breadcrumb-item active" aria-current="page">كود الإستلام</li>
            </ol>
        </nav>
    </article>
</section>
<div class="container m-h-50 mb-60 mt-30">
    <div class="row">
        <div class="col-sm-12 text-center py-20">
            <img src="images/illustrations_images/code.png" class="mb-4 mx-auto" width="40%" alt="">
        </div>
        <div class="col-sm-12">
            <h4 class="mt-30"><strong>من فضلك عند استلام المنتج أعط هذا الكود لصاحب المزاد (البائع) لكى تتم عملية تأكيد الاستلام</strong></h4>
            <form action="">
                <h6 class="mt-30"><strong>كود الاستلام</strong></h6>
                </div>
                <div class="col-sm-5 mt-5">
                    <input type="text" class="form-control"  value="1234" disabled >
                </div>
                <!-- <div class="col-sm-12">
                    <button type="button" class="btn btn-primary mt-20"><small>تم التسليم</small></button>
                </div> -->
            </form>
        </div>
    </div>
</div>
<?php
    include 'controllers/footer.php';
?>