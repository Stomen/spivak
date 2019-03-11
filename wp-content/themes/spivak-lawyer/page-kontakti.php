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
                                <span><a href="tel:<?php echo preg_replace('/\D+/', '', get_field("name_of_tel_field_cont_page")); ?>"><?php  the_field("name_of_tel_field_cont_page"); ?></a></span></div>
                            <div class="email">
                                <h3><?php the_field("name_email_field_cont_page"); ?></h3>
                                <span><a href="mailto:<?php the_field("email_cont_field_name"); ?>"><?php the_field("email_cont_field_name"); ?></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="contact-area contact-area-2 contact-area-3">
                            <h2><?php the_field("contsct_page_name_field_form"); ?></h2>
                            <div class="contact-form">
                                <form method="post" class="contact-validation-active" id="contact-form">
                                    <div class="half-col">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="half-col">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="half-col">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                    </div>
                                    <div class="half-col">
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                    </div>
                                    <div>
                                        <textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
                                    </div>
                                    <div class="submit-btn-wrapper">
                                        <button type="submit" class="theme-btn-s3">Appointment</button>
                                        <div id="loader">
                                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
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
        <!-- start social-newsletter-section -->
        <section class="social-newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter text-center">
                            <h3><?php the_field("name_of_subs_block", 2); ?></h3>
                            <div class="newsletter-form">
                                <form>
                                    <input type="text" class="form-control" placeholder="Enter Your Email Address...">
                                    <button type="submit">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- end social-newsletter-section -->
    </main>

<?php
get_footer();
