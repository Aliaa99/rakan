<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>تسجيل الدخول</strong></h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="auction-details.php">الرئيسيه</a></li>
                <li class="breadcrumb-item active" aria-current="page">تسجيل الدخول</li>
            </ol>
        </nav>
    </article>
</section>
<div class="container">
    <div class="login-p">
        <section class="form-section">
            <form action="">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 mb-30 px-30">
                        <article>
                            <h4 class="mb-20"><strong>تسجيل الدخول</strong></h4>
                        </article>
                        <form action="">
                            <input type="text" class="form-control mb-20"  placeholder="اسم المستخدم / رقم الجوال" >
                            <div class="input-group mb-20">
                                <input type="password" class="form-control" placeholder="كلمة المرور">
                                <span class="input-group-btn">
                                    <button class="btn btn-default pa-9" type="button"><i class="icon-key"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <!-- <input type="password" class="form-control mb-20"  placeholder="كلمة المرور" > -->
                            <a href="forgot-password.php" class="left underlined"> هل نسيت كلمة المرور ؟</a>
                            <button type="submit" style="width:100%" class="btn btn-primary mt-20 mb-20">دخول</button>
                            <hr class="my-10 width-50 mx-auto"/>
                            <p class="mt-20 text-center">ليس لديك حساب ؟ -  
                                <a href="register.php" class="underlined"><strong>حساب جديد</strong></a>
                            </p>
                        </form>
                    </div>
                    <div class="col-sm-6 illustrated"></div>
    
                </div>
            </form>
        </section>
    </div>
</div>

<?php
    include 'controllers/footer.php';
?>