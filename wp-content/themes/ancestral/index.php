<?php
    /* Template Name: home */
    get_header();

?>
<div class="header_content">
    <p class="embrace">EMBRACE ANCESTRAL</p>
    <p class="feel">FEEL ALIVE</p>
    <a href="" class="shopbtn">SHOP NOW</a>
</div>
</div>
<!-- header wrap -->
<div class="starter_pack_wrap">
    <div class="starter_pack">
        <div class="starter_pack_content">
            <p class="line1"><?php echo get_field('line1')?></p>
            <p class="line2"><?php echo get_field('line2')?></p>
            <a href="#" class="get_started_Btn"><?php echo get_field('get_started_btn')?></a>
            <p class="line3">
                <?php echo get_field('line3')?>
                <span class="line3sub"><?php echo get_field('line3_sub')?></span>
            </p>
        </div>
        <div class="container impact">
            <div class="row">
                <?php 
                // Check rows existexists.
                if( have_rows('impact_list') ):

                    // Loop through rows.
                    while( have_rows('impact_list') ) : the_row();

                        // Load sub field value.
                        $impact = get_sub_field('impact_text');
                        // Do something...?>
                <div class="col-md-4">
                    <div class="box-check">
                        <i class="fa-solid fa-check"></i>
                        <p><?php echo $impact?></p>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif;?>
            </div>

            <img src="<?php echo get_field('impact_img')['url']?>" alt="" />
        </div>
    </div>
    <!-- starter_pack_wrap -->

    <div class="putting_back_wrap position-relative">
        <div class="putting_back">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="product_img">
                            <img src="<?php echo get_field('putting_back_img1')?>" alt="" />
                            <img src="<?php echo get_field('putting_back_img2')?>" alt="" />
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="product_detail">
                            <div class="line1">
                                <?php echo get_field('put_line1')?>
                            </div>
                            <div class="line2">
                                <?php echo get_field('put_line2')?>
                            </div>
                            <div class="line3 line3custom">
                                <?php echo get_field('put_line3')?>
                            </div>
                            <div class="container g-0 mb-5">
                                <div class="row">

                                    <?php 
                                    // Check rows existexists.
                                    if( have_rows('put_list') ):

                                        // Loop through rows.
                                        while( have_rows('put_list') ) : the_row();

                                            // Load sub field value.
                                            $item = get_sub_field('item');
                                            // Do something...?>

                                    <div class="col-xl-6 col-6">
                                        <div class="box-check custom">
                                            <i class="fa-solid fa-check"></i>
                                            <p><?php echo $item?></p>
                                        </div>
                                    </div>

                                    <?php endwhile; ?>
                                    <?php endif;?>

                                </div>
                            </div>
                            <a href="#" class="shop_btn"><?php echo get_field('put_btn')?></a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="seen_btn">AS SEEN IN</span>
        </div>
    </div>

    <div class="slider_wrap d-flex">
        <div class="slider d-flex">
            <div class="slides">
                <?php
                
                // Check rows existexists.
                if( have_rows('slider_logo') ):

                    // Loop through rows.
                    while( have_rows('slider_logo') ) : the_row();

                        // Load sub field value.
                        $logo = get_sub_field('logo');
                        // Do something...?>

                <img src="<?php echo $logo?>" alt="" />

                <?php endwhile; ?>
                <?php endif;?>

            </div>
        </div>
    </div>

    <div class="mountain_wrap">
        <div class="feel_alive">
            <img src="<?php echo get_field('feel_alive_img')?>" alt="" />
        </div>
        <div class="mountain">
            <div class="container mountain_box">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="mountain_left">
                            <?php if( have_rows('mountain_left') ): ?>
                            <?php while( have_rows('mountain_left') ): the_row(); ?>
                            <div class="mountain_left_title">
                                <?php 
                                        echo get_sub_field('mountain_left_title');
                                        ?>
                            </div>
                            <div class="mountain_left_text">
                                <?php echo get_sub_field('mountain_left_content')?>
                            </div>
                            <div class="shop_supplements_btn">
                                <i class="fa-solid fa-arrow-right"></i>
                                <a href="#">
                                    <?php echo get_sub_field('shop_sup')?>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="mountain_right">
                            <?php if (have_rows('mountain_right')): ?>
                            <?php while( have_rows('mountain_right') ): the_row(); ?>
                            <div class="mountain_right_title">
                                <?php echo get_sub_field('mountain_right_title')?>
                            </div>
                            <ul class="mountain_list">
                                <?php if (have_rows('mountain_right_content')): ?>
                                <?php while( have_rows('mountain_right_content') ): the_row(); ?>
                                <li>
                                    <div class="box-check custom">
                                        <i class="fa-solid fa-check"></i>
                                        <p><?php echo get_sub_field('content')?></p>
                                    </div>
                                </li>
                                <?php endwhile;?>
                                <?php endif;?>


                            </ul>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ancestral_products_wrap">
        <div class="container ancestral_products">
            <div class="row">
                <div class="col-12">
                    <p class="restore_title">Restore Your Vitality</p>
                </div>
                <div class="col-12">
                    <p class="restore_title1">Explore Ancestral Supplements</p>
                </div>
            </div>
        </div>
        <div class="slide-container swiper mySwiper">
            <div class="card-wrapper swiper-wrapper ">
                <div class="product_wrap swiper-slide">
                    <div class="product">
                        <div class="supplement_img">
                            <img src="images/products/GrassFedBeefLiver_medium@2x.webp" alt="" />
                        </div>
                        <div class="supplement_info text-center">
                            <div class="supplement_title">Grass Fed Beef Liver</div>
                            <div class="rate">
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <span>582 Reviews</span>
                            </div>
                            <div class="effect">
                                Supports energy, detox, digestion and whole body
                            </div>
                            <div class="price">827.100₫</div>

                            <div class="check_sub">
                                <div class="exclamination position-relative">
                                    <i class="fa-solid fa-exclamation"></i>
                                    <p class="using">
                                        10% off and FREE shipping on all US subscription
                                        orders. Change or cancel anytime.
                                    </p>
                                </div>
                                <input type="checkbox" name="check_subscribe" id="check_subscribe" />
                                <label for="check_subscribe" class="checkbox position-relative">Subscribe
                                    (10%
                                    Off)</label>
                            </div>
                            <input type="checkbox" name="checkOneTime" id="checkOneTime" class="cbox" />
                            <label for="checkOneTime" class="checkbox onetime position-relative"
                                onclick="hideShip()">One
                                Time</label>
                            <br />
                            <div class="shipment">
                                <label for="ship">Ships every:</label>
                                <select name="ship" id="ship">
                                    <option value="1month">1 Month (Most popular)</option>
                                    <option value="2month">2 Months</option>
                                    <option value="3month">3 Months</option>
                                </select>
                            </div>
                            <br />
                            <div class="increase_btn">
                                <span class="minus"><i class="fa-solid fa-minus"></i></span>
                                <span class="number">0</span>
                                <span class="plus"><i class="fa-solid fa-plus"></i></span>
                            </div>
                            <span class="add_tocart">ADD TO CART</span>
                        </div>
                    </div>
                </div>
                <div class="product_wrap swiper-slide">
                    <div class="product">
                        <div class="supplement_img">
                            <img src="images/products/GrassFedBeefOrgans_medium@2x.webp" alt="" />
                        </div>
                        <div class="supplement_info text-center">
                            <div class="supplement_title">Grass Fed Beef Organs</div>
                            <div class="rate">
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <span>405 Reviews</span>
                            </div>
                            <div class="effect">
                                Supports energy, detox, digestion and whole body
                            </div>
                            <div class="price">1.046.700₫</div>

                            <div class="check_sub">
                                <div class="exclamination position-relative">
                                    <i class="fa-solid fa-exclamation"></i>
                                    <p class="using">
                                        10% off and FREE shipping on all US subscription
                                        orders. Change or cancel anytime.
                                    </p>
                                </div>
                                <input type="checkbox" name="check_subscribe" id="check_subscribe" />
                                <label for="check_subscribe" class="checkbox position-relative">Subscribe
                                    (10%
                                    Off)</label>
                            </div>
                            <input type="checkbox" name="checkOneTime" id="checkOneTime" class="cbox" />
                            <label for="checkOneTime" class="checkbox onetime position-relative"
                                onclick="hideShip()">One
                                Time</label>
                            <br />
                            <div class="shipment">
                                <label for="ship">Ships every:</label>
                                <select name="ship" id="ship">
                                    <option value="1month">1 Month (Most popular)</option>
                                    <option value="2month">2 Months</option>
                                    <option value="3month">3 Months</option>
                                </select>
                            </div>
                            <br />
                            <div class="increase_btn">
                                <span class="minus"><i class="fa-solid fa-minus"></i></span>
                                <span class="number">0</span>
                                <span class="plus"><i class="fa-solid fa-plus"></i></span>
                            </div>
                            <span class="add_tocart">ADD TO CART</span>
                        </div>
                    </div>
                </div>

                <div class="product_wrap swiper-slide">
                    <div class="product">
                        <div class="supplement_img">
                            <img src="images/products/GrassFedBeefThyroid_medium@2x.webp" alt="" />
                        </div>
                        <div class="supplement_info text-center">
                            <div class="supplement_title">Grass Fed Beef Thyroid</div>
                            <div class="rate">
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <span>505 Reviews</span>
                            </div>
                            <div class="effect">
                                Supports weight loss issues, muscle recovery, energy, improved mood and
                                sleep quality
                            </div>
                            <div class="price">1.221.300₫</div>

                            <div class="check_sub">
                                <div class="exclamination position-relative">
                                    <i class="fa-solid fa-exclamation"></i>
                                    <p class="using">
                                        10% off and FREE shipping on all US subscription
                                        orders. Change or cancel anytime.
                                    </p>
                                </div>
                                <input type="checkbox" name="check_subscribe" id="check_subscribe" />
                                <label for="check_subscribe" class="checkbox position-relative">Subscribe
                                    (10%
                                    Off)</label>
                            </div>
                            <input type="checkbox" name="checkOneTime" id="checkOneTime" class="cbox" />
                            <label for="checkOneTime" class="checkbox onetime position-relative"
                                onclick="hideShip()">One
                                Time</label>
                            <br />
                            <div class="shipment">
                                <label for="ship">Ships every:</label>
                                <select name="ship" id="ship">
                                    <option value="1month">1 Month (Most popular)</option>
                                    <option value="2month">2 Months</option>
                                    <option value="3month">3 Months</option>
                                </select>
                            </div>
                            <br />
                            <div class="increase_btn">
                                <span class="minus"><i class="fa-solid fa-minus"></i></span>
                                <span class="number">0</span>
                                <span class="plus"><i class="fa-solid fa-plus"></i></span>
                            </div>
                            <span class="add_tocart">ADD TO CART</span>
                        </div>
                    </div>
                </div>

                <div class="product_wrap swiper-slide">
                    <div class="product">
                        <div class="supplement_img">
                            <img src="images/products/Grass_Fed_Beef_Living_Collagen_25b0f295-b44a-41e5-9fc1-070e2fe16c64_medium@2x.webp"
                                alt="" />
                        </div>
                        <div class="supplement_info text-center">
                            <div class="supplement_title">Grass Fed Beef Living Collagen</div>
                            <div class="rate">
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <span>162 Reviews</span>
                            </div>
                            <div class="effect">
                                Supports hair, skin, and nails, bone and joint health, and anti-aging
                            </div>
                            <div class="price">1.264.500₫</div>

                            <div class="check_sub">
                                <div class="exclamination position-relative">
                                    <i class="fa-solid fa-exclamation"></i>
                                    <p class="using">
                                        10% off and FREE shipping on all US subscription
                                        orders. Change or cancel anytime.
                                    </p>
                                </div>
                                <input type="checkbox" name="check_subscribe" id="check_subscribe" />
                                <label for="check_subscribe" class="checkbox position-relative">Subscribe
                                    (10%
                                    Off)</label>
                            </div>
                            <input type="checkbox" name="checkOneTime" id="checkOneTime" class="cbox" />
                            <label for="checkOneTime" class="checkbox onetime position-relative"
                                onclick="hideShip()">One
                                Time</label>
                            <br />
                            <div class="shipment">
                                <label for="ship">Ships every:</label>
                                <select name="ship" id="ship">
                                    <option value="1month">1 Month (Most popular)</option>
                                    <option value="2month">2 Months</option>
                                    <option value="3month">3 Months</option>
                                </select>
                            </div>
                            <br />
                            <div class="increase_btn">
                                <span class="minus"><i class="fa-solid fa-minus"></i></span>
                                <span class="number">0</span>
                                <span class="plus"><i class="fa-solid fa-plus"></i></span>
                            </div>
                            <span class="add_tocart">ADD TO CART</span>
                        </div>
                    </div>
                </div>

                <div class="product_wrap swiper-slide">
                    <div class="product">
                        <div class="supplement_img">
                            <img src="images/products/GrassFedBeefLiver_medium@2x.webp" alt="" />
                        </div>
                        <div class="supplement_info text-center">
                            <div class="supplement_title">Grass Fed Beef Liver</div>
                            <div class="rate">
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <span>582 Reviews</span>
                            </div>
                            <div class="effect">
                                Supports energy, detox, digestion and whole body
                            </div>
                            <div class="price">827.100₫</div>

                            <div class="check_sub">
                                <div class="exclamination position-relative">
                                    <i class="fa-solid fa-exclamation"></i>
                                    <p class="using">
                                        10% off and FREE shipping on all US subscription
                                        orders. Change or cancel anytime.
                                    </p>
                                </div>
                                <input type="checkbox" name="check_subscribe" id="check_subscribe" />
                                <label for="check_subscribe" class="checkbox position-relative">Subscribe
                                    (10%
                                    Off)</label>
                            </div>
                            <input type="checkbox" name="checkOneTime" id="checkOneTime" class="cbox" />
                            <label for="checkOneTime" class="checkbox onetime position-relative"
                                onclick="hideShip()">One
                                Time</label>
                            <br />
                            <div class="shipment">
                                <label for="ship">Ships every:</label>
                                <select name="ship" id="ship">
                                    <option value="1month">1 Month (Most popular)</option>
                                    <option value="2month">2 Months</option>
                                    <option value="3month">3 Months</option>
                                </select>
                            </div>
                            <br />
                            <div class="increase_btn">
                                <span class="minus"><i class="fa-solid fa-minus"></i></span>
                                <span class="number">0</span>
                                <span class="plus"><i class="fa-solid fa-plus"></i></span>
                            </div>
                            <span class="add_tocart">ADD TO CART</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- swiper-wrap -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>

    <div class="consultation_wrap">
        <div class="consultation">
            <div class="top_consultation">
                <span><?php echo get_field('help_line1')?></span>
                <p>
                    <?php echo get_field('help_line2')?>
                </p>
                <div class="getbtn">
                    <a href="#!"><?php echo get_field('help_btn')?></a>
                </div>
            </div>
            <div class="bot_consultation d-flex">
                <div class="left_con">
                    <img src="<?php echo get_field('help_left')?>" alt="" />
                </div>
                <div class="right_con">
                    <p>
                        <?php echo get_field('help_right_text')?>
                    </p>
                    <ul class="con_list">
                        <?php if (have_rows('help_right_list')): ?>
                        <?php while(have_rows('help_right_list')): the_row() ?>
                        <li>
                            <div class="box-check custom1">
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    <?php echo get_sub_field('right_list_item')?>
                                </p>
                            </div>
                        </li>

                        <?php endwhile ?>
                        <?php endif ?>
                    </ul>

                    <div class="free_consul">
                        <a href="#!">FREE CONSULTATION</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="review_wrap">
        <div class="review">
            <div class="review_text">
                <span>The Tribe Has Spoken</span>
                <p>Over 50,000+</p>
                <div class="stars">
                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                </div>
                <p>5 Star Reviews</p>
            </div>
        </div>
        <div class="review_slider_container swiper mySwiper">
            <div class="review_slider swiper-wrapper">
                <?php if (have_rows('review_list')): ?>
                <?php while(have_rows('review_list')): the_row() ?>

                <div class="review_ swiper-slide">
                    <div class="rev">
                        <img src="<?php echo get_sub_field('img_review')?>" alt="" />
                        <div class="content_rev">
                            <div class="main_rev">
                                <span>
                                    <?php echo get_sub_field('main_review')?>
                                    <span class="read_more_text">
                                        <?php echo get_sub_field('read_more')?>
                                    </span>
                                </span>
                                <span class="readMore_btn"> <?php echo get_sub_field('read_more_btn')?>
                                </span>
                            </div>
                            <div class="rev_name d-flex">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="name_">
                                    <?php echo get_sub_field('reviewer_name')?>
                                    <br />
                                    <span><?php echo get_sub_field('reviewer_role')?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php endwhile ?>
                <?php endif ?>

            </div>



            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="prev_footer_wrap">
        <div class="prev_footer">
            <p>Explore The Tribe</p>
            <div class="explore">
                <p>@ANCESTRALSUPPLEMENTS</p>
                <div class="shop_now">
                    <a href="#!"><i class="fa-solid fa-arrow-right"></i></a>
                    <a>Shop Now</a>
                </div>
            </div>
        </div>
    </div>


    <div class="prev_mobile_footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="imag position-relative">
                        <img src="images/fter_images/367510502_189965563936681_5791662508015335003_n.jpg" alt="" />
                        <div class="layer">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="imag position-relative">
                        <img src="images/fter_images/366427988_1491672691597419_4703583048102156068_n.jpg" alt="" />
                        <div class="layer">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="prev_footer_images_wrap">
        <div class="prev_footer_images">
            <div class="container fter_img">
                <div class="row">
                    <?php if (have_rows('prev_fter')): ?>
                    <?php while(have_rows('prev_fter')): the_row() ?>
                    <div class="col-2">
                        <div class="imag position-relative">
                            <img src="<?php echo get_sub_field('img')?>" alt="" />
                            <div class="layer">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>
                    <?php endif ?>

                </div>
            </div>
        </div>
    </div>

    <?php
        get_footer();



?>