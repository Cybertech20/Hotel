<?php

include "header.php";

?>
    <!--=============================
        BANNER START
    ==============================-->
    <section class="tf__banner">
        <div class="tf__banner_overlay">
            <span class="banner_shape_1">
                <img src="images/tree_5.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_2">
                <img src="images/tree_3.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_3">
                <img src="images/tree_4.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_4">
                <img src="images/tree_6.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_5">
                <img src="images/tree_7.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_6">
                <img src="images/tree_2.png" alt="shape" class="img-fluid w-100">
            </span>
            <div class="col-12">
                <div class="tf__banner_slider" style="background: url(images/bg-banner.jpeg);">
                    <div class="tf__banner_slider_overlay">
                        <div class=" container">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-6 col-md-10 col-lg-6">
                                    <div class="tf__banner_text wow fadeInLeft" data-wow-duration="1s">
                                        <h3>Satisfy Your Cravings</h3>
                                        <h1>Welcome to Gladistar Hotel</h1>
                                        <p>A pinch of passion in every dish.</p>
                                        <form>
                                            <input type="text" placeholder="Search . . .">
                                            <button type="submit" class="common_btn">search</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xxl-5 col-xl-6 col-sm-10 col-md-9 col-lg-6">
                                    <div class="tf__banner_img wow fadeInRight" data-wow-duration="1s">
                                        <div class="img">
                                            <img src="images/slider_img_1.png" alt="food item" class="img-fluid w-100">
                                            <span>
                                                35% off
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BANNER END
    ==============================-->


    <!--=============================
        OFFER ITEM START
    ==============================-->
    <section class="tf__offer_item pt_95 pb_100 xs_pt_65 xs_pb_70">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="tf__section_heading mb_25">
                        <h4>daily offer</h4>
                        <h2>up to 75% off for this day</h2>
                    </div>

                <?php
                echo "Hello World";
                ?>
                </div>
            </div>
            <div class="row offer_item_slider wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-4">
                    <div class="tf__offer_item_single" style="background: url(images/offer_item_img1.jpg);">
                        <span>37% off</span>
                        <a class="title" href="menu_details.html">Chicken Nuggets</a>
                        <p>Our Chicken Nuggets is finger-licking good. </p>
                        
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="tf__offer_item_single" style="background: url(images/offer_item_img2.jpg);">
                        <span>40% off</span>
                        <a class="title" href="menu_details.html">Beef Masala</a>
                        <p>Our Beef Masala is finger-licking good. </p>
                        
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="tf__offer_item_single" style="background: url(images/offer_item_img3.jpg);">
                        <span>55% off</span>
                        <a class="title" href="menu_details.html">Dal Makhani</a>
                        <p>Our Dal Makhani is finger-licking good. </p>
                       
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="tf__offer_item_single" style="background: url(images/offer_item_img2.jpg);">
                        <span>45% off</span>
                        <a class="title" href="menu_details.html">Beef Masala</a>
                        <p>Our beef masala is finger-licking good. Tender beef in a rich sauce, served with rice and naan.
