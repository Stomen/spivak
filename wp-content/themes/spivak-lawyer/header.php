<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Page Title -->
    <title>Співак Олексій - адвокат</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	<?php wp_head(); ?>
</head>
<body class="<?php if( is_404() ){
    echo "this_is_404";
}
else if(is_page("kontakti") || is_page("main")){
    echo "this_contacts";
}
else if(is_search()){
    echo "search_page";
}
if(is_page("main") || is_page("novini")){
    echo " with_subsc";
}?>">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v3.2&appId=818896771780805&autoLogAppEvents=1"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/uk_UA/sdk.js#xfbml=1&autoLogAppEvents=1&version=v3.2&appId=818896771780805"></script>
<div id="preloader">
    <div class="loader_line"></div>
</div>
<!-- prealoader area end -->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-12 col-lg-4">
                    <ul class="d-flex account_login-area">
                        <li><i class="fa fa-map-marker" aria-hidden="true"><a target="_blank" href="<?php the_field("map_link", 2); ?>"></i><?php the_field("adress_company", 2); ?></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-12 col-lg-6">
                    <ul class="header-contact">
                        <?php
                        if(get_field("phone_number", 2)){
                            ?>
                            <li><a href="tel:<?php echo preg_replace('/\D+/', '', get_field("phone_number", 2)); ?>"><i class="fa fa-phone"></i><?php  the_field("phone_number", 2); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if(get_field("header_phone_1", 2)){
                            ?>
                            <li><a href="tel:<?php echo preg_replace('/\D+/', '', get_field("header_phone_1", 2)); ?>"><i class="fa fa-phone"></i><?php  the_field("header_phone_1", 2); ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                    <ul class="header-contact">
                        <?php
                        if(get_field("email", 2)){
                            ?>
                            <li><i class="fa fa-envelope"></i><a href="mailto:<?php  the_field("email", 2); ?>"><?php  the_field("email", 2); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                            if(get_field("header_email_2", 2)){
                                ?>
                                <li><i class="fa fa-envelope"></i><a href="mailto:<?php  the_field("header_email_2", 2); ?>"><?php  the_field("header_email_2", 2); ?></a></li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-12 col-lg-2">
                    <div class="btn-style btn-style2"><a class="consultation" href="<?php echo get_home_url()."/#consult-block"; ?>"><?php  the_field("btn_name", 2); ?></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area header-area2">
        <div class="header-shot" id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-10 col-sm-10 col-8">
                        <div class="logo">
                            <a href="<?php echo get_home_url();?>"><img height="60px" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="main-menu">
                            <?php
                            wp_nav_menu( [
                                'menu'            => 'Menu',
                                'container'       => 'nav',
                                'container_class' => 'nav_mobile_menu',
                                'container_id'    => '',
                                'menu_class'      => '',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ] );
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-2 col-4 search">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                                <ul>
                                    <li>
                                        <form  method="get" action="<?php echo home_url(); ?>" role="search">
                                            <input type="search" value="<?php echo get_search_query() ?>" name="s"  placeholder="search here..">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

