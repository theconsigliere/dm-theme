<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80654654-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-80654654-1');
    </script>


    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<div class="loading">
    <img src="<?php bloginfo('template_directory'); ?>/img/dm.png" class="">

</div>

<body <?php body_class(); ?>>
    <header id="masthead" class="site-header header-background">

        <div class="header-nav flex container">

            <!-- see logo -->
            <a href='<?php echo get_home_url(); ?>' class='db'>
                <div class='alt-logo'> <img src="<?php bloginfo('template_directory'); ?>/img/dm.png" class=""></div>
            </a>

            <!-- nav -->
            <div class='flex headers'>
                <?php wp_nav_menu( array( 'theme_location' => 'nav-bar' ) ); ?>
                <div class='social-top  top-header-socials flex'>

                    <!-- our social contact bottom component -->
                    <?php get_template_part('social-contact'); ?>

                </div>
            </div>




        </div><!-- .site-branding -->



    </header><!-- #masthead -->