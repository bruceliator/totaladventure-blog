<?php
/**
 * @package WordPress
 * @subpackage
 */
?>


</div>
  </div>
<?php if (is_single()): ?>
  <div class="row collapse full-width related-wrap">
    <div class="columns large-12 medium-12 small-12" style="color: #000;">
      <?php related_posts() ?>
    </div>
  </div>
<?php endif ?>




<!--        <footer>-->
<!--            <p>&nbsp;</p>-->
<!--            <p>&nbsp;</p>-->
<!--            -->
<!--            -->
<!--            -->
<!--            -->
<!--            <div class="footer-inner">-->
<!--                <div class="container">                   -->
<!--                    <div class="row">-->
<!--                        <div class="span5">-->
<!--                            <div class="row">-->
<!--                                <div class="span6">-->
<!--                                    <a class="home-link" href="index.php" rel="tooltip" title="Go Home"><img width="200" src="--><?php //bloginfo('template_directory'); ?><!--/img/logo.png" alt="Artictropic - Wordwide Adventure" /></a>-->
<!--                                    <div class="social-links">-->
<!--                                                                                   <a href="http://www.facebook.com/arctictropic" rel="tooltip" title="Follow us on Facebook"><img src="--><?php //bloginfo('template_directory'); ?><!--/img/i_facebook.png" alt="Follow us on Facebook" /></a>-->
<!--                                        <a href="http://twitter.com/totaladventure" rel="tooltip" title="Follow us on Twitter" style="width: 37px"><img src="--><?php //bloginfo('template_directory'); ?><!--/img/i_twitter-english.png" alt="Follow us on Twitter" /></a>-->
<!--                                                                                <a href="http://pinterest.com/arctictropic/" rel="tooltip" title="Follow us on Pinterest"><img src="--><?php //bloginfo('template_directory'); ?><!--/img/i_pinterest.png" alt="Follow us on Pinterest" /></a>-->
<!--                                    </div>-->
<!--                                    <br style="clear: both;">-->
<!--                                    <p class="copy">Copyright � 2012 - Arctictropic.com - All Rights Reserved</p>-->
<!--                                    <p class="legal">-->
<!--                                        <a href="--><?php //echo get_option('home'); ?><!--/../privacy_policy">Privacy Policy</a> -->
<!--                                        &nbsp;&nbsp;&nbsp;-->
<!--                                        <a href="--><?php //echo get_option('home'); ?><!--/../terms">Terms & Conditions</a>-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="span7">-->
<!--                            <ul class="pull-right">-->
<!--                                <li><a href="--><?php //echo get_option('home'); ?><!--/../about"><i class="icon-user"></i> About</a></li>-->
<!--                                <li><a href="--><?php //echo get_option('home'); ?><!--/../advertise"><i class="icon-bullhorn"></i> Advertise</a></li>-->
<!--                                <li><a href="--><?php //echo get_option('home'); ?><!--/" target="_blank"><i class="icon-comment"></i> Blog</a></li>-->
<!--                                <li><a href="--><?php //echo get_option('home'); ?><!--/../additional_information"><i class="icon-info-sign"></i> Useful Info</a></li>-->
<!--                                <li><a href="--><?php //echo get_option('home'); ?><!--/../contact"><i class="icon-envelope"></i> Contact</a></li>-->
<!--                            </ul>                             -->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </footer>-->
            <footer>
              <div class="row">
                <div class="small-12 columns clearfix">
                  <div class="small-6 columns">
                    <div class="rights left">
                      <i class="fa fa-copyright"></i>
                      <?php echo date("Y"); ?> - Totaladventure.com - All Rights Reserved
                    </div>
                  </div>
                  <div class="small-3 columns">
                    <ul class="button-group links right">
                      <li><a href="/">Home</a></li><li><a href="/about">About</a></li>
                      <li><a href="/info">Info</a></li>
                    </ul>
                  </div>
                  <div class="small-3 columns">
                    <ul class="button-group icons right">
                      <li>
                        <a href="https://www.facebook.com/arctictropic">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x"></i>
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="https://twitter.com/totaladventure">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x"></i>
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="https://plus.google.com/116196719523539987197/posts">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-google fa-stack-1x"></i>
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="https://instagram.com/totaladventure">
                          <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-instagram fa-stack-1x"></i>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
        		<?php wp_footer(); ?>


		<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
    _uacct = "UA-2430184-1";
    urchinTracker();
</script>
    <script type="text/javascript">

        var urlBase = "<?php echo get_option('home'); ?>/../" ;

        $('#switch_language').change(function() {

            var str = "";
            var idLanguage = $("#switch_language option:selected").val();

            $.post('<?php echo get_option('home'); ?>/../home/changeLanguage',{idLanguage : idLanguage},

            function(data){
                window.location = "<?php echo get_option('home'); ?>/../";
            }
        );

        });

    </script>
    <script type="text/javascript">
      var masonryInit = true;
      var $container = $('#post-list .ajax-load-more');
      $.fn.almComplete = function(alm){
        if(masonryInit) {
          // initialize Masonry only once
          masonryInit = false;
          $container.masonry({
            columnWidth: '.masonry-entry',
            itemSelector: '.masonry-entry',
            percentPosition: true
          });
        } else {
          $container.masonry('reloadItems'); // Reload masonry items oafter callback
        }
        $container.imagesLoaded( function() { // When images are loaded, fire masonry again.
          $container.masonry();
        });
      };
      $('#load-more').trigger('click')
    </script>
        </body>
</html>




