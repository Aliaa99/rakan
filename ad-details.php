<?php
    include 'controllers/header.php';
?>
<section class="global-head">
    <div class="layer"></div>
    <article>
        <h4><strong>تفاصيل الإعلان</strong></h4>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">الرئيسيه </a></li>
            <li class="breadcrumb-item active" aria-current="page">تفاصيل الإعلان</li>
        </ol>
    </nav>
    </article>
</section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- slider -->
                <!-- to be displayed correctly both section must have same image src 
                the loop will be done twice
                -->
                <div class="slider-for">
                    <!-- Here -->
                    
                    
                    <section>
                        <img class="img-responsive h-50" src="images/003.png" alt="">
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/003.png" alt="">
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/020.png" alt="">
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/003.png" alt="">
                    </section>
                </div>
                <div class="slider-nav">
                    <!-- and Here -->
                    
                    
                    <div class="item ">
                        <img class="img-responsive" src="images/003.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/003.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/020.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/003.png" alt="">
                    </div>
                </div>

            </div>
            <!-- <div class="col-md-7">
                <section class="product-card">
                    <div class="row">
                        <div class="col-sm-12 padding-adjust">
                            <h4><strong>Pre owned rolex</strong></h4>
                            <p> <img src="images/saudi.svg" class="mb-4" width="20px" alt=""> <span class="px-10 size-10 color-gray">Rolex watches</span> - <span class="px-10 size-10 color-gray">Saudi Arabia</span> <span class="rate">4.5 <i class="icon-star"></i></span></p>
                            <p class="mt-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error unde sequi nobis asperiores eos quidem saepe consequuntur sint, atque dignissimos, ut perferendis commodi rerum aspernatur ratione doloremque ipsam quibusdam similique!</p>
                        </div>
                        <div class="col-sm-12 padding-adjust">
                            <h5 class="mt-20"><strong>Product Details</strong></h5>
                            <ul>
                                <li><p><strong>Year: </strong><span>2020</span></p></li>
                                <li><strong>Shape: </strong><span>Rounded</span></li>
                                <li><strong>Weight: </strong><span>10gm</span></li>
                            </ul>
                        </div>
                        
                        <div class="btn-group mt-30" role="group" aria-label="...">
                            <button type="button" class="btn btn-default text-center"><a href="messages.php"><i class="icon-message_square"></i><span class="px-10">Send Message</span></a></button>
                            <button type="button" class="btn btn-default text-center is-favorite"><i class="icon-heart"></i><span class="px-10">Favorite</span></button>
                            <button type="button" class="btn btn-default text-center"><i class="icon-whatsapp"></i><span class="px-10">Send Whatsapp</span></button>
                            <button type="button" class="btn btn-default text-center"><i class="icon-flag"></i><span class="px-10">Report</span></button>                            

                        </div>
                    </div>
                </section>
            </div> -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <article class="mt-20 comment">
                    <a href="">Ahmed Saad - </a>
                    <span>9:00 AM</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolores illo aliquid vitae commodi quas iure accusantium, nam aut sit adipisci distinctio. Voluptatum illo in molestiae ducimus quibusdam fugit tempore?</p>
                </article>
                <article class="mt-20 comment">
                    <a href="">Ahmed Saad - </a>
                    <span>9:00 AM</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolores illo aliquid vitae commodi quas iure accusantium, nam aut sit adipisci distinctio. Voluptatum illo in molestiae ducimus quibusdam fugit tempore?</p>
                </article>
                <article class="mt-20 comment">
                    <a href="">Ahmed Saad - </a>
                    <span>9:00 AM</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolores illo aliquid vitae commodi quas iure accusantium, nam aut sit adipisci distinctio. Voluptatum illo in molestiae ducimus quibusdam fugit tempore?</p>
                </article>
            </div>
            <div class="col-xs-12 mt-30">
                <form action="">
                    <label for="">أضف تعليق</label>
                    <textarea name="comment" width="100%" id="" cols="15" rows="5" placeholder="اكتب سؤالك للمعلن هنا .."></textarea>
                    <section class="text-left">
                        <button class="btn btn-primary mt-20" type="submit"><small>إضافة السؤال</small></button>
                    </section>
                </form>
            </div>
        </div>
    </div>
    <section class="comment-area mt-30">
        <div class="container">
            <h4 class="text-center mt-30 related-ads-title"><strong>اعلانات مشابهه </strong></h4>
            <div class="row">
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
            </div>
        </div>
    </section>
<?php
    include 'controllers/footer.php';
?>


