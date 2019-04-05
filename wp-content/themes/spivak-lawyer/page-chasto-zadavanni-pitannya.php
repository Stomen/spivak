<?php
get_header();
?>

    <main>
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area" style="background: url(<?php the_field("faq_fone_foto"); ?>) no-repeat center top / cover">
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
        <!-- case studiess area start -->
        <div class="studies-area studies-area2 section-padding">
            <div class="container">
                <!-- studies area start -->
                <div class="col-l2">
                    <div class="section-title section-title2 text-center">
                        <span><?php the_field("text_under_name_faq"); ?></span>
                        <h2><?php the_field("name_of_faq_page"); ?></h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="studies-menu text-center">
                        <button class="active" data-filter="*">All</button>
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
                <div class="row grid">
                    <?php
                    $index_query = new WP_Query(array('post_type' => 'faq', 'posts_per_page' => '-1', 'order' => 'DESC'));
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
        <!-- case studiess area end -->
        <?php
        get_sidebar( 'subscribe' );
        ?>
    </main>

<?php
get_footer();
