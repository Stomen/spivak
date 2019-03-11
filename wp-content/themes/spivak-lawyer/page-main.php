<?php
get_header();
?>

    <main>

        <section class="hero hero-slider-wrapper hero-style-2">
            <div class="hero-slider">
                <?php
                if( have_rows('slider_main') ):
                    while ( have_rows('slider_main') ) : the_row();
                ?>
                        <div class="slide">
                            <img src="<?php  the_sub_field('slide_photo'); ?>" alt class="slider-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col col-lg-8 slide-caption">
                                        <p><?php  the_sub_field('title_slide'); ?></p>
                                        <h2><span><?php  the_sub_field('slide_content'); ?></span></h2>
                                        <div class="btns">
                                            <div class="btn-style btn-style-3"><a href="<?php  the_sub_field('btn_link'); ?>"><?php  the_sub_field('btn_name_slide'); ?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </section>
        <!-- end of hero slider -->
        <!-- .service-area start -->
        <!--<div class="service-area service-area2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3 icon-c">
                                    <div class="service-icon">
                                        <i class="fi flaticon-lawyer"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="service-text">
                                        <span>Book Your</span>
                                        <h3>Appointment</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3 icon-c">
                                    <div class="service-icon">
                                        <i class="fi flaticon-scale"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="service-text">
                                        <span>Get Free</span>
                                        <h3>Expert Advice</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3 icon-c">
                                    <div class="service-icon">
                                        <i class="fi flaticon-network"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="service-text">
                                        <span>You Can Easily</span>
                                        <h3>Join Our Team</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- .service-area end -->
        <!-- .about-area start -->
        <div class="about-area about-area2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6">
                        <div class="about-title">
                            <div class="img-holder">
                                <img src="<?php the_field("block_about_us_photo"); ?>" alt>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <h2><?php the_field("about_us_title"); ?></h2>
                            <?php the_field("about_us_description"); ?>
                            <div class="btns">
                                <div class="btn-style"><a href="<?php the_field("about_us_link"); ?>"><?php the_field("about_us_name_btn"); ?></a></div>
                            </div>
                            <div class="signature">
                                <img src="<?php the_field("photo_about_btn"); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .about-area end -->
        <!-- practice-area start -->
        <div class="practice-area practice-style-1">
            <div class="container">
                <div class="col-l2">
                    <div class="section-title text-center">
                        <span><?php the_field("text_above"); ?></span>
                        <h2><?php the_field("hepls_name_block"); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="service-icon">
                                        <i class="fi flaticon-parents"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="service-text">
                                        <h3>Family Law</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="service-icon">
                                        <i class="fi flaticon-wounded"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="service-text">
                                        <h3>Personal Injury</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="service-icon">
                                        <i class="fi flaticon-employee"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="service-text">
                                        <h3>Business Law</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="service-icon">
                                        <i class="fi flaticon-thief"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="service-text">
                                        <h3>Criminal Law</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="service-icon">
                                        <i class="fi flaticon-university-graduate-hat"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="service-text">
                                        <h3>Education Law</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="service-icon">
                                        <i class="fi flaticon-house"></i>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                    <div class="service-text">
                                        <h3>Real Estate Law</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- practice-area end -->
        <!-- case studiess area start -->
        <div class="studies-area section-padding">
            <div class="container-fluid">
                <!-- studies area start -->
                <div class="col-l2">
                    <div class="section-title section-title2 text-center">
                        <span><?php the_field("faq_above_text"); ?></span>
                        <h2><?php the_field("name_of_faq"); ?></h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="studies-menu text-center">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".Family-Matters">Family Matters</button>
                        <button data-filter=".Real-Estate">Real Estate</button>
                        <button data-filter=".Business">Business</button>
                        <button data-filter=".Criminal">Criminal</button>
                        <button data-filter=".Injury">Injury</button>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-c grid-item Family Matters Business Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/1.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Corporate</p>
                                    <h3>General Service</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-c grid-item Family-Matters Real-Estate Criminal">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/2.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">General</p>
                                    <h3>Personal Issue</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-c grid-item Family-Matters Business Criminal Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/3.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Business</p>
                                    <h3>Business Accounting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-c grid-item Real-Estate Criminal Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/4.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Criminal</p>
                                    <h3>Business Accounting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-c grid-item Real-Estate Business Criminal Family-Matters Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/5.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Family Issue</p>
                                    <h3>Business Accounting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- case studiess area end -->
        <!-- testimonial area start -->
        <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-img">
                            <img src="<?php the_field("testimonials_photo"); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-md-6">
                        <div class="testimonial-text">
                            <div class="title">
                                <span><?php the_field("text_above_testimonials_name"); ?></span>
                                <h2><?php the_field("testimonails_name"); ?></h2>
                            </div>
                            <div class="testimonial-slide owl-carousel">
                                <?php
                                if( have_rows('testimonils_slider') ):
                                    while ( have_rows('testimonils_slider') ) : the_row();
                                        ?>
                                        <div class="slide-item">
                                            <p><?php the_sub_field("testimpnail_title"); ?></p>
                                            <div class="thumb-img">
                                                <img src="<?php the_sub_field("client_photo"); ?>" alt="">
                                            </div>
                                            <div class="img-content">
                                                <h4><?php the_sub_field("client_name"); ?></h4>
                                                <span><?php the_sub_field("client_position"); ?></span>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area start -->
        <!-- .contact area start -->
        <div class="contact-area section-padding" id="consult-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-text">
                            <div class="title">
                                <span><?php the_field("text_above_cons_block"); ?></span>
                                <h2><?php the_field("name_consultation"); ?></h2>
                            </div>
                            <span class="date"></span>
                            <?php the_field("block_text_area_conult"); ?>
                        </div>
                    </div>
                    <div class="col col-lg-7 col-md-12 col-sm-12">
                        <div class="contact-content">
                            <div class="contact-form">
                                <form method="post" class="contact-validation-active" id="contact-form">
                                    <div class="half-col">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="half-col">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="half-col">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="half-col">
                                        <select name="address" id="address" class="form-control">
                                            <option disabled selected>Family Law</option>
                                            <option>Criminal Law</option>
                                            <option>Business Law</option>
                                            <option>Personal Injury</option>
                                            <option>Education Law</option>
                                            <option>Drugs Crime</option>
                                        </select>
                                    </div>
                                    <div>
                                        <textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
                                    </div>
                                    <div class="submit-btn-wrapper">
                                        <button type="submit" class="theme-btn">Appointment</button>
                                        <div id="loader">
                                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .contact area start -->
        <!-- expert-area start -->
        <!--<div class="expert-area section-padding">
            <div class="container">
                <div class="col-l2">
                    <div class="section-title section-title2 text-center">
                        <span>Meet Our Experts</span>
                        <h2>Qualified Attorneys</h2>
                    </div>
                </div>
                <div class="expert-active owl-carousel">
                    <div class="expert-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-p">
                                <div class="expert-single">
                                    <div class="expert-img">
                                        <img src="<?php /*echo get_theme_file_uri(); */?>/assets/images/expert/1.jpg" alt="">
                                    </div>
                                    <div class="expert-content text-center">
                                        <h3>Alecgander Harry</h3>
                                        <span>Business Lawyer</span>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-p">
                                <div class="expert-single">
                                    <div class="expert-img">
                                        <img src="<?php /*echo get_theme_file_uri(); */?>/assets/images/expert/2.jpg" alt="">
                                    </div>
                                    <div class="expert-content text-center">
                                        <h3>Lily Watson</h3>
                                        <span>Family Lawyer</span>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-p">
                                <div class="expert-single">
                                    <div class="expert-img">
                                        <img src="<?php /*echo get_theme_file_uri(); */?>/assets/images/expert/3.jpg" alt="">
                                    </div>
                                    <div class="expert-content text-center">
                                        <h3>Willam Stephen</h3>
                                        <span>Criminal Lawyer</span>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="expert-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-p">
                                <div class="expert-single">
                                    <div class="expert-img">
                                        <img src="<?php /*echo get_theme_file_uri(); */?>/assets/images/expert/4.jpg" alt="">
                                    </div>
                                    <div class="expert-content text-center">
                                        <h3>Eshan Golly</h3>
                                        <span>Business Lawyer</span>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-p">
                                <div class="expert-single">
                                    <div class="expert-img">
                                        <img src="<?php /*echo get_theme_file_uri(); */?>/assets/images/expert/5.jpg" alt="">
                                    </div>
                                    <div class="expert-content text-center">
                                        <h3>Daniel Dambeldor</h3>
                                        <span>Family Lawyer</span>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-p">
                                <div class="expert-single">
                                    <div class="expert-img">
                                        <img src="<?php /*echo get_theme_file_uri(); */?>/assets/images/expert/6.jpg" alt="">
                                    </div>
                                    <div class="expert-content text-center">
                                        <h3>Darcy Alec</h3>
                                        <span>Criminal Lawyer</span>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- expert-area end -->
        <!-- .counter-area start -->
        <div style="background: gray" class="counter-area counter-area2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="counter-grids">
                            <?php
                            if( have_rows('achievements_block') ):
                                while ( have_rows('achievements_block') ) : the_row();
                                    ?>
                                    <div class="grid">
                                        <div>
                                            <h2><span class="odometer" data-count="<?php the_sub_field("meaning"); ?>">00</span><?php the_sub_field("meaning_after"); ?></h2>
                                        </div>
                                        <p><?php the_sub_field("achievements_block_name"); ?></p>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .counter-area end -->
        <!-- blog-area start -->
        <div class="blog-area section-padding">
            <div class="container">
                <div class="col-l2">
                    <div class="section-title section-title2 text-center">
                        <span><?php the_field("name_news_block"); ?></span>
                        <h2><?php the_field("text_above_block_news"); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/1.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Justice May For You If  You Are Innocent</a></h3>
                                <ul class="post-meta">
                                    <li> Oct 12,2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/2.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Justice May For You If  You Are Innocent</a></h3>
                                <ul class="post-meta">
                                    <li> Oct 12,2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-item b-0">
                            <div class="blog-img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/3.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Justice May For You If  You Are Innocent</a></h3>
                                <ul class="post-meta">
                                    <li> Oct 12,2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area start -->
        <!-- start social-newsletter-section -->
        <section class="social-newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter text-center">
                            <h3><?php the_field("name_of_subs_block"); ?></h3>
                            <div class="newsletter-form">
                                <form>
                                    <input type="text" class="form-control" placeholder="Enter Your Email Address...">
                                    <button type="submit">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- end social-newsletter-section -->
    </main>

<?php
get_footer();
