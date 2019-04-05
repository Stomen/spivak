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
    <!-- .practice-details-area start -->
<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
    <div class="practice-details-area case-stadies-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="practice-section-img">
                        <img src="assets/images/case-studies-details/4.jpg" alt="">
                    </div>
                    <div class="practice-section-text">
                        <h2><?php the_title() ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4 p-p">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="practice-catagory-item">
                                <div class="widget-title">
                                    <h3 class="text-left"><?php the_field("faq_singe_cat_pages", 18); ?></h3>
                                </div>
                                <div class="practice-section">
                                    <ul>
                                        <?php
                                        $custom_tax_cats = get_terms( "questions-cat" );
                                        foreach ($custom_tax_cats as $item){
                                            ?>
                                            <li><a href="<?php echo get_category_link($item->term_id); ?>"><?php echo $item->name ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .practice-details-area end -->
    <!-- case studiess area start -->
    <div class="studies-area studies-area-3 section-padding">
        <div class="container">
            <!-- studies area start -->
            <div class="col-l2">
                <div class="section-title section-title2">
                    <h2><?php the_field("name_faq_pages_bottom", 18); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php
                $index_query = new WP_Query(array('post_type' => 'faq', 'posts_per_page' => '3', 'orderby' => 'rand'));
                while ($index_query->have_posts()) : $index_query->the_post();
                    $terms = get_the_terms( $post->ID, 'questions-cat' );
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
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
    <!-- case studiess area end -->
<?php }
}
?>
    <?php
    get_sidebar( 'subscribe' );
    ?>
</main>
<?php
get_footer();
