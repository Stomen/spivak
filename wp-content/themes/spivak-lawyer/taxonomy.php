<?php
get_header();
?>

    <main>
        <div class="blog-page-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="blog-left-bar">

                            <?php if( have_posts() ){ while( have_posts() ){ the_post();

                                        ?>
                                        <div class="blog-item blog-item-2">
                                            <div class="blog-img blog-img-2">
                                                <div class="blog-s2">
                                                    <a href="<?php echo get_permalink(); ?>">
                                                        <div class="blog-content-3">
                                                            <ul class="post-meta">
                                                                <li><?php echo get_post_time( 'j F Y' ); ?></li>
                                                            </ul>
                                                            <h2><?php the_title() ?></h2>
                                                            <p>
                                                                <?php echo wp_trim_words( get_the_content(), 40 ); ?>

                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                            <?php }
                            }
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
