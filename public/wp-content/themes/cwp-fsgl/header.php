<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">

        <?php wp_head(); ?>
    </head>

    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

		<div class="header_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 my-auto">
                        <?php
                            $logo = get_option_tree( 'logo', '', false );
                        ?>
                        <a class="logo" href="#"><img src="<?php echo $logo; ?>" alt=""></a>
                        <div class="menu_holder">

                            <?php
                                if (function_exists('wp_nav_menu')) {
                                    wp_nav_menu(array('theme_location' => 'wpj-main-menu','container' => false, 'menu_id' => 'menu', 'fallback_cb' => 'wpj_default_menu'));
                                }
                                else {
                                    wpj_default_menu();
                                }
                            ?>



                        </div>           

                    </div>
                </div>
            </div>
		</div>