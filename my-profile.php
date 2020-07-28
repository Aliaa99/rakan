<?php
    include 'controllers/header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sideprofile">
                    <section class="global-head">
                        <article>
                            <h4><strong>settings</strong></h4>
                            <p>change your settings</p>
                        </article>
                    </section>
                        <!-- tabs -->
                     <ul class="nav nav-tabs nav-stacked">
                        <li class="active"><a data-toggle="tab" href="#personal-info">personal information</a></li>
                        <li><a data-toggle="tab" href="#change-pass">change password</a></li>
                        <li><a data-toggle="tab" href="#change-phone">change phone number</a></li>
                        <li><a data-toggle="tab" href="#change-email">change email</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    <!-- tabs content -->
                    <!-- personal-info -->
                    <div id="personal-info" class="tab-pane fade in active">
                        <section class="global-head">
                            <article>
                                <h4><strong>personal information</strong></h4>
                                <p>change your personal information</p>
                            </article>
                        </section>
                        <!-- form -->
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-3" >First Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="first name" placeholder="first name" name="first name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" >second Name</label>
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
                                <label for ="sel1" class="control-label col-sm-3" >country</label>
                                <div class="col-sm-6">
                                    <select class="form-control" id="sel1">
                                        <option value="" selected disabled>contury</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-4 col-sm-4">
                                    <button type="submit" class="btn ">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                        <!-- change-pass -->
                    <div id="change-pass" class="tab-pane fade">
                        <section class="global-head">
                            <article>
                                <h4><strong>change password</strong></h4>
                                <p>change your password</p>
                            </article>
                        </section>
                            <!-- form -->
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-3" >current password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="current password" placeholder="current password" name="current password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" >New password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="New password" placeholder="New password" name="New password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" >New password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="New password" placeholder="New password" name="New password">
                                </div>
                            </div>

                            <div class="form-group">        
                                <div class="col-sm-offset-4 col-sm-4">
                                    <button type="submit" class="btn ">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                        <!-- change-phone -->
                    <div id="change-phone" class="tab-pane fade">
                        <section class="global-head">
                            <article>
                                <h4><strong>change phone number</strong></h4>
                                <p>change your change phone number</p>
                            </article>
                        </section>
                            <!-- form -->
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-3" >current password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="current password" placeholder="current password" name="current password">
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-4 col-sm-4">
                                    <button type="submit" class="btn ">confirm</button>
                                </div>
                            </div>
                        </form>    
                    </div>
                        <!-- change-email -->
                    <div id="change-email" class="tab-pane fade">
                        <section class="global-head">
                            <article>
                                <h4><strong>change email</strong></h4>
                                <p>change your change email</p>
                            </article>
                        </section>
                            <!-- form -->
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-3" >current password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="current password" placeholder="current password" name="current password">
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-4 col-sm-4">
                                    <button type="submit" class="btn ">confirm</button>
                                </div>
                            </div>
                        </form>    
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php
    include 'controllers/footer.php';
?>