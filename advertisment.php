<?php
    include 'controllers/header.php';
?>
    <div class="container m-h-50 mb-60">
        <div class="row">
            <div class="col-md-3 col-sm-5">
                <!-- side information -->
                <div class="sideprofile">
                    <section class="global-head">
                        <article class="text-center">
                            <img src="images/profile.png" alt="">
                            <h4><strong>Ahmed</strong></h4>
                            <p>Suadiarabia</p>
                        </article>
                    </section>
                    <div class="text-center edit-pro">
                        <a href="my-profile.php"><strong>Edit Profile</strong></a>
                    </div>
                        <!-- detailes -->
                     <ul >
                        <li class="active padingstyle"><span>Fullname </span><span>mohamed ali</span></li>
                        <li class="active padingstyle"><span>Email </span><span>mohamed ali@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-7">
                <!-- my advertisment -->
                <section class="global-head">
                    <article>
                        <h4><strong>Personal Information</strong></h4>
                        <p>Change your personal information</p>
                    </article>
                </section>

                <!-- product -->
                <?php
                    include 'controllers/advert.php';
                ?>
                <?php
                    include 'controllers/advert.php';
                ?>
                <?php
                    include 'controllers/advert.php';
                ?>
                <?php
                    include 'controllers/advert.php';
                ?>
                <?php
                    include 'controllers/advert.php';
                ?>
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