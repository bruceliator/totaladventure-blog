<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header('inner');
?>

	<div class="columns large-8 medium-8 small-12 inner-content">
		<?php if (have_posts()) : ?>
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
      <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2 class="pagetitle">Archive for the <span>'<?php single_cat_title(); ?>'</span> Category</h2>
        <?php /* If this is a tag archive */ } elseif( is_tax() ) { ?>
        <h2 class="pagetitle">Posts labeled with Country <span>'<?php custom_tax_title(); ?>'</span></h2>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2 class="pagetitle">Posts Tagged <span>'<?php single_tag_title(); ?>'</span></h2>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2 class="pagetitle">Archive for <span><?php the_time('F jS, Y'); ?></span></h2>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2 class="pagetitle">Archive for <span><?php the_time('F, Y'); ?></span></h2>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2 class="pagetitle">Archive for <span><?php the_time('Y'); ?></span></h2>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2 class="pagetitle">Author Archive</h2>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2 class="pagetitle">Blog Archives</h2>
      <?php } ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="row">
          <div class="columns large-12 medium-12 small-3 right-for-small">
            <span class="date"><?php the_time('M jS') ?></span>
          </div>
          <div class="columns large-12 medium-12 small-9">
            <p class="title linked-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
          </div>
        </div>
        <dl class="tag-list">
          <dt>Tags:</dt>
          <?php the_tags('<dd>',', ', '</dd>') ?>
          <dt>Posted in:</dt>
          <?php the_terms( $post->ID, 'countries', '<dd>', ', ', '</dd>' ); ?>
        </dl>
        <div class="inner-text">
          <?php the_content() ?>
        </div>
		  <?php endwhile ?>
    <?php else :
      if ( is_category() ) {
      printf("<h2 class='text-center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
      } else if ( is_date() ) { // If this is a date archive
        echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
      } else {
        echo("<h2 class='text-center'>No posts found.</h2>");
      }
      get_search_form();
    ?>
		<?php endif ?>
	</div>
<?php if (!my_wp_is_mobile()) { ?>
	<div class="columns large-4 medium-4 small-12 floated-sidebar">
		<?php get_sidebar() ?>
	</div>
<?php } ?>

<?php get_footer(); ?>