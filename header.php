<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset="<?php bloginfo('charset'); ?>"/>
    <meta content='width=device-width, initial-scale=1.0' name='viewport' />

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/artictropic.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/dashboard.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/override-slider.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
            <!-- Section Styles -->

    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script|Droid+Sans:400,700|Rokkitt' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>

    <script>document.write('<script src="<?php bloginfo('template_directory'); ?>/js/lib/jquery-1.7.2.min.js"><\/script>')</script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lib/modernizr-2.5.3.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lib/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lib/imagesloaded.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/global.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lib/masonry.min.js"></script>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        
    </head>
      <body <?php body_class(); ?>>
        <header>
          <div class="row small-collapse fixed-header">
            <div class="large-4 medium-4 small-2 columns">
              <ul class="button-group menu-block">
                <li class="logo">
                  <a href="<?php echo get_option('home'); ?>/" class="brand">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" data-interchange="[<?php bloginfo('template_directory'); ?>/img/mobile-logo.png, (screen and (max-width: 650px))], [<?php bloginfo('template_directory'); ?>/img/logo.png, ((min-width: 651px))]" alt="Artictropic - Wordwide Adventure" />
                  </a>
                </li>
              </ul>
            </div>
            <div class="columns small-8 show-for-small-only blog-title">
              TotalAdventure Blog
            </div>
            <div class="row show-for-small-only menu-toggle">
              <input type="checkbox" class="dropdown-checkbox" id="bar-menu">
              <label for="bar-menu"></label>
              <div class="dropdown-nav">
                <ul>
                  <?php dynamic_sidebar( 'mobile-menu' ); ?>
                </ul>
              </div>
            </div>
            <div class="large-8 medium-8 small-8 columns show-for-medium-up" id="header-block">
              <div class="button-block header-menu clearfix">
                <div class="large-7 medium-7 small-7 columns no-padding clearfix">
                  <div class="user-name right">
                    <a aria-controls="drop" aria-expanded="false" data-dropdown="drop" data-options="timeout: 5000;" href="#">Blaine Zuver<i class="fa fa-caret-down"></i></a><br>
                    <ul aria-hidden="true" class="f-dropdown" data-dropdown-content="" id="drop">
                      <li>
                        <a href="/admins/dashboards">Admin</a>
                        <hr>
                      </li>
                      <li>
                        <a href="/customers/dashboards">Dashboard</a>
                        <hr>
                      </li>
                      <li>
                        <a href="/customers/wishes">Wishlist</a>
                        <hr>
                      </li>
                      <li>
                        <a rel="nofollow" data-method="delete" href="/customers/sign_out">Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="large-2 medium-2 small-2 columns clearfix">
                  <div class="user-logo right">
                    <img src="http://fillmurray.com/42/42" alt="Missing">
                  </div>
                </div>
                <div class="large-3 medium-3 small-3 columns no-padding clearfix">
                  <div class="right">
	                  <a class="button btn-browse" href="/travel_packages">
                      <i class="fa fa-map-marker"></i>
		                  Browse Trips
	                  </a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          <div class="head-container">
            <div class="row">
              <div class="large-12 large-centered medium-12 medium-centered small-12 small-centered columns text-center main-block">
                <p class="main-title">
                  TOTAL ADVENTURE BLOG
                </p>
                <p class="main-text">
                  Look And Book WorldWide Adventures
                </p>
              </div>
            </div>
            <div class="row">
              <div class="small-12 small-centered columns">
                <?php if ( function_exists( 'get_smooth_slider' ) ) { get_smooth_slider(); } ?>
              </div>
            </div>
          </div>
        </header>
      <div role="main" class="main">
        <div class="row small-collapse">