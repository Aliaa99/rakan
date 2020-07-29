<?php
    include 'controllers/header.php';
?>
    <div class="container">
        <div class="ro">
            <div class="col-md-4">
                <!-- side information -->
                <div class="sideprofile">
                    <section class="global-head">
                        <article class="text-center">
                            <img src="images/watch.png" alt="">
                            <h4><strong>Ahmed</strong></h4>
                            <p>suadiarabia</p>
                        </article>
                    </section>
                    <div class="text-center edit-pro">
                        <a href="../my-profile.php">Edit profile</a>
                    </div>
                        <!-- detailes -->
                     <ul >
                        <li class="active padingstyle"><span class="mr">fullname</span>mohamed ali</li>
                        <li class="active padingstyle"><span class="mr">Email</span>mohamed ali@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8">
                <!-- my advertisment -->
                <section class="global-head">
                    <article>
                        <h4><strong>personal information</strong></h4>
                        <p>change your personal information</p>
                    </article>
                </section>

                <!-- product -->

                <section class="product-card">
                    <div class="row">
                        <div class="col-sm-9">
                            <a href="product-details.php">
                                <h4><strong>Pre owned rolex</strong></h4>
                                
                                <p> <img src="images/saudi.svg" class="mb-4" width="20px" alt=""> <span class="px-10 size-10 color-gray">Rolex watches</span> - <span class="px-10 size-10 color-gray">Saudi Arabia</span> <span class="rate">4.5 <i class="icon-star"></i></span></p>
                                <p class="product-card__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error unde sequi nobis asperiores eos quidem saepe consequuntur sint, atque dignissimos, ut perferendis commodi rerum aspernatur ratione doloremque ipsam quibusdam similique!</p>
                            </a>
                        </div>
                        <div class="col-sm-3 text-center">
                            <a href="product-details.php">
                                <img class="product-card__img" src="images/watch.png" width="50%" alt="">
                            </a>
                        </div>
                        <div class="btn-group fullwidth" role="group" aria-label="...">
                            <button type="button" class="btn btn-default text-center "><a href="#"><i class="fa fa-pencil newcolor" aria-hidden="true"></i><span class="px-10 newcolor">Edit</span></a></button>
                            <!-- can take class "is-favorite" -->
                            <button type="button" class="btn btn-default text-center is-favorite" data-toggle="modal" data-target="#delete"> <i class="fa fa-trash" aria-hidden="true"></i><span class="px-10">Delete</span></button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

        <!-- delete modal -->
        <div id="delete" class="modal fade text-center" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <!-- body -->
                    <div class="modal-body">
                        <section class="global-head">
                            <article>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4><strong>Delete Your Advertisment</strong></h4>
                                <p>Make sure of your desision</p>
                            </article>
                        </section>
                        <div class="modal-buttons">
                            <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary mt-20" width="100%" type="button"><small>Delete </small></button>                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    include 'controllers/footer.php';
?>