<?php
get_header();
?>

    <main>
        <!-- .breadcumb-area start -->
        <div class="breadcumb-area">
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
        <!-- case studiess area start -->
        <div class="studies-area studies-area2 section-padding">
            <div class="container">
                <!-- studies area start -->
                <div class="col-l2">
                    <div class="section-title section-title2 text-center">
                        <span>Here Our Best Work</span>
                        <h2>Our Resent Case Studies</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="studies-menu text-center">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".Family-Matters">Family Matters</button>
                        <button data-filter=".Real-Estate">Real Estate</button>
                        <button data-filter=".Business">Business</button>
                        <button data-filter=".Criminal">Criminal</button>
                        <button data-filter=".Injury">Injury</button>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item Family Matters Business Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/1.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Corporate</p>
                                    <h3>General Service</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item Family-Matters Real-Estate Criminal">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/2.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">General</p>
                                    <h3>Personal Issue</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item Family-Matters Business Criminal Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/3.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Business</p>
                                    <h3>Business Accounting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item Real-Estate Criminal Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/4.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Criminal</p>
                                    <h3>Business Accounting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item Real-Estate Business Criminal Family-Matters Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/5.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Family Issue</p>
                                    <h3>Business Accounting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item Family Matters Business Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/6.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Corporate</p>
                                    <h3>General Service</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item Family-Matters Business Criminal Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/3.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Business</p>
                                    <h3>Business Accounting</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item Family Matters Business Injury">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/1.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">Corporate</p>
                                    <h3>General Service</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item Family-Matters Real-Estate Criminal">
                        <div class="studies-item">
                            <div class="studies-single">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/studies/2.jpg" alt="">
                            </div>
                            <div class="overlay-text">
                                <div class="text-inner">
                                    <p class="sub">General</p>
                                    <h3>Personal Issue</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns text-center">
                    <div class="btn-style"><a href="#">Load more</a></div>
                </div>
            </div>
        </div>
        <!-- case studiess area end -->
        <!-- start social-newsletter-section -->
        <section class="social-newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter text-center">
                            <h3>Subscribe  Newsletter</h3>
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
