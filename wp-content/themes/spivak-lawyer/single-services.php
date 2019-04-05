<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package spivak-lawyer
 */
get_header();
?>
<main>
    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
        <div class="practice-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-p">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="field-section">
                                    <div class="field-img">
                                        <img src="<?php the_post_thumbnail_url( "full" ); ?>" alt="">
                                    </div>
                                    <div class="field-content">
                                        <h3><?php the_field("text_left_side"); ?></h3>
                                        <div class="btns">
                                            <div class="btn-style"><a href="<?php the_field("left_side_btn_link"); ?>"><?php the_field("name_left_side_btn"); ?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="practice-catagory-item">
                                    <div class="widget-title">
                                        <h3 class="text-left"><?php the_field("category_name_field"); ?></h3>
                                    </div>
                                    <div class="practice-section">
                                        <ul>
                                            <?php
                                            $query = new WP_Query('post_type=services');
                                            if ( $query->have_posts() ) {
                                                while ($query->have_posts()) {
                                                    $query->the_post();
                                                    ?>
                                                    <li><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></li>
                                                    <?php
                                                }
                                            }
                                            wp_reset_postdata();
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="practice-section-img">
                            <img src="assets/images/practice/3.jpg" alt="">
                        </div>
                        <div class="practice-section-text">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php }
    }
    ?>
    <?php
    get_sidebar( 'subscribe' );
    ?>
</main>
<?php
get_footer();
