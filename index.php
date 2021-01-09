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
