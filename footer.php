<?php
/**
 * @package WordPress
 * @subpackage 
 */
?>
  
            
</div>
        </div>
        
        
        
        
        <footer>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            
            
            
            
            <div class="footer-inner">
                <div class="container">                   
                    <div class="row">
                        <div class="span5">
                            <div class="row">
                                <div class="span6">
                                    <a class="home-link" href="index.php" rel="tooltip" title="Go Home"><img width="200" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Artictropic - Wordwide Adventure" /></a>
                                    <div class="social-links">
                                                                                   <a href="http://www.facebook.com/arctictropic" rel="tooltip" title="Follow us on Facebook"><img src="<?php bloginfo('template_directory'); ?>/img/i_facebook.png" alt="Follow us on Facebook" /></a>
                                        <a href="http://twitter.com/totaladventure" rel="tooltip" title="Follow us on Twitter" style="width: 37px"><img src="<?php bloginfo('template_directory'); ?>/img/i_twitter-english.png" alt="Follow us on Twitter" /></a>
                                                                                <a href="http://pinterest.com/arctictropic/" rel="tooltip" title="Follow us on Pinterest"><img src="<?php bloginfo('template_directory'); ?>/img/i_pinterest.png" alt="Follow us on Pinterest" /></a>
                                    </div>
                                    <br style="clear: both;">
                                    <p class="copy">Copyright � 2012 - Arctictropic.com - All Rights Reserved</p>
                                    <p class="legal">
                                        <a href="<?php echo get_option('home'); ?>/../privacy_policy">Privacy Policy</a> 
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo get_option('home'); ?>/../terms">Terms & Conditions</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="span7">
                            <ul class="pull-right">
                                <li><a href="<?php echo get_option('home'); ?>/../about"><i class="icon-user"></i> About</a></li>
                                <li><a href="<?php echo get_option('home'); ?>/../advertise"><i class="icon-bullhorn"></i> Advertise</a></li>
                                <li><a href="<?php echo get_option('home'); ?>/" target="_blank"><i class="icon-comment"></i> Blog</a></li>
                                <li><a href="<?php echo get_option('home'); ?>/../additional_information"><i class="icon-info-sign"></i> Useful Info</a></li>
                                <li><a href="<?php echo get_option('home'); ?>/../contact"><i class="icon-envelope"></i> Contact</a></li>
                            </ul>                             
                        </div>
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
            $('#masonry-loop').masonry({
                // options
                itemSelector: '.masonry-entry',
                columnWidth: 200
            });
        </script>
        </body>
</html>




