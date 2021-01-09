<?php
    include 'controllers/upper-header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <button class="btn btn-warning" href="#signupModal" data-toggle="modal" data-target="#signupModal">إضافة اعلان</button>
        </div>
    </div>
</div>
<?php
    include 'controllers/header.php';
?>

    <div class="container">
        <ul class="nav nav-tabs auction-tabs">
            <li class="active"><button class="btn" data-toggle="tab" href="#personal-info">المزادات القادمه</button></li>
            <li><button class="btn" data-toggle="tab" href="#change-pass">المزادات الحاليه</button></li>
            <li><button class="btn" data-toggle="tab" href="#change-phone">المزادات السابقه</button></li>
        </ul>
        <div class="profilepage">
            شسيشسيشسي
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

        <!-- Jquery js -->
        <script src="js/jquery-3.2.1.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
