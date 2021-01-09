<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>الملف الشخصى</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الرئيسيه</a></li>
            <li class="breadcrumb-item active" aria-current="page">الملف الشخصى</li>
        </ol>
    </nav>
    </article>
</section>
<div class="setting-account">
    <div class="container">
        <div class="setting-title text-center">
            <p class="p-5"> <a href="#conversation" data-toggle="modal" data-target="#conversation" class="bordered-btn">تغيير ميعاد المحادثه</a></p>

            <img src="images/bg.png" alt="">
            <h4><strong>أحمد على محمد</strong></h4>
            <ul>
                <li class="color-gray"><i class="icon-person px-5"></i>
                    <a href="#change-pass" data-toggle="modal" data-target="#change-pass"> تغيير كلمة المرور</a>
                </li>
                <li class="color-gray"><i class="icon-work px-5"></i>
                    <a href="#new-email" data-toggle="modal" data-target="#new-email"> تحديث البريد الالكترونى</a>
                 </li>
                <li class="color-gray"><i class="icon-pin px-5"></i>
                    <a href="#change-phone" data-toggle="modal" data-target="#change-phone"> تغيير رقم الجوال</a>
                </li>
            </ul>
        </div>

        <div class="tab-setting">
            <ul class="nav nav-pills main">
                <li><a data-toggle="pill" href="#menu1"><i class="icon-person px-5"></i>الملف الشخصى</a></li>
                <li class="active"><a data-toggle="pill" href="#menu2"><i class="icon-ads px-5"></i>السيرة الذاتية </a></li>
                <li><a data-toggle="pill" href="#menu3"><i class="icon-mortarboard px-5"></i>المؤهل العلمى</a></li>
            </ul>

            <div class="row">
                <div class="col-md-8 p-0">
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade">
                            <div class="personal-doc">
                                <h4 class="my-0">الملف الشخصى</h4>
                            </div>
                            <ul class="lists-table">
                                <div class="row">
                                    <div class="col-sm-6 st">
                                        <li>العمر : <span>24</span></li>
                                    </div>
                                    <div class="col-sm-6 st">
                                        <li>موقع شخصى : <span>لا يوجد</span></li>
                                    </div>
                                    <div class="col-sm-6 st">
                                        <li>العمر : <span>24</span></li>
                                    </div>
                                    <div class="col-sm-6 st">
                                        <li>موقع شخصى : <span>لا يوجد</span></li>
                                    </div>
                                </div>
                            </ul>

                        </div>
                        <div id="menu2" class="tab-pane fade  in active">
                            <div class="personal-doc">
                                <h4 class="my-0">السيرة الذاتية</h4>
                            </div>
                            <div class="mt-20 text-center">
                                <img src="images/search__cv.svg" alt="">
                                <h4>لا تمتلك سيرة ذاتية</h4>
                                <p>لا تمتلك سيرة ذاتية من فضل أنشئ سيرة جديده</p>
                                <a href="cv.php" class="newlink"><i class="icon-ads px-5"></i>سيرة جديدة</a>
                                <a href="#" class="bordered-btn">رفع سيرة ذاتية</a>
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <div class="personal-doc">
                                <h4 class="my-0">المؤهل العلمى <a class="float-adjust" href="#qualification" data-toggle="modal" data-target="#qualification"> <i class="fa fa-plus px-5"></i> أضف جديد</a></h4>
                            </div>
                            <div class="body-content">
                                <!-- repeated-section -->
                                <section class="mt-20">
                                    <h5 class="my-0">
                                        <strong class="three-dots">شهادة الملك الصالح للمحاسبة
                                            <div class="dropdown">
                                                <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">  
                                                    <i class="fa fa-ellipsis-h color-gray"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class=" l-h-25" href="#qualification" data-toggle="modal" data-target="#qualification">
                                                            <i class="fa fa-pencil px-5"></i>
                                                            تعديل المؤهل
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#delete" data-toggle="modal" data-target="#delete" class="is-favorite l-h-25 ">
                                                            <i class="fa fa-trash px-5"></i>
                                                            حذف المؤهل 
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </strong>
                                    </h5>
                                    <span>جامعة الملك فيصل</span>
                                    <p>15 ديسمبر 2015</p>
                                </section>
                                <section class="mt-20">
                                    <h5 class="my-0">
                                        <strong class="three-dots">شهادة الملك الصالح 
                                            <div class="dropdown">
                                                <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">  
                                                    <i class="fa fa-ellipsis-h color-gray"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class=" l-h-25" href="#qualification" data-toggle="modal" data-target="#qualification">
                                                            <i class="fa fa-pencil px-5"></i>
                                                            تعديل المؤهل
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#delete" data-toggle="modal" data-target="#delete" class="is-favorite l-h-25 ">
                                                            <i class="fa fa-trash px-5"></i>
                                                            حذف المؤهل 
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </strong>
                                    </h5>
                                    <span>جامعة الملك فيصل</span>
                                    <p>15 ديسمبر 2015</p>
                                </section>
                                <section class="mt-20">
                                    <h5 class="my-0">
                                        <strong class="three-dots">شهادة الملك  
                                            <div class="dropdown">
                                                <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">  
                                                    <i class="fa fa-ellipsis-h color-gray"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class=" l-h-25" href="#qualification" data-toggle="modal" data-target="#qualification">
                                                            <i class="fa fa-pencil px-5"></i>
                                                            تعديل المؤهل
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#delete" data-toggle="modal" data-target="#delete" class="is-favorite l-h-25 ">
                                                            <i class="fa fa-trash px-5"></i>
                                                            حذف المؤهل 
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </strong>
                                    </h5>
                                    <span>جامعة الملك فيصل</span>
                                    <p>15 ديسمبر 2015</p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-0">
                    <div class="left-side">
                        <div class="personal-doc">
                            <h4 class="my-0"><i class="icon-ads color-primary px-5"></i> خبراتى الوظيفيه <a href="#experience" data-toggle="modal" data-target="#experience"> <i class="fa fa-plus px-5"></i> أضف جديد</a></h4>
                        </div>
                        <div class="body-content">
                            <!-- repeated-section -->
                            <section class="mt-20">
                                <h5 class="my-0">
                                    <strong class="three-dots">شهادة الملك الصالح للمحاسبة
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">  
                                                <i class="fa fa-ellipsis-h color-gray"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class=" l-h-25" href="#experience" data-toggle="modal" data-target="#experience">
                                                        <i class="fa fa-pencil px-5"></i>
                                                        تعديل الخبره
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#delete" data-toggle="modal" data-target="#delete" class="is-favorite l-h-25 ">
                                                        <i class="fa fa-trash px-5"></i>
                                                        حذف الخبره 
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </strong>
                                </h5>
                                <p class="job-date">15 ديسمبر 2015</p>
                            </section>
                            <section class="mt-20">
                                <h5 class="my-0">
                                    <strong class="three-dots">شهادة الملك الصالح للمحاسبة
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">  
                                                <i class="fa fa-ellipsis-h color-gray"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class=" l-h-25" href="#experience" data-toggle="modal" data-target="#experience">
                                                        <i class="fa fa-pencil px-5"></i>
                                                        تعديل الخبره
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#delete" data-toggle="modal" data-target="#delete" class="is-favorite l-h-25 ">
                                                        <i class="fa fa-trash px-5"></i>
                                                        حذف الخبره 
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </strong>
                                </h5>
                                <p class="job-date">15 ديسمبر 2015</p>
                            </section>
                        </div>
                    </div>

                    <div class="left-side">
                        <div class="personal-doc">
                            <h4 class="my-0"><i class="icon-mortarboard color-primary px-5"></i> مهاراتى <a href="#skills" data-toggle="modal" data-target="#skills"> <i class="fa fa-plus px-5"></i> أضف جديد</a></h4>
                        </div>
                        <div class="body-content">
                            <ul>
                                <li class="span-style">
                                    <span><a href="#" class="close-item remove">x</a>إدارة محاسبة</span>
                                </li>
                                <li class="span-style">
                                    <span><a href="#" class="close-item remove">x</a>إدارة محاسبة</span>
                                </li>
                                <li class="span-style">
                                    <span><a href="#" class="close-item remove">x</a>إدارة محاسبة</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>


                    <!-- change-pass modal -->
                    <div class="modal fade text-center" id="change-pass" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content p-20">
                                <div class="modal-body model-style">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="images/green/change_password.png" alt="">
                                    <h3>
                                    تغيير كلمة المرور
                                    </h3>
                                    <div class="row">
                                        <form class="global-form">
                                            <div class="form-horizontal mb-20">
                                                <div class=" mb-0">
                                                    <input type="text" class="form-control"  placeholder="كلمة المرور الحالية" >
                                                </div>
                                            </div>
                                            <div class="form-horizontal mb-20">
                                                <div class="">
                                                    <input type="text" class="form-control"  placeholder="كلمة المرور الجديدة" >
                                                </div>
                                            </div>
                                            <div class="form-horizontal mb-20">
                                                <div class=" mb-0">
                                                    <input type="text" class="form-control"  placeholder="تاكيد كلمة المرور الجديدة "  >
                                                </div>
                                            </div>
                                            <div class="form-group ">  
                                                <div >
                                                <button type="submit" style="width:100%" class="btn btn-primary">تغيير</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- new-email modal -->
                    <div class="modal fade text-center" id="new-email" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content p-20">
                                <div class="modal-body model-style">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="images/green/email.png" alt="">
                                    <h3>
                                     تحديث البريد الالكترونى
                                    </h3>
                                    <div class="row">
                                        <form class="global-form">
                                            <div class="form-horizontal mb-20">
                                                <div class=" mb-0">
                                                    <input type="email" class="form-control"  placeholder=" ادخل بريدك الجديد" >
                                                </div>
                                            </div>
                                            <div class="form-group ">  
                                                <div >
                                                <button type="submit" style="width:100%" class="btn btn-primary">تحديث</button>
                                                </div>
                                            </div>
                                            <div class="form-group ">  
                                                <div >
                                                 <p>
                                                 سيتم ارسال رسالة تاكيد
                                                 </p>
                                                </div>
                                            </div>                                            

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- change-phone modal -->
                    <div class="modal fade text-center" id="change-phone" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content p-20">
                                <div class="modal-body model-style">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="images/green/password.png" alt="">
                                    <h3>
                                     تغيير رقم الجوال
                                    </h3>
                                    <div class="row">
                                        <form class="global-form">
                                            <div class="form-horizontal mb-20">
                                                <div class=" mb-0">
                                                    <input type="number" class="form-control"  placeholder=" رقم الجوال الحالى" >
                                                </div>
                                            </div>
                                            <div class="form-horizontal mb-20">
                                                <div class=" mb-0">
                                                    <input type="number" class="form-control"  placeholder=" رقم الجوال الجديد" >
                                                </div>
                                            </div>                                             
                                            <div class="form-group ">  
                                                <div >
                                                    <button type="submit" style="width:100%" class="btn btn-primary">تغيير</button>
                                                </div>
                                            </div>
                                            <div class="form-group ">  
                                                <div >
                                                 <p>
                                                 سيتم ارسال رسالة تاكيد
                                                 </p>
                                                </div>
                                            </div>                                            

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

    </div>
</div>
<?php
    include 'controllers/footer.php';
?>