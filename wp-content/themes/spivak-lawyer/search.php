<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package stageup
 */

get_header(); ?>
    <main>
        <div class="container"  style="min-height: calc(100vh - 150px); padding-bottom: 30px">
            <div class="title-block">
                <div style="font-size: 20px;margin: 10px 0;" class="center">
                    <span><?php printf("Результати пошуку для: %s", ' ' . get_search_query()); ?></span>
                </div>
            </div>
            <div class="search-page">
                <div class="center">
                    <?php
                    if (have_posts()) : ?>
                        <div style="margin-bottom: 15px" class="search-items">
                            <?php
                            while (have_posts()) : the_post();
                                $string = rtrim(substr(strip_tags(get_the_content()), 0, 600), "!,.-");
                                $string = substr($string, 0, strrpos($string, ' ')) . '...';
                                ?>
                                <div style="line-height: 1.5;margin-bottom: 20px;border-bottom: 1px solid #d0d0d0;" class="search-item">
                                    <a href="<?= get_permalink(); ?>"><?php the_title(); ?></a>
                                    <p><?= $string; ?></p>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    <?php
                    else :

                        get_template_part('template-parts/content', 'none');

                    endif;
                    the_posts_pagination();?>
                </div>
            </div>
        </div>
    </main><!-- #main -->
<?php
get_footer();
