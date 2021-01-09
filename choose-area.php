<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>اختر المنطقه</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الشروط والأحكام</a></li>
            <li class="breadcrumb-item active" aria-current="page">اختر المنطقه</li>
        </ol>
    </nav>
    </article>
</section>
<div class="container mb-60 mt-30">
    <form action="">
        <h4 class="px-10 py-20 mt-0 user-name user-name__borderless "><strong>اختر المنطقه</strong> <a href="map.php" class="color-primary">تحديد على الخريطه</a></h4>
        <div class="checkbox-card">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" checked="checked" name="radio">
                        <strong>منطقه أ</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه ب</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه ج</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه أ</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه ب</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه ج</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه أ</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
               
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه ج</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه أ</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه ب</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-md-6 col-sm-6">
                    <label class="checkbox-adjust">
                        <input type="radio" name="radio">
                        <strong>منطقه ج</strong>
                        <i class="icon-go px-5"></i>
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary mt-30" onclick="window.location.href='choose-city.php'">
            <!-- <a href="messages.php"> -->
            استمرار
            <!-- </a>     -->
        </button>
    </form>
</div>
<?php
    include 'controllers/footer.php';
?>