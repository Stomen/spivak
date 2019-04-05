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
        <div class="blog-page-area blog-page-fullwidth section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="blog-left-bar blog-left-bar-2 blog-left-bar-3">
                            <div class="blog-item" style="padding-bottom: 0">
                                <h2 style="text-align: center; margin-bottom: 50px;"><?php the_title(); ?></h2>
                                <div class="blog-content-2">
                                    <div class="blog-s2 news-new-type">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                   <?php if( have_posts() ){ while( have_posts() ){ the_post();
                                   the_content();
                                   }
                                }
                                ?>
                                </div>
                                <ul class="post-meta" style="display: flex; justify-content: space-between; align-items: center">
                                    <li><?php the_date('j.m.Y'); ?></li>
                                    <li><div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Поделиться</a></div></li>
                                </ul>
                            </div>
                            <div class="fb-comments" width="100%"  data-width="100%" data-numposts="5"></div>
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
