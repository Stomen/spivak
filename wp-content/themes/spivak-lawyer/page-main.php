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
                    <div class="col col-lg-4">
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
                    <?php
                    $query = new WP_Query('post_type=services');
                    if ( $query->have_posts() ) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                            <a href="<?php echo get_permalink(); ?>">
                                                <div class="service-icon" style="background: center url('<?php the_field("trumb_photo"); ?>') no-repeat; border-radius: 50%; background-size: cover"></div>
                                            </a>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                                            <div class="service-text">
                                                <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                                <?php the_field("low_discription"); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
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
                        <button class="active" data-filter="*">Всі</button>
                        <?php
                        $custom_tax_cats = get_terms( "questions-cat" );
                        foreach ($custom_tax_cats as $item){
                            ?>
                            <button data-filter=".<?php echo $item->slug; ?>"><?php echo $item->name; ?></button>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row grid faq">
                    <?php
                    $counter = 0;
                    $index_query = new WP_Query(array('post_type' => 'faq', 'posts_per_page' => '-1', 'order' => 'DESC'));
                    while ($index_query->have_posts()) : $index_query->the_post();
                        $terms = get_the_terms( $post->ID, 'questions-cat' );
                        ?>

                        <div class="col-c grid-item <?php echo $terms[0]->slug; ?>" data-number="<?php echo $counter; ?>">
                            <a href="<?php echo get_permalink(); ?>">
                                <div class="studies-item">
                                    <div class="studies-single">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                    <div class="overlay-text">
                                        <div class="text-inner">
                                            <p class="sub"><?php echo $terms[0]->name; ?></p>
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?
                        $counter++;
                    endwhile;
                    wp_reset_query();
                    ?>
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
                    <?php
                    $array_query = array(
                        "cat" => 3,
                        "posts_per_page"=> 3
                    );
                    $query = new WP_Query($array_query);
                    if ( $query->have_posts() ) {
                        while ($query->have_posts()) {
                            $query->the_post();
                           ?>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <img style="height: 230px;width: 100%;object-fit: cover;" src="<?php echo get_the_post_thumbnail_url( $post, '' ); ?>" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <ul class="post-meta">
                                            <li><?php the_date('j.m.Y'); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
        <!-- blog-area start -->
        <?php
        get_sidebar( 'subscribe' );
        ?>
        <!-- .counter-area start -->
        <div style="background: white">
            <div class="container block-for-back">
                <div class="row" style="padding: 25px 0; align-items: center">
                    <div class="col-lg-5 col-md-12"><?php the_field("text_file_block"); ?></div>
                    <div class="col-lg-5 col-md-12 data-info-file" data-btn-id = "<?php echo get_the_ID(); ?>"><?php echo do_shortcode("[contact-form-7 id=\"224\" title=\"Форма подписки на рассылку\"]"); ?></div>
                </div>
            </div>
        </div>
        <!-- .contact area start -->
        <div class="contact-area section-padding" id="consult-block" style='background-attachment: fixed;background: url("<?php the_field('layout_block_question') ?>") center center/cover no-repeat local'>
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
                                <?php echo do_shortcode("[contact-form-7 id=\"232\" title=\"Форма консультация\"]"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .contact area start -->
    </main>

<?php
get_footer();
