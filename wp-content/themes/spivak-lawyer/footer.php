
<!-- .footer-area start -->
<div class="footer-area">
    <div class="visible-footer">
        <div class="footer-top" style="padding-bottom: 0">
            <div class="container">
                <div style="background: transparent" class="contact-area contact-area-2 contact-area-3">
                    <h2 style="color: white;">Quick Contact Form</h2>
                    <div class="contact-form">
                        <form method="post" class="contact-validation-active" id="contact-form" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div>
                                        <textarea class="form-control" name="note" id="note" placeholder="Case Description..."></textarea>
                                    </div>
                                </div>
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
