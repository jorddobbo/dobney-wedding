<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <script src="//localhost:35729/livereload.js"></script>

    <?php if ( is_front_page() ) { ?>

      <div id="particles-js" class="dbo--home__hero wow fadeInUp">
        <div class="content">
          <h2>We're getting</h2>
          <h1>Married</h1>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/leaf.svg" />
        </div>
      </div>

    <?php } ?>

    <div id="container">

      <header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

        <?php if (! is_front_page() ) { ?>
          <div class="header__logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" /></a></div>
        <?php } ?>

        <div id="inner-header" class="wrap cf">

          <div class="header__menu"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg" /></div>
          <div class="header__close"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" /></div>

          <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <?php wp_nav_menu(array(
                       'container' => false,                           // remove nav container
                       'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                       'menu_class' => 'nav',               // adding custom nav class
                       'theme_location' => 'primary_navigation',                 // where it's located in the theme
                       'before' => '',                                 // before the menu
                             'after' => '',                                  // after the menu
                             'link_before' => '',                            // before each link
                             'link_after' => '',                             // after each link
                             'depth' => 0,                                   // limit the depth of the nav
                       'fallback_cb' => ''                             // fallback function (if there is one)
            )); ?>

          </nav>

        </div>

      </header>