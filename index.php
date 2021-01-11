<?php
    include 'controllers/upper-header.php';
?>
<div class="container py-20 px-0">
    <div class="row">
        <div class="col-md-3 px-0">
            <button class="btn btn-warning" href="#signupModal" data-toggle="modal" data-target="#signupModal">إضافة اعلان</button>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="..." placeholder="ابحث هنا .. ">
                <div class="input-group-btn">
                    <div class="select w-120">
                        <select  class="form-control select-style" >
                            <option value="" selected disabled class="option form-control" >المدينه</option>
                            <option class="option form-control">2</option>
                            <option class="option form-control">3</option>
                            <option class="option form-control">4</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary search-btn" type="button"><i class="icon-search"></i></button>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <section class="video-show">
                <a href="#"><i class="icon-play"></i><br />
                <strong>شاهد الفيديو</strong>
                </a>
            </section>
        </div>
    </div>
</div>
<?php
    include 'controllers/header.php';
?>

    <div class="container px-0 ">
    <section class="comment-area my-10 py-10">
        <ul class="nav nav-tabs auction-tabs ">
            <li class="active"><button class="btn btn-default" data-toggle="tab" href="#personal-info"><strong>المزادات القادمه</strong></button></li>
            <li><button class="btn btn-default" data-toggle="tab" href="#change-pass"><strong>المزادات الحاليه</strong></button></li>
            <li><button class="btn btn-default" data-toggle="tab" href="#change-phone"><strong>المزادات السابقه</strong></button></li>
        </ul>

    </section>
        <div class="profilepage">
            <div class="row">
                <div class="col-md-3 px-0">
                    <div class="input-group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary"> كل الأقسام</button>
                            <button type="button" class="btn btn-primary dropdown-toggle h-34" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-0">
                    <div class="input-group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default"> نوع المزاد</button>
                            <button type="button" class="btn btn-default dropdown-toggle h-34" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><button >Action</button></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-0">
                    <div class="input-group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default"> اختر المدينه</button>
                            <button type="button" class="btn btn-default dropdown-toggle h-34" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <!-- tabs content -->
                <!-- personal-info -->
            <div id="personal-info" class="tab-pane fade in active">
                <!-- form -->
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3" >First Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="first name" placeholder="first name" name="first name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" >Second Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="second name" placeholder="second name" name="second name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" >Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" placeholder="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for ="sel1" class="control-label col-sm-3" >Country</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="sel1">
                                <option value="" selected disabled>Contury</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-6 col-sm-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- change-pass -->
            <div id="change-pass" class="tab-pane fade">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3" >Current password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control"  placeholder="current password" name="current password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" >New Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" placeholder="New password" name="New password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" >New Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control"  placeholder="New password" name="New password">
                        </div>
                    </div>

                    <div class="form-group">        
                        <div class="col-sm-offset-6 col-sm-4">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- change-phone -->
            <div id="change-phone" class="tab-pane fade">
                <form class="form-horizontal deletform">
                    <div class="form-group">
                        <label class="control-label col-sm-3" >Current Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control"  placeholder="current password" >
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-6 col-sm-4">
                            <button type="button" class="btn btn-primary changeform">Confirm</button>
                        </div>
                    </div>
                </form> 
                <!-- form 2 -->
                <form class="form-horizontal none showform" >
                    <div class="form-group">
                        <label class="control-label col-sm-3" >Phone Number</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control"  placeholder="Phone Number" >
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-6 col-sm-4">
                            <button type="submit" class="btn btn-primary ">Update</button>
                        </div>
                    </div>
                </form>   
            </div>
        </div>
    </div>
    </div>

    <section class="comment-area mt-30">
        <h4 class="text-center mt-30 related-ads-title"><strong>قسم الحراج </strong></h4>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-20">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="..." placeholder="ابحث هنا .. ">
                                <div class="input-group-btn">
                                    <div class="select w-120">
                                        <select  class="form-control select-style" >
                                            <option value="" selected disabled class="option form-control" >المدينه</option>
                                            <option class="option form-control">2</option>
                                            <option class="option form-control">3</option>
                                            <option class="option form-control">4</option>
                                        </select>
                                    </div>
                                </div>
                                    <button class="btn btn-primary search-btn" type="button"><i class="icon-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- <button class="btn btn-default" type="button"><i class="icon-search"></i></button> -->
                        </div>
                    </div>
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
                <div class="col-sm-12 text-center">
                    <button class="btn btn-primary mt-30">المزيد</button>
                </div>
            </div>
            </div>

        </div>
    </section>
        

            <!-- sigup modal -->
        <div class="modal" id="signupModal"
            role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true"> 
    
            <div class="modal-dialog signmodel"> 
                <div class="modal-content"> 
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <section>
                        <img src="images/green/choose.png" class="mb-4 mx-auto" width="60px" alt="">
                    </section>
                    <h4 class="mb-20"><strong>من فضلك اختر نوع الاعلان</strong></h4>

                    <ul class="d-flex space-around">
                       
                        <li><a href="terms.php" class="color-black">
                            <article>
                            <img src="images/auction.png" class="mb-4 mx-auto gray" width="100%" alt="">

                                <h5><strong>اعلان مزاد</strong></h5>
                            </article>
                        </a></li>
                        <li><a href="ad-type.php" class="color-black">
                        <article>
                        <img src="images/adds.png" class="mb-4 mx-auto primary" width="100%" alt="">

                                <h5><strong>اعلان حراج</strong></h5>
                            </article>
                        </a></li>
                    </ul>
                </div> 
            </div> 
        </div>

            <!-- forget pass -->
        <div class="modal" id="forgetpass" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
            <div class="modal-dialog signmodel ml-ne"> 
                <div class="modal-content"> 

                    <form class="signupform " id="emailpassword">
                            <!-- Modal root -->
                        <div class="m-header"> 
                            <h4 class="myModalLabel"> forget password </h4> 
                        </div> 
                        <!-- username input -->
                        <input type="email" class="form-control" id="email" placeholder="Email"> 
                        <button type="submit" class="toforget">send</button> 
                    </form>
                </div>
            </div>
        </div>


            <!-- reset password  -->
        <div class="modal" id="resetpass" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
            <div class="modal-dialog signmodel ml-ne"> 
                <div class="modal-content">         
                    <form class="signupform form-inline " id="codepass">

                            <!-- Modal root -->
                        <div class="m-header"> 
                            <h4 class="myModalLabel"> forget password </h4> 
                        </div> 
                        <!-- username input -->
                        <input type="number" class="form-control special" id="number" placeholder="__"> 
                        <input type="number" class="form-control special" id="number2" placeholder="__"> 
                        <input type="number" class="form-control special" id="number3" placeholder="__"> 
                        <input type="number" class="form-control special" id="number4" placeholder="__"> 
                        <button type="submit" class="toforget">confirm</button> 
                    </form>
                </div>
            </div>
        </div>


            <!-- confirm reset password  -->
        <div class="modal" id="newresetpass" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
            <div class="modal-dialog signmodel ml-ne"> 
                <div class="modal-content">         
                    <form class="signupform " id="newpass" >
                            <!-- Modal root -->
                        <div class="m-header"> 
                            <h4 class="myModalLabel"> New password </h4> 
                        </div> 
                        <!-- username input -->
                        <input type="text" class="form-control" id="text" placeholder="New password"> 
                        <input type="text" class="form-control" id="text" placeholder="confirm New password"> 
                        <button type="submit" class="toforget" >confirm</button> 
                    </form>
                </div>
            </div>
        </div>

        <?php
    include 'controllers/footer.php';
?>

