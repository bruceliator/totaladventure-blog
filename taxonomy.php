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
			<h2 class="pagetitle">Posts labeled with Country <span>'<?php custom_tax_title(); ?>'</span></h2>
			<?php while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="columns large-12 medium-12 small-3 right-for-small">
						<span class="date"><?php the_time('M jS') ?></span>
					</div>
					<div class="columns large-12 medium-12 small-9">
						<p class="title linked-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
					</div>
				</div>
				<dl class="tag-list ">
					<dt>Tags:</dt>
					<?php the_tags('<dd>',', ', '</dd>') ?>
					<dt>Posted in:</dt>
					<?php the_terms( $post->ID, 'countries', '<dd>', ', ', '</dd>' ); ?>
				</dl>
				<div class="inner-text">
					<?php the_content() ?>
				</div>
			<?php endwhile ?>
      <div class="left"><strong><?php next_posts_link('&laquo; Older Entries') ?></strong></div>
      <div class="right"><strong><?php previous_posts_link('Newer Entries &raquo;') ?></strong></div>
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