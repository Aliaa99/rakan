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
                <li class="color-gray"><i class="icon-person px-5"></i>مهندس</li>
                <li class="color-gray"><i class="icon-work px-5"></i>صاحب عمل </li>
                <li class="color-gray"><i class="icon-pin px-5"></i>الدمام</li>
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


                    <!-- qualification modal -->
                    <div class="modal fade text-center" id="qualification" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content p-0">
                                <div class="modal-header p-0">
                                    <section class="global-head global-head__no-border text-center mt-0 p-20">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <article>
                                            <h4><strong>مؤهل علمى جديد</strong></h4>
                                            <p>من فضلك أكمل البيانات لاضافة مؤهل علمى جديد </p>
                                        </article>
                                    </section>
                                </div>
                                <div class="modal-body model-style">
                                    <div class="row">
                                        <form class="global-form">
                                            <div class="form-horizontal mb-20">
                                                <div class="form-group mb-0">
                                                    <label class="control-label col-sm-4" >
                                                        <span class="color-gray">عنوان المؤهل</span>
                                                        <span class="is-required">*</span>
                                                        <br />
                                                        <span class="validation-color">عنوان المؤهل بالتفصيل</span>
                                                    </label>
                                                    
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"  placeholder="عنوان المؤهل بالتفصيل" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal mb-20">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" >
                                                        <span class="color-gray">مصدر المؤهل</span>
                                                        <span class="is-required">*</span>
                                                        <br />
                                                        <span class="validation-color">مصدر المؤهل</span>
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="select">
                                                            <select  class="form-control select-style" >
                                                                <option value="" selected disabled class="option form-control" >مصدر المؤهل</option>
                                                                <option class="option form-control">2</option>
                                                                <option class="option form-control">3</option>
                                                                <option class="option form-control">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal mb-20">
                                                <div class="form-group mb-0">
                                                    <label class="control-label col-sm-4" >
                                                        <span class="color-gray">فترة المؤهل</span>
                                                        <span class="is-required">*</span>
                                                        <br />
                                                        <span class="validation-color">فترة المؤهل</span>
                                                    </label>
                                                    
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control"  placeholder="الحد الأدنى" >
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control"  placeholder="الحد الأقصى" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">  
                                                <div class="col-sm-6 mt-20">
                                                    <label class="control-label" >هذه البيانات مطلوبه ويجب إدخالها (*)</label>
                                                </div>      
                                                <div class="col-sm-offset-2 col-sm-4 mt-20">
                                                <button type="submit" style="width:100%" class="btn btn-primary">أضف</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- experience modal -->
                    <div class="modal fade text-center" id="experience" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content p-0">
                                <div class="modal-header p-0">
                                    <section class="global-head global-head__no-border text-center mt-0 p-20">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <article>
                                            <h4><strong>خبراتى الوظيفيه الجديده</strong></h4>
                                            <p>من فضلك أكمل البيانات لاضافة خبراتك الوظيفيه الجديده </p>
                                        </article>
                                    </section>
                                </div>
                                <div class="modal-body model-style">
                                    <div class="row">
                                        <form class="global-form">
                                            <div class="form-horizontal mb-20">
                                                <div class="form-group mb-0">
                                                    <label class="control-label col-sm-4" >
                                                        <span class="color-gray">عنوان الخبره</span>
                                                        <span class="is-required">*</span>
                                                        <br />
                                                        <span class="validation-color">عنوان الخبره بالتفصيل</span>
                                                    </label>
                                                    
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"  placeholder="عنوان الخبره بالتفصيل" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal mb-20">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4" >
                                                        <span class="color-gray">مصدر الخبره</span>
                                                        <span class="is-required">*</span>
                                                        <br />
                                                        <span class="validation-color">مصدر الخبره</span>
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <div class="select">
                                                            <select  class="form-control select-style" >
                                                                <option value="" selected disabled class="option form-control" >مصدر الخبره</option>
                                                                <option class="option form-control">2</option>
                                                                <option class="option form-control">3</option>
                                                                <option class="option form-control">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal mb-20">
                                                <div class="form-group mb-0">
                                                    <label class="control-label col-sm-4" >
                                                        <span class="color-gray">فترة الوظيفه</span>
                                                        <span class="is-required">*</span>
                                                        <br />
                                                        <span class="validation-color">فترة الوظيفه</span>
                                                    </label>
                                                    
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control"  placeholder="الحد الأدنى" >
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control"  placeholder="الحد الأقصى" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">  
                                                <div class="col-sm-6 mt-20">
                                                    <label class="control-label" >هذه البيانات مطلوبه ويجب إدخالها (*)</label>
                                                </div>      
                                                <div class="col-sm-offset-2 col-sm-4 mt-20">
                                                <button type="submit" style="width:100%" class="btn btn-primary">أضف</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- skills modal -->
                    <div class="modal fade text-center" id="skills" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content p-0">
                                <div class="modal-header p-0">
                                    <section class="global-head global-head__no-border text-center mt-0 p-20">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <article>
                                            <h4><strong>مهاره جديده</strong></h4>
                                            <p>من فضلك أكمل البيانات لاضافة مهاره جديده </p>
                                        </article>
                                    </section>
                                </div>
                                <div class="modal-body model-style">
                                    <div class="row">
                                        <form class="global-form">
                                            <div class="form-horizontal mb-20">
                                                <div class="form-group mb-0">
                                                    <label class="control-label col-sm-4" >
                                                        <span class="color-gray">عنوان المهاره</span>
                                                        <span class="is-required">*</span>
                                                        <br />
                                                        <span class="validation-color">عنوان المهاره بالتفصيل</span>
                                                    </label>
                                                    
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"  placeholder="عنوان المهاره بالتفصيل" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">  
                                                <div class="col-sm-6 mt-20">
                                                    <label class="control-label" >هذه البيانات مطلوبه ويجب إدخالها (*)</label>
                                                </div>      
                                                <div class="col-sm-offset-2 col-sm-4 mt-20">
                                                <button type="submit" style="width:100%" class="btn btn-primary">أضف</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- delete modal -->
                    <div class="modal fade text-center" id="delete" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content delete-modal p-0">
                                <div class="modal-header p-0">
                                    <section class="global-head global-head__no-border text-center mt-0 p-20">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <article>
                                            <h4><strong>تاكيد الحذف</strong></h4>
                                            <p>هل أنت متأكد ؟ </p>
                                        </article>
                                    </section>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <button class="delete-btn">حذف</button>
                                        </div>
                                        <div class="col-sm-6">
                                        <button class="withdraw-btn">تراجع</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Conversation Date -->
                    <div class="modal fade text-center" id="conversation" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content p-0">
                                <div class="modal-header p-0">
                                    <section class="global-head global-head__no-border text-center mt-0 p-20">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <article>
                                            <h4><strong>تحديد موعد المقابله</strong></h4>
                                            <p>من فضلك أكمل البيانات للوصول للوظيفه المرغوبه   </p>
                                        </article>
                                    </section>
                                </div>
                                <div class="modal-body model-style">
                                    <div class="row">
                                        <form class="global-form">
                                            <div class="form-horizontal mb-20">
                                                <div class="form-group mb-0">
                                                    <label class="control-label col-sm-4" >
                                                        <span class="color-gray">ميعاد المقابله</span>
                                                        <span class="is-required">*</span>
                                                        <br />
                                                        <span class="validation-color">ميعاد المقابله </span>
                                                    </label>
                                                    
                                                    <div class="col-sm-8">
                                                        <input type="date" class="form-control"  placeholder="ميعاد المقابله " >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-horizontal mb-20">
                                                <div class="form-group mb-0">
                                                    <label class="control-label col-sm-4" >
                                                        <span class="color-gray">نص وصفى</span>
                                                        <span class="is-required">*</span>
                                                        <br />
                                                        <span class="validation-color">نص وصفى </span>
                                                    </label>
                                                    
                                                    <div class="col-sm-8">
                                                        <textarea name="" id="" cols="10" rows="5" placeholder="نص وصفى "></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">  
                                                <div class="col-sm-6 mt-20">
                                                    <label class="control-label" >هذه البيانات مطلوبه ويجب إدخالها (*)</label>
                                                </div>      
                                                <div class="col-sm-offset-2 col-sm-4 mt-20">
                                                <button type="submit" style="width:100%" class="btn btn-primary">حفظ</button>
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
        </div>

    </div>
</div>
<?php
    include 'controllers/footer.php';
?>