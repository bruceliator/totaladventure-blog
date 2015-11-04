<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header('inner');
?>

	<div id="content" class="columns large-8 medium-8 small-12 large-centered">
		<h2 class="text-center">Error 404 - Not Found</h2>
	</div>
<?php if (!my_wp_is_mobile()) { ?>
	<div class="columns large-4 medium-4 small-12 floated-sidebar">
		<?php get_sidebar() ?>
	</div>
<?php } ?>

<?php get_footer(); ?>