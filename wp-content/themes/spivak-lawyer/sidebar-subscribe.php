<!-- start social-newsletter-section -->
<section class="social-newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newsletter text-center">
                    <h3><?php the_field("name_of_subs_block", 2); ?></h3>
                    <div class="newsletter-form">
                        <?php echo do_shortcode("[contact-form-7 id=\"224\" title=\"Форма подписки на рассылку\"]")?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
</section>
<!-- end social-newsletter-section -->