<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">

        <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--        <link rel="stylesheet" href="--><?php //echo get_stylesheet_directory_uri(); ?><!--/style.css">-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/46636d4f0f.js"></script>

        <?php
        if (is_page( 'Contact' )){ echo "<style>.grecaptcha-badge{ display: block!important;}</style>";} ?>


        <?php include 'language-strings.php'; ?>
        <?php wp_head(); ?>

    </head>

    <body>

    <?php
    // Fix menu overlap
    if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';
    ?>
<div class="page-wrapper" id="animated_bg">

    <!--    Header Top Left Widget-->
    <?php
    if(is_active_sidebar('header-widget')){?>
        <?php dynamic_sidebar('header-widget');
    }
    ?>

    <!--Center Logo Start-->
    <div class="logo-wrapper">
        <!--Image-->
        <?php the_custom_logo(); ?>

    </div>
    <div class="navbar language_menu" id="header-lang">

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'lang-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => '',
            'container_id'      => '',
            'menu_class'        => 'navbar-nav nav-fill',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>


    </div>
    <h2 id="tagline"><?php bloginfo('description'); ?></h2>

    <!--Center Logo End-->


    <!--Navigation Start-->
    <nav class="navbar fixed-top navbar-expand-sm">
        <!--Collapse Button-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false">
            <span class="hamburger-icon fas fa-bars"></span>
        </button>
            <!--Main Menu-->
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'main-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse main-nav',
                'container_id'      => 'collapsibleNavbar',
                'menu_class'        => 'navbar-nav nav-fill w-100',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>

            <!--Main Menu End-->
    </nav>
    <!--Navigation End-->

<!--    Header Image-->
    <div class="header" id="headerimg">
        <?php
        if ( is_single() && has_post_thumbnail() ){
           // echo '<img id="headerimg" alt="headerimg" src="'; header_image(); echo '"/>';
        }
        elseif ( has_post_thumbnail() ) {the_post_thumbnail();}
        else { echo '<img id="headerimg" alt="headerimg" src="'; header_image(); echo '"/>';}
        ?>
    </div>
<!--    Header Image End-->


    <!--Pagetitle-->
    <?php
    $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;


    if (is_single()){
        ?>

        <?php
    }
    else{
        ?>
        <h1 class="pagetitle"><?php the_title(); ?></h1>
        <?php
    }
    ?>
    <!--Pagetitle End-->
