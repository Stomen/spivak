<?php
get_header();
?>

    <main>
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area" style="background: url('<?php the_field("news_fone_pgoto") ?>')">
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
        <div class="blog-page-area news-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="blog-left-bar">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'posts_per_page' => 10,
                                'cat'=> 3,
                                'orderby' => 'date',
                                'paged'=>$paged,
                                'post_type' => 'post'
                            );
                            if (have_posts()) : query_posts($args);
                                while (have_posts()) : the_post();
                                    if(get_the_post_thumbnail() == ''){
                                        ?>
                                        <div class="blog-item blog-item-2">
                                            <div class="blog-img blog-img-2">
                                                <div class="blog-s2">
                                                    <div class="blog-content-3">
                                                        <ul class="post-meta">
                                                            <li><?php echo get_post_time( 'j F Y' ); ?></li>
                                                        </ul>
                                                        <h2><?php the_title() ?></h2>
                                                        <?php the_content("Читати далі..") ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <div class="blog-s2">
                                                    <img src="<?php echo get_the_post_thumbnail_url( $post, "large" ); ?>" alt="">
                                                </div>
                                                <ul class="post-meta">
                                                    <li><?php echo get_post_time( 'j F Y' ); ?></li>
                                                </ul>
                                            </div>
                                            <div class="blog-content-2">
                                                <h2><?php the_title() ?></h2>
                                                <?php the_content("Читати далі..") ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                endwhile;
                            endif;
                            ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="pagination-wrapper">
                                        <?php
                                        $nav = get_the_posts_pagination( array(
                                            'next_text'          => __( 'Наступна', 'twentyfifteen' ),
                                            'prev_text'          => __( 'Попередня', 'twentyfifteen' ),
                                            'screen_reader_text' => __( 'A' )
                                        ) );
                                        $nav = str_replace('<h2 class="screen-reader-text">A</h2>', '', $nav);
                                        echo $nav; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        get_sidebar( 'subscribe' );
        ?>
    </main>

<?php
get_footer();
