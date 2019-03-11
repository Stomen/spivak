<?php
get_header();
?>

    <main>
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-wrap">
                            <h2><?php the_title(); ?></h2>
                            <?php breadcrumbs(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .breadcumb-area end -->
        <!-- .service-area start -->
       <!-- <div class="service-area service-area2">
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
        <!-- practice-area start -->
        <div class="practice-area practice-area2">
            <div class="container">
                <div class="col-l2">
                    <div class="section-title text-center">
                        <span><?php the_field("text_above_name_us"); ?></span>
                        <h2><?php the_field("name_of_us_page"); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="service-icon">
                                    <i class="fi flaticon-parents"></i>
                                </div>

                                <div class="service-text">
                                    <h3>Join Our Team</h3>
                                    <p>There are many variations of passages of Lorem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="service-icon">
                                    <i class="fi flaticon-wounded"></i>
                                </div>
                                <div class="service-text">
                                    <h3>Personal Injury</h3>
                                    <p>There are many variations of passages of Lorem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="service-icon">
                                    <i class="fi flaticon-employee"></i>
                                </div>
                                <div class="service-text">
                                    <h3>Business Law</h3>
                                    <p>There are many variations of passages of Lorem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="service-icon">
                                    <i class="fi flaticon-thief"></i>
                                </div>
                                <div class="service-text">
                                    <h3>Criminal Law</h3>
                                    <p>There are many variations of passages of Lorem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="service-icon">
                                    <i class="fi flaticon-university-graduate-hat"></i>
                                </div>
                                <div class="service-text">
                                    <h3>Education Law</h3>
                                    <p>There are many variations of passages of Lorem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="row">
                                <div class="service-icon">
                                    <i class="fi flaticon-house"></i>
                                </div>
                                <div class="service-text">
                                    <h3>Real Estate Law</h3>
                                    <p>There are many variations of passages of Lorem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns text-center">
                    <div class="btn-style"><a href="#">Load more</a></div>
                </div>
            </div>
        </div>
        <!-- practice-area end -->
        <!-- .pricing-table area start -->
        <div class="prising-area">
            <div class="container">
                <div class="col-l2">
                    <div class="section-title text-center">
                        <span><?php the_field("text_above_price_name"); ?></span>
                        <h2><?php the_field("price_name_page"); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <?php
                    if( have_rows('page_prices') ):
                        while ( have_rows('page_prices') ) : the_row();
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="pricing-item">
                                    <div class="pricing-icon">
                                        <i class="fi flaticon-scale"></i>
                                        <span><?php the_sub_field("name"); ?></span>
                                    </div>
                                    <div class="pricing-text">
                                        <h2><?php the_sub_field("price"); ?></h2>
                                        <p><?php the_sub_field("discription"); ?></p>
                                        <div class="btns text-center">
                                            <div class="btn-style"><a href="<?php the_sub_field("btn_link"); ?>"><?php the_sub_field("btn_name"); ?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <!-- .pricing-table area end -->
        <!-- testimonial area start -->
        <div class="testimonial-area testimonial-area2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-img">
                            <img src="<?php the_field("testimonials_photo", 2); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-md-6">
                        <div class="testimonial-text">
                            <div class="title">
                                <span><?php the_field("text_above_testimonials_name", 2); ?></span>
                                <h2><?php the_field("testimonails_name", 2); ?></h2>
                            </div>
                            <div class="testimonial-slide owl-carousel">
                                <?php
                                if( have_rows('testimonils_slider', 2) ):
                                    while ( have_rows('testimonils_slider', 2) ) : the_row();
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
        <!-- start social-newsletter-section -->
        <section class="social-newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter text-center">
                            <h3><?php the_field("name_of_subs_block", 2); ?></h3>
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
