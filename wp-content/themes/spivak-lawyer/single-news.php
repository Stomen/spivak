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
        <!-- .breadcumb-area start -->
        <!--<div class="breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-wrap">
                            <h2>News</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span>News</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- .breadcumb-area end -->
        <div class="blog-page-area blog-page-fullwidth section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="blog-left-bar blog-left-bar-2 blog-left-bar-3">
                            <div class="blog-item" style="padding-bottom: 0">
                                <div class="blog-img">
                                    <div class="blog-s2">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <ul class="post-meta">
                                        <li><?php echo get_post_time( 'j F Y' ); ?></li>
                                    </ul>
                                </div>
                                <div class="blog-content-2">
                                   <?php if( have_posts() ){ while( have_posts() ){ the_post();
                                   the_content();
                                   }
                                }
                                ?>
                                </div>
                            </div>
                            <!--<div class="importent-section">
                                <div class="importent-img">
                                    <img src="assets/images/blog-details/1.jpg" alt="">
                                </div>
                                <div class="importent-text">
                                    <h2>The display is most important</h2>
                                    <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                    <p>because it is pleasure, but because those who do not know how to pursue pleasure</p>
                                </div>
                            </div>
                            <blockquote>“Those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.”
                            </blockquote>-->
                           <!-- <div class="tag-share">
                                <div class="tag">
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Corporate</a></li>
                                        <li><a href="#">Law</a></li>
                                    </ul>
                                </div>
                                <div class="share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>-->
                            <!--<div class="author-box">
                                <div class="author-avatar">
                                    <a href="#" target="_blank"><img src="assets/images/blog-details/author.jpg" alt></a>
                                </div>
                                <div class="author-content">
                                    <a href="#" class="author-name">Alizabeth Anne</a>
                                    <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,</p>
                                    <div class="socials">
                                        <ul class="social-lnk">
                                            <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- end author-box -->
                           <!-- <div class="more-posts">
                                <div class="previous-post">
                                    <a href="#">
                                        <span class="post-control-link"><i class="fa fa-long-arrow-left"></i>Previous post</span>
                                    </a>
                                </div>
                                <div class="next-post">
                                    <a href="#">
                                        <span class="post-control-link">Next post<i class="fa fa-long-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>--> <!-- end more-posts -->

                            <div class="comments-area">
                                <?php
                                if( $comments = get_comments() ){
                                    ?>
                                    <div class="comments-section">
                                        <h3 class="comments-title">Comments</h3>
                                        <ol class="comments">
                                            <?php
                                            foreach( $comments as $comment ){
                                                ?>
                                                <li class="comment">
                                                    <div>
                                                        <div class="comment-theme">
                                                            <div class="comment-image"><img src="assets/images/blog-details/comment/1.jpg" alt></div>
                                                        </div>
                                                        <div class="comment-main-area">
                                                            <div class="comment-wrapper">
                                                                <div class="comments-meta">
                                                                    <div class="comments-reply">
                                                                        <a  class="comment-reply-link" href="#"><span class="comment-reply-link"><i class="fa fa-reply" aria-hidden="true"></i>Reply</span></a>
                                                                    </div>
                                                                    <h4>John Abraham</h4>
                                                                    <span class="comments-date">says Oct 15, 2017 at 11:00</span>
                                                                </div>
                                                                <div class="comment-area-sub">
                                                                    <p>account of the system, and expound the actual teachings of the great explorer of the truth,</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ol>
                                    </div> <!-- end comments-section -->
                                    <?php
                                }
                                ?>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Comment</h3>
                                    <form method="post" id="commentform" class="comment-form">
                                        <div class="form-textarea">
                                            <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                        </div>
                                        <div class="form-inputs">
                                            <input placeholder="Website" type="url">
                                            <input placeholder="Name" type="text">
                                            <input placeholder="Email" type="email">
                                        </div>
                                        <div class="form-submit">
                                            <input id="submit" value="Reply" type="submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