</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=============================
        OFFER ITEM END
    ==============================-->


    <!--=============================
        RESERVATION START
    ==============================-->
    <section class="tf__reservation mt_100 xs_mt_70">
        <div class="container">
            <div class="tf__reservation_bg" style="background: url(images/reserv.jpeg);">
                <div class="row">
                    <div class="col-xl-6 ms-auto">
                        <div class="tf__reservation_form wow fadeInRight" data-wow-duration="1s">
                            <h2>book a table</h2>
                            <form method="post">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__reservation_input_single">
                                            <label for="name">name</label>
                                            <input type="text" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__reservation_input_single">
                                            <label for="email">email</label>
                                            <input type="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__reservation_input_single">
                                            <label for="phone">phone</label>
                                            <input type="text" id="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__reservation_input_single">
                                            <label for="date">select date</label>
                                            <input type="date" id="date">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__reservation_input_single">
                                            <label>select time</label>
                                            <select class="reservation_input select_js">
                                                <option value="">select</option>
                                                <option value="">08.00 am to 09.00 am</option>
                                                <option value="">10.00 am to 11.00 am</option>
                                                <option value="">12.00 pm to 01.00 pm</option>
                                                <option value="">02.00 pm to 03.00 pm</option>
                                                <option value="">04.00 pm to 05.00 pm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__reservation_input_single">
                                            <label>select person</label>
                                            <select class="reservation_input select_js">
                                                <option value="">select</option>
                                                <option value="">1 person</option>
                                                <option value="">2 person</option>
                                                <option value="">3 person</option>
                                                <option value="">4 person</option>
                                                <option value="">5 person</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <a href="mailto:info@gladistar.co.ke"><button type="submit" class="common_btn" >confirm</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        RESERVATION END
    ==============================-->


    <!--=============================
        MENU ITEM START
    ==============================-->
    <section class="tf__menu mt_95 xs_mt_65">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__section_heading mb_25">
                        <h4>food Menu</h4>
                        <h2>Popular Delicious Foods</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="menu_filter d-flex flex-wrap">
                        <button class=" active" data-filter="*">all menu</button>
                        <button data-filter=".burger">burger</button>
                        <button data-filter=".chicken">chicken</button>
                        <button data-filter=".pizza">pizza</button>
                        <button data-filter=".dresserts">dresserts</button>
                    </div>
                </div>
            </div>

            <div class="row grid">
                <div class="col-xxl-3 col-sm-6 col-lg-4 chicken wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_1.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="#">Biryani</a>
                            <h5><b>Hyderabadi biryani</b></h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 burger dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_2.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="#">Chicken</a>
                            <h5><b>Daria Shevtsova</b></h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 chicken wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_3.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="#">burger</a>
                            <h5><b>Spicy Burger</b></h5>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_4.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="#">dressert</a>
                            <h5><b>Fried Chicken</b></h5>
                          
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_5.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="#">kabab</a>
                            <h5><b>Mozzarella Sticks</b></h5>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_6.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="#">kacchi</a>
                            <h5><b>Popcorn Chicken</b></h5>
                          
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_7.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="#">noodles</a>
                            <h5><b>Chicken Wings</b></h5>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-lg-4 burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__menu_item">
                        <div class="tf__menu_item_img">
                            <img src="images/menu2_img_8.jpg" alt="menu" class="img-fluid w-100">
                        </div>
                        <div class="tf__menu_item_text">
                            <a class="category" href="#">grill</a>
                            <h5> <b>Onion Rings</b></h5>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        MENU ITEM END
    ==============================-->


    <!--=============================
        TEAM START
    ==============================-->
    <section class="tf__team mt_100 xs_mt_70 pt_95 xs_pt_65 pb_95 xs_pb_65">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="tf__section_heading mb_25">
                        <h4>our team</h4>
                        <h2>meet our expert chefs</h2>
                    </div>
                </div>
            </div>

            <div class="row team_slider">
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/staff2.jpeg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>ismat joha</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/staff1.jpeg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>arun chandra</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/staff3.jpeg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>isita rahman</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/staff4.jpeg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>khandakar rashed</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="images/staff5.jpeg" alt="team" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_team_text">
                            <h4>naurin nipu</h4>
                            <p>senior chef</p>
                            <ul class="d-flex flex-wrap ">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TEAM END
    ==============================-->


    <!--=============================
        ADD SLIDER START
    ==============================-->
    <section class="tf__add_slider mt_75 xs_mt_45">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__add_slider_single" style="background: url(images/offer_slider_1.png);">
                        <div class="text">
                            <h5>weekly best seller</h5>
                            <h2>Fried Chicken</h2>
                            <p>Our Fried Chicken is finger-licking good. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="tf__add_slider_single" style="background: url(images/offer_slider_2.png);">
                        <div class="text">
                            <h5>daily offer</h5>
                            <h2>Hyderabadi Biryani</h2>
                            <p>Our Hyderabadi is finger-licking good. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        ADD SLIDER END
    ==============================-->


    <!--=============================
        DOWNLOAD APP START
    ==============================-->
    <section class="tf__download mt_100 xs_mt_70">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row download_slider">
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/img9.jpeg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/img2.jpeg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/img4.jpeg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/img7.jpeg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__download_slider">
                            <img src="images/img6.jpeg" alt="app download" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        DOWNLOAD APP END
    ==============================-->


    <!--=============================
       TESTIMONIAL  START
    ==============================-->
    <section class="tf__testimonial pt_90 xs_pt_60 pb_100 xs_pb_70" style="background: url(images/testimonial_bg.jpg);">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="tf__section_heading mb_20">
                        <h4>testimonial</h4>
                        <h2>our customar feedbacks</h2>
                    </div>
                </div>
            </div>

            <div class="row testi_slider">
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="images/nophoto.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>Karen Kosgei</h4>
                            <p class="designation">Nairobi</p>
                            <p class="feedback">I went to to hotel and had my mind blown away.The rooms were clean, very comfortable, and the staff was amazing. ...
They were extremely accommodating and allowed us to check in early at like 10am</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="images/nophoto.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>Jimmy Mambo</h4>
                            <p class="designation">Makueni</p>
                            <p class="feedback">Rooms are spacious, clean and well furnished. Comfortable beds . The location is perfect. Overall , I would rate it as a very good business</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="tf__single_testimonial">
                        <div class="tf__single_testimonial_img">
                            <img src="images/nophoto.jpg" alt="testimonial" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_testimonial_text">
                            <h4>Arnold Omondi</h4>
                            <p class="designation">Makueni</p>
                            <p class="feedback">Everything about the hotel was exceptional. It was clean, stylish, roomy with excellent service in where we had dinner. </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        TESTIMONIAL END
    ==============================-->


    <!--=============================
        COUNTER START  
    ==============================-->
    <section class="tf__counter" style="background: url(images/counter_bg.jpg);">
        <div class="tf__counter_overlay pt_120 xs_pt_90 pb_100 xs_pb_0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="text">
                                <h2 class="counter">10,000</h2>
                                <span><i class="fas fa-user"></i></span>
                            </div>
                            <p>customer serve</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="text">
                                <h2 class="counter">30</h2>
                                <span><i class="fas fa-hat-chef"></i></span>
                            </div>
                            <p>experience chef</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="text">
                                <h2 class="counter">7,000</h2>
                                <span><i class="fas fa-users"></i></span>
                            </div>
                            <p>happy customer</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="tf__single_counter">
                            <div class="text">
                                <h2 class="counter">10</h2>
                                <span><i class="fas fa-trophy"></i></span>
                            </div>
                            <p>winning award</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        COUNTER END
    ==============================-->


  
<?php

include "footer.php";

?>