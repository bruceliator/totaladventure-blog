<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php if (!my_wp_is_mobile()) { ?>
  <div class="columns large-4 medium-4 small-12 floated-sidebar">
    <?php get_sidebar() ?>
  </div>
<?php } ?>
<div id="post-list" class="post-list columns large-8 medium-8 small-12 ">

  <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="5" pause="true" scroll="false" button_label="Load more"]') ?>
    </div>


<?php get_footer(); ?>