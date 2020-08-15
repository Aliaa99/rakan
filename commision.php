<?php
    include 'controllers/header.php';
?>
    <div class="container  m-h-50 mb-60">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="sideprofile">
                    <section class="global-head">
                        <article>
                            <h4><strong>Commision</strong></h4>
                            <p>Change your settings</p>
                        </article>
                    </section>
                        <!-- tabs -->
                     <ul class="nav nav-tabs nav-stacked">
                        <li class="active"><a data-toggle="tab" href="#commision">Commision</a></li>
                        <li><a data-toggle="tab" href="#bank-accounts">Bank Accounts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="profilepage">
                    <div class="tab-content">
                        <!-- tabs content -->
                        <!-- Commision -->
                        <div id="commision" class="tab-pane fade in active">
                            <section class="global-head">
                                <article>
                                    <h4><strong>Commision</strong></h4>
                                    <p>calculate website's commision</p>
                                </article>
                            </section>
                            <!-- form -->
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >Price</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control"  placeholder="150 USD" >
                                        <span class="validation-color">You should pay 50 USD</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for ="" class="control-label col-sm-3" >Account Name</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" >
                                            <option value="" selected disabled>Account Name</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3">
                                        <label for="choose-photo" class="control-label " >Photo</label>
                                    </div>
                                    <div class="col-sm-9 mb-20">
                                        <input class="photo"  type="file" >
                                    </div>
                                </div>
                                <div class="form-group">        
                                    <div class="col-sm-offset-6 col-sm-4">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <!-- Bank Accounts -->
                        <div id="bank-accounts" class="tab-pane fade">
                            <section class="global-head">
                                <article>
                                    <h4><strong>Bank Account</strong></h4>
                                    <p>Bank Account that use to send money by website</p>
                                </article>
                            </section>
                            <section class="place-ad" style="margin-bottom: 0;padding: 25px">
                                <h4><strong>Saib Bank</strong></h4>
                                <ul>
                                    <li><span class="color-gray">Owner Name : </span><span>Ahmed Khaled</span></li>
                                    <li><span class="color-gray">Bank Name : </span><span>Saib Bank</span></li>
                                    <li><span class="color-gray">Account Number : </span><span>23423423423423</span></li>
                                    <li><span class="color-gray">IBAN Number : </span><span>342342342342</span></li>
                                </ul>
                            </section>
                            <section class="place-ad" style="margin-bottom: 0;padding: 25px">
                                <h4><strong>Saib Bank</strong></h4>
                                <ul>
                                    <li><span class="color-gray">Owner Name : </span><span>Ahmed Khaled</span></li>
                                    <li><span class="color-gray">Bank Name : </span><span>Saib Bank</span></li>
                                    <li><span class="color-gray">Account Number : </span><span>23423423423423</span></li>
                                    <li><span class="color-gray">IBAN Number : </span><span>342342342342</span></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'controllers/footer.php';
?>