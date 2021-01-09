<?php
    include 'controllers/upper-header.php';
?>
<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>اضافة اعلان جديد</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الملف الشخصى</a></li>
            <li class="breadcrumb-item active" aria-current="page">اضافة اعلان جديد</li>
        </ol>
    </nav>
    </article>
</section>
<div class="container mb-60 mt-30">
    <div class="row">
        
        <div class="col-sm-12">
            <form action="">
                <div class="row">
                    <div class="col-sm-12">
                        <h5><strong>عنوان الاعلان</strong></h5>
                    </div>
                    <div class="col-sm-6 my-5">
                        <input type="text" class="form-control"  placeholder="مثال سياره تويوتا" >
                    </div>
                    <div class="col-sm-6 my-5">
                        <div class="select">
                            <select  class="form-control select-style" >
                                <option value="" selected disabled class="option form-control" >القسم</option>
                                <option class="option form-control">2</option>
                                <option class="option form-control">3</option>
                                <option class="option form-control">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 my-5">
                        <div class="select">
                            <select  class="form-control select-style" >
                                <option value="" selected disabled class="option form-control" >نوع السياره</option>
                                <option class="option form-control">2</option>
                                <option class="option form-control">3</option>
                                <option class="option form-control">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 my-5">
                        <div class="select">
                            <select  class="form-control select-style" >
                                <option value="" selected disabled class="option form-control" >موديل السياره</option>
                                <option class="option form-control">2</option>
                                <option class="option form-control">3</option>
                                <option class="option form-control">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 my-5">
                        <div class="select">
                            <select  class="form-control select-style" >
                                <option value="" selected disabled class="option form-control" >سنة الصنع</option>
                                <option class="option form-control">2</option>
                                <option class="option form-control">3</option>
                                <option class="option form-control">4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <hr class="my-10">
                    </div>
                    <div class="col-sm-12">
                        <h5><strong>رقم الجوال</strong></h5>
                    </div>
                    <div class="col-sm-6 my-5">
                        <div class="input-group mb-20">
                        <input type="text" class="form-control"  placeholder="01123123123" >
                            <span class="input-group-btn">
                                <button class="btn btn-default pa-9" title="اخفاء رقم الجوال" type="button"><i class="icon-key"></i></button>
                            </span>
                        </div><!-- /input-group -->

                        <!-- <input type="text" class="form-control"  placeholder="01123123123" > -->
                    </div>
                    <div class="col-sm-6 ">
                        <h5 class="mt-0 mb-4"><strong>هل ترغب فى تحديد السعر ؟</strong></h5>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male" class="px-10">نعم</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female" class="px-10">لا</label><br>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr class="my-10">
                </div>
                <div class="col-sm-12">
                
                <h5 class="mt-30"><strong>نص الاعلان</strong></h5>
                <textarea name="" id="" cols="30" rows="6" placeholder="تفاصيل الاعلان"></textarea>
                <button type="button" class="btn btn-primary mt-20"  href="#signupModal" data-toggle="modal" data-target="#signupModal">ارسال الاعلان</button>
                </div>

            </form>
        </div>
    </div>
      <!-- sigup modal -->
      <div class="modal" id="signupModal"
            role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true"> 
    
            <div class="modal-dialog signmodel"> 
                <div class="modal-content"> 
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <section>
                        <img src="images/green/confirmation.png" class="mb-4 mx-auto" width="60px" alt="">
                    </section>
                    <h4 class="mb-20 mt-20"><strong>لقد تم ارسال الاعلان</strong></h4>

                    <ul class="d-flex space-around">
                       
                        <li><a href="ad-details.php" class="color-black">
                            <article>
                            <img src="images/vectors/advertiseme.png" class="mb-4 mx-auto primary" width="100%" alt="">

                                <h5><strong>الذهاب للاعلان</strong></h5>
                            </article>
                        </a></li>
                        <li><a href="index.php" class="color-black">
                        <article>
                            <img src="images/vectors/house.png" class="mb-4 mx-auto gray" height="99px" width="100%" alt="">

                                <h5><strong>الذهاب للرئيسيه</strong></h5>
                            </article>
                        </a></li>
                    </ul>
                </div> 
            </div> 
        </div>
</div>
<?php
    include 'controllers/footer.php';
?>