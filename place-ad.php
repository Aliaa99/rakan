<?php
    include 'controllers/header.php';
?>
    <div class="container">
                <!-- place an Ad -->
        <section class="global-head">
            <article>
                <h4><strong>Place an Ad</strong></h4>
                <p>Please make sure you add all details to your Ad</p>
            </article>
        </section>
        <!--  edit form to add details to Ad -->
        <section class="place-ad form-horizontal">
            <form action="">
                <div class="row">
                    <!-- title -->
                    <section class="p-20 pt-30">
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" placeholder="Title" name="">
                                <span class="validation-color">70 characters left</span>
                            </div>
                        </div>
                        <!-- main category -->
                        <div class="form-group">
                            <label for ="sel1" class="control-label col-sm-2" >Main category</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="sel1">
                                    <option value="" selected disabled>Search About Category</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <!-- Description -->
                    <section class="p-20">
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Description</label>
                            <div class="col-sm-10">
                                <textarea name="" id="" cols="30" rows="4" placeholder="write a description"></textarea>
                                <span class="validation-color">4689 characters left</span>
                            </div>
                        </div>
                        <!-- photos -->
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Photos</label>
                            <div class="col-sm-10 mb-20">
                                <div  class="relative">
                                    <input class="multable-photos" id="file-input" type="file" multiple>
                                    <div id="preview" class="pro-images">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <section class="p-20">
                        <div class="form-group">
                            <label for ="" class="control-label col-sm-2" >Country</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="">
                                    <option value="" selected disabled>Egypt</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                    </section>
                    <hr>
                                        
                    <!-- <div class="col-md-2 col-sm-4 mb-20">
                        <label for="name"> Name</label>
                    </div>
                    <div class="col-md-4 col-sm-8 mb-20">
                        <input type="text" class="form-control" id="NAme" placeholder="Add Name">
                    </div>
                    <div class="col-md-2 col-sm-4 mb-20">
                        <label for="mobile-num">Mobile Number</label>
                    </div>
                    <div class="col-md-4 col-sm-8 mb-20">
                        <input type="number" class="form-control" id="mobile-num" placeholder="Add Number">
                    </div>
                    <div class="col-md-2 col-sm-4 mb-20">
                        <label for="email-add">Email Address</label>
                    </div>
                    <div class="col-md-4 col-sm-8 mb-20">
                        <input type="email" class="form-control" id="email-add" placeholder="Add Email">
                    </div> -->
                    <!-- gender -->
                    <section class="p-20">
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Gender</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="">
                                    <option value="" selected disabled>Choose</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <label class="control-label col-sm-2" >Size</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="" placeholder="Size" name="">
                            </div>
                            <label class="control-label col-sm-2 pt-20" >Year</label>
                            <div class="col-sm-4 pt-20">
                                <input type="text" class="form-control" id="" placeholder="Year" name="">
                            </div>
                            <label class="control-label col-sm-2 pt-20" >Shape</label>
                            <div class="col-sm-4 pt-20">
                                <input type="text" class="form-control" id="" placeholder="Shape" name="">
                            </div>
                        </div>
                    </section>
                    <hr>
                    <!-- contact me -->
                    <section class="p-20">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Show Your Phone ?</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">Activate Chat ?</label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <div class="col-sm-12">
                        <label for="contact-me">Contact me by</label>
                    </div>
                    <div class="col-md-10 col-sm-8 mb-20">
                        <label class="radio-inline"><input type="radio" name="optradio" checked>Phone</label>
                        <label class="radio-inline"><input type="radio" name="optradio">message</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Both</label>
                    </div>
                    <!-- submit -->
                    <div class="col-sm-12 text-right p-20">
                        <a href="product-details.php" class="p-20">Preview Your Ad</a>
                        <button class="btn btn-primary " width="100%" type="button"><small>Submit </small></button>
                    </div>
                </div>
            </form>
        </section>
    </div>
<?php
    include 'controllers/footer.php';
?>