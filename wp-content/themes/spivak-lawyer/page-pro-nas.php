<?php
get_header();
?>

    <main>
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area" style="background: url(<?php the_field('about_us_main_photo'); ?>) no-repeat center top / cover;">
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

        <!-- Attorneys-content-section start -->
        <div class="Attorneys-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <!-- .Attorneys area start -->
                        <div class="Attorneys-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-l">
                                        <div class="Attorneys-item">
                                            <div class="Attorneys-img">
                                                <img src="<?php the_field('about_partnet_photo'); ?>" alt="">
                                            </div>
                                            <div class="Attorneys-text">
                                                <h2><?php the_field('partner_name_about'); ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="Attorneys-info">
                                            <div class="Attorneys-content">
                                                <h3><?php the_field('about_important_info'); ?></h3>
                                            </div>
                                            <div class="info-outer">
                                                <ul class="info">
                                                    <?php
                                                    if( have_rows('about_info_repeater') ):
                                                        while ( have_rows('about_info_repeater') ) : the_row();
                                                            ?>
                                                            <li><span><?php the_sub_field("name_of_field"); ?>: </span> <?php the_sub_field("value_of_field"); ?></li>
                                                        <?php
                                                        endwhile;
                                                    endif;
                                                    ?>
                                                </ul>
                                                <!--<ul class="social">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                </ul>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .Attorneys area end -->
                       <div class="attorneys_box_info">
                           <?php the_field("other_about_info"); ?>
                       </div>
                        <!-- studies area start -->
                        <h2><?php the_field("name_of_faq_qest"); ?></h2>
                        <div style="padding-bottom: 20px" class="row">
                            <?php
                            $index_query = new WP_Query(array('post_type' => 'faq', 'posts_per_page' => '3', 'order' => 'DESC'));
                            while ($index_query->have_posts()) : $index_query->the_post();
                                $terms = get_the_terms( $post->ID, 'questions-cat' );
                                ?>

                                <div class="col-lg-4 col-md-6 col-sm-6 grid-item <?php echo $terms[0]->slug; ?>">
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
                            endwhile;
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Attorneys-content-section end -->
        <?php
        get_sidebar( 'subscribe' );
        ?>
    </main>

<?php
get_footer();
