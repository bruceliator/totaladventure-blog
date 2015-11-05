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




