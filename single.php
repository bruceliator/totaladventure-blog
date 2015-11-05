<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
  get_header('inner');
?>
<div class="columns large-8 medium-8 small-12 inner-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="columns large-12 medium-12 small-3 right-for-small">
      <span class="date"><?php the_time('M jS') ?></span>
    </div>
    <div class="columns large-12 medium-12 small-9">
      <p class="title"><?php the_title() ?></p>
    </div>
  </div>
  <div class="row">
    <div class="columns large-2 medium-2 small-2 no-padding">
      <div class="user-logo author-img left">
        <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
      </div>
    </div>
    <div class="columns large-10 medium-10 small-10">
      <div class="author-name">
        <?php the_author() ?>
      </div>
    </div>
  </div>
  <dl class="tag-list single-tags">
    <dt>Tags:</dt>
    <?php the_tags('<dd>',', ', '</dd>') ?>
    <dt>Posted in:</dt>
    <?php the_terms( $post->ID, 'countries', '<dd>', ', ', '</dd>' ); ?>
  </dl>
  <div class="inner-text">
    <?php the_content() ?>
  </div>
  <div class="comment-wrapper">
    <h2>Comments</h2>
    <?php comments_template(); ?>
  </div>
  <?php
    if (my_wp_is_mobile()) {
      echo '<div class="row collapse mobile-share-wrap">';
      echo '<div class="mobile-share columns small-4">Share:</div>';
      echo '<div class="columns small-8">';
      $blog_template = get_bloginfo('template_directory')."/addthis.php";
      include (TEMPLATEPATH . '/addthis.php');
      echo '</div>';
      echo '</div>';
    }
  ?>
<?php endwhile ?>
<?php endif ?>
</div>
<?php if (!my_wp_is_mobile()) { ?>
  <div class="columns large-4 medium-4 small-12 floated-sidebar">
    <?php get_sidebar() ?>
  </div>
<?php } ?>


<?php get_footer(); ?>