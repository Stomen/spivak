<?php
get_header();
?>

    <main>
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area" style="background: url(<?php the_field("bg_temonials"); ?>) no-repeat center top / cover">
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
        <div style="margin-bottom: 20px;" class="container">
            <?php echo do_shortcode("[testimonial_view id=\"2\"]"); ?>
            <?php echo do_shortcode("[testimonial_view id=\"1\"]"); ?>
        </div>
        <?php
        get_sidebar( 'subscribe' );
        ?>
    </main>

<?php
get_footer();
