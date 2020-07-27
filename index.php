<?php
    include 'controllers/header.php';
?>


        <div class="tele-academy-paging">
            <div class="container text-center">
                <p class="color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cumque praesentium corporis rem atque delectus suscipit! Ducimus, suscipit doloremque quisquam omnis modi rem placeat, reiciendis quidem veniam praesentium laboriosam. Molestias.</p>
                <h2>New Member </h2>
                <a href="#signupModal" data-toggle="modal" class="newmemb">new member</a>
                <p>I Already have an account</p>
                <a href="#signupModal" data-toggle="modal"> Signin</a>
            </div>
        </div>



  
    <div class="modal" id="signupModal"
         role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true"> 
  
        <div class="modal-dialog signmodel"> 
            <div class="modal-content"> 

                <ul class="nav nav-pills pillsstyle">
                    <li class="active"><a data-toggle="pill" href="#home">SignUp</a></li>
                    <li><a data-toggle="pill" href="#menu1">LogIn</a></li>
                </ul>

                <!-- Modal body -->
                <div class="tab-content">
                    <!-- signup tap -->
                    <div id="home" class="tab-pane fade in active">
                        
                                    <!-- Modal root -->
                        <div class="m-header"> 
                            <h4 class="myModalLabel"> Sign Up </h4> 
                        </div> 
  

                        <form class="signupform">
                            <!-- username input -->
                            <input type="text" class="form-control" id="username" placeholder="Username"> 
                            <input type="number" class="form-control" id="phonenumber" placeholder="phonenumber"> 
                            <input type="email" class="form-control" id="email" placeholder="Email"> 
                            <input type="text" class="form-control" id="country" placeholder="country"> 
                            <input type="password" class="form-control" id="password" placeholder="password"> 
                            <input type="password" class="form-control" id="confirmpassword" placeholder="confirm password"> 

                            <button type="submit">Sign Up</button> 
                        </form>

                                        <!-- Modal footer -->
                        <div class="footer"> 
                            <form>
                                <a href="#">terems&conditions</a>
                                <label class="checkbox-inline">
                                    I agree to all
                                </label>
                                <input type="checkbox" value="">
                            </form>
                            <p> 
                                Already have an account ?
                                <a href="#loginModal" data-toggle="modal" data-dismiss="modal"> Login </a> 
                            </p> 
                        </div> 

                    </div>

                    <!-- login tap -->

                    <div id="menu1" class="tab-pane fade">

                                                        <!-- Modal root -->
                        <div class="m-header"> 
                            <h4 class="myModalLabel"> Sign in </h4> 
                        </div> 
  

                        <form class="signupform">
                            <!-- username input -->
                            <input type="text" class="form-control" id="username" placeholder="Username"> 
                            <input type="email" class="form-control" id="email" placeholder="Email"> 
                            <input type="password" class="form-control" id="password" placeholder="password"> 

                            <button type="submit">Sign Up</button> 
                        </form>

                                        <!-- Modal footer -->
                        <div class="footer"> 
                            <form>
                                <a href="#">terems&conditions</a>
                                <label class="checkbox-inline">
                                    I agree to all
                                </label>
                                <input type="checkbox" value="">
                            </form>
                            <p> 
                                Already have an account ?
                                <a href="#loginModal" data-toggle="modal" data-dismiss="modal"> Login </a> 
                            </p> 
                        </div> 

                    </div>

                </div>

            </div> 
        </div> 




<?php
    include 'controllers/footer.php';
?>
