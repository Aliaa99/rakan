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
  
        <div class="modal-dialog"> 
            <div class="modal-content"> 
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Sign In</a></li>
                    <li><a href="#">Sign up</a></li>
                </ul>

                <!-- Modal root -->
                <div class="m-header"> 
                    <h2 class="myModalLabel"> Sign Up </h2> 
                </div> 
  
                <!-- Modal body -->
                    <form>
                        <!-- username input -->
                        <input type="text" class="form-control" id="username" placeholder="Username"> 
                        <input type="text" class="form-control" id="username" placeholder="Username"> 
                        <input type="text" class="form-control" id="username" placeholder="Username"> 


                        <button type="submit">Sign Up</button> 
                    </form>
                        <!-- Modal footer -->
                        <div class="footer"> 
                            <p> 
                                Already have an account?! 
                                <a href="#loginModal" data-toggle="modal" data-dismiss="modal"> Login! </a> 
                            </p> 
                        </div> 
            </div> 
        </div> 




<?php
    include 'controllers/footer.php';
?>
