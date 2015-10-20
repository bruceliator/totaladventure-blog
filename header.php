<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <script src="<?php bloginfo('template_directory'); ?>/js/global.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lib/masonry.min.js"></script>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        
    </head>
      <body <?php body_class(); ?>>
        <header>
          <div class="row">
            <div class="large-4 medium-4 small-4 columns">
              <ul class="button-group menu-block">
                <li class="logo">
                  <a href="<?php echo get_option('home'); ?>/../" class="brand">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Artictropic - Wordwide Adventure" />
                  </a>
                </li>
              </ul>
            </div>
            <div class="large-8 medium-8 small-8 columns" id="header-block">
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
        </header>


<!--      <header>-->
<!--        <div class="container">-->
<!--          <div class="row header---><?php //echo rand(1, 6) ?><!--">-->
<!--            <div class="span12">-->
<!--              <div class="navbar">-->
<!--                <div class="navbar-inner">-->
<!--                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                  </a>-->
<!--                  <a href="--><?php //echo get_option('home'); ?><!--/../" class="brand">-->
<!--                    <img src="--><?php //bloginfo('template_directory'); ?><!--/img/logo.png" alt="Artictropic - Wordwide Adventure" />-->
<!--                  </a>-->
<!--                  <div class="nav-collapse">-->
<!--    <ul class="nav pull-right">-->
<!--      <li ><a href="--><?php //echo get_option('home'); ?><!--/../">Home</a></li>-->
<!--      <li><a href="--><?php //echo get_option('home'); ?><!--/../about">About</a></li>-->
<!--      <li ><a href="--><?php //echo get_option('home'); ?><!--/../advertise">Advertise</a></li>-->
<!--      <li class="active" ><a href="--><?php //echo get_option('home'); ?><!--/" target="_blank">Blog</a></li>-->
<!--      <li ><a href="--><?php //echo get_option('home'); ?><!--/../additional_information">Useful Info</a></li>-->
<!--      <li ><a  href="--><?php //echo get_option('home'); ?><!--/../contact">Contact</a></li>-->
<!--      <li ><a class="addthis_button">Share</a></li>-->
<!--      <li class="dropdown dropdown-login">-->
<!--        <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--          Login                <b class="caret"></b>-->
<!--        </a>-->
<!--        <div class="dropdown-menu no-collapse">-->
<!--          <form action="--><?php //echo get_option('home'); ?><!--/../admin/login/logmein" method="post">-->
<!--            <label for="user_id">Username</label>-->
<!--            <input type="text" class="input-medium" name="username" id="user_id" placeholder="Your username">-->
<!--            <label for="user_email">Password</label>-->
<!--            <input type="password" class="input-medium" name="password" id="user_email" placeholder="Your password">-->
<!--            <br />-->
<!--            <button type="submit" class="btn btn-primary">Login</button>-->
<!--          </form>-->
<!--        </div>-->
<!--      </li>-->
<!--    </ul>-->
<!--    <div class="navbar-misc">-->
<!--      <div class="social-links">-->
<!--        <a href="http://www.facebook.com/arctictropic" rel="tooltip" title="Follow us on Facebook" target="_blank"><img src="--><?php //bloginfo('template_directory'); ?><!--/img/i_facebook.png" alt="Follow us on Facebook" /></a>-->
<!--        <a href="http://twitter.com/totaladventure" rel="tooltip" title="Follow us on Twitter" target="_blank"><img src="--><?php //bloginfo('template_directory'); ?><!--/img/i_twitter-english.png" alt="Follow us on Twitter" /></a>-->
<!--        <a href="http://pinterest.com/arctictropic/" rel="tooltip" title="Follow us on Pinterest" target="_blank"><img src="--><?php //bloginfo('template_directory'); ?><!--/img/i_pinterest.png" alt="Follow us on Pinterest" /></a>-->
<!--        </div>-->
<!--      <form class="form-horizontal">-->
<!--        <div class="control-group">-->
<!--          <label class="control-label" for="switch_language">Choose Language:</label>-->
<!--          <div class="controls">-->
<!--            <select class="input-medium" id="switch_language" >-->
<!--              <option value="1"  selected="selected">English</option>-->
<!--              <option value="2" >Spanish</option>-->
<!--              <option value="4" >Portuguese</option>-->
<!--              <option value="5" >German</option>-->
<!--              <option value="6" >Italian</option>-->
<!--              <option value="3" >French</option>-->
<!--              <option value="7" >Chinese (simplified)</option>-->
<!--            </select>-->
<!--          </div>-->
<!--        </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>                            </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="header-ad hidden-phone">-->
                
                <!--/* OpenX Javascript Tag v2.8.9 */-->

<!--/*
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://arctictropic.com/openX/www/delivery/...'
  * to
  *   'https://arctictropic.com/openX/www/delivery/...'
  *
  * This noscript section of this tag only shows image banners. There
  * is no width or height in these banners, so if you want these tags to
  * allocate space for the ad before it shows, you will need to add this
  * information to the <img> tag.
  *
  * If you do not want to deal with the intricities of the noscript
  * section, delete the tag (from <noscript>... to </noscript>). On
  * average, the noscript tag is called from less than 1% of internet
  * users.
  */-->
      <div role="main" class="main">
        <div class="row">

  


