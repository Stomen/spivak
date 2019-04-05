<?php
get_header();
?>

    <main>
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area" style="background: url(<?php the_field("photo_for_page_service"); ?>) no-repeat center top / cover">
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
                    <?php
                    $query = new WP_Query('post_type=services');
                    if ( $query->have_posts() ) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <a href="<?php echo get_permalink(); ?>">
                                    <div class="service-item">
                                        <div class="row">
                                            <div class="service-icon" style="background: center url('<?php the_field("trumb_photo"); ?>') no-repeat; border-radius: 50%; background-size: cover;    width: 100px;
                                                    height: 100px;
                                                    display: inline-block;
                                                    margin: 25px auto 0px auto;"></div>
                                            <div class="service-text">
                                                <h3><?php the_title(); ?></h3>
                                               <?php the_field("low_discription"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <!--<div class="btns text-center">
                    <div class="btn-style"><a href="#">Load more</a></div>
                </div>-->
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
                                // задаем нужные нам критерии выборки данных из БД
                                $args = array(
                                    'posts_per_page' => 5,
                                    'post_type' => 'wpm-testimonial'
                                );

                                $query = new WP_Query( $args );
                                // Цикл
                                if ( $query->have_posts() ) {
                                    while ( $query->have_posts() ) {
                                        $query->the_post();
                                        ?>
                                        <div class="slide-item">
                                            <p><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
                                            <div class="thumb-img">
                                                <!--                                                <img src="<?php /*the_sub_field("client_photo"); */?>" alt="">
-->                                            </div>
                                            <div style="margin: 0 0 0 30px" class="img-content">
                                                <h4><?php wpmtst_field( 'client_name' ); ?></h4>
                                            </div>
                                        </div>
                                        <?
                                    }
                                }
                                wp_reset_postdata();
                                ?>
                            </div>
                            <a href="/vidguki"><button style="margin-top: 50px; cursor: pointer; outline: none " class="theme-btn-s3">Більше коментарів...</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area start -->
        <?php
        get_sidebar( 'subscribe' );
        ?>
    </main>

<?php
get_footer();
