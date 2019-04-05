
<!-- .footer-area start -->
<div class="footer-area">
    <div class="visible-footer">
        <div class="footer-top" style="padding-bottom: 0">
            <div class="container">
                <div style="background: transparent" class="contact-area contact-area-2 contact-area-3">
                    <h2 style="color: white;"><?php the_field("name_form_feedback", 2); ?></h2>
                    <div class="contact-form">
                        <?php echo do_shortcode("[contact-form-7 id=\"230\" title=\"Форма в подвале сайта\"]")?>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <span><?php the_field("footer_text_span", 2); ?></span>
                        </div>
                        <div class="col-lg-6 col-12">
                            <ul class="d-flex">
                                <!--<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- .footer-area end -->
<!-- All JavaScript files
================================================== -->
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/bootstrap.min.js"></script>
<!-- Plugins for this template -->
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery-plugin-collection.js"></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.slicknav.min.js"></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/metisMenu.min.js"></script>
<!-- Custom script for this template -->
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/script.js"></script>
<script src="<?php echo get_theme_file_uri(); ?>/js/code.js"></script>

<?php wp_footer(); ?>

</body>
</html>
