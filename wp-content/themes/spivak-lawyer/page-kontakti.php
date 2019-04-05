<?php
get_header();
?>

    <main>
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area" style="background: url(<?php the_field('contacts_main_photo'); ?>) no-repeat center top / cover;">
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
        <!-- .contact-page-area start -->
        <div class="contact-page-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-page-item">
                            <h2><?php the_field("name_of_contact_page_title"); ?></h2>
                            <?php the_field("contact_field_page_description"); ?>
                            <div class="adress">
                                <h3><?php the_field("name_field_of_cont_page"); ?></h3>
                                <span><?php the_field("name_adress_page_contact"); ?></span>
                            </div>
                            <div class="phone">
                                <h3><?php the_field("name_field_of_cont_page_tel"); ?></h3>
                                <span><a href="tel:<?php echo preg_replace('/\D+/', '', get_field("name_of_tel_field_cont_page")); ?>"><?php  the_field("name_of_tel_field_cont_page"); ?></a></span>
                                <span><a href="tel:<?php echo preg_replace('/\D+/', '', get_field("name_of_tel_field_cont_page_2")); ?>"><?php  the_field("name_of_tel_field_cont_page_2"); ?></a></span>
                            </div>
                        <div class="email">
                                <h3><?php the_field("name_email_field_cont_page"); ?></h3>
                                <span><a href="mailto:<?php the_field("email_cont_field_name"); ?>"><?php the_field("email_cont_field_name"); ?></a></span>
                                <span><a href="mailto:<?php the_field("email_cont_field_name_2"); ?>"><?php the_field("email_cont_field_name_2"); ?></a></span>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="contact-area contact-area-2 contact-area-3">
                            <h2><?php the_field("contsct_page_name_field_form"); ?></h2>
                            <div class="contact-form">
                                <?php echo do_shortcode("[contact-form-7 id=\"232\" title=\"Форма консультация\"]"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="contact-map">
                            <?php the_field("link_for_map_contact"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .contact-page-area end -->
        <?php
        get_sidebar( 'subscribe' );
        ?>
    </main>

<?php
get_footer();
