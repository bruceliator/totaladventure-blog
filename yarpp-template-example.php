<?php 
/*
YARPP Template: Totaladventure
Author: bruceliator (Tsibulko Alexandr)
Description: A simple example YARPP template.
*/
?><h3>Related articles</h3>
<?php if (have_posts()):?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="columns large-4 medium-4 small-4">
		<article class="related-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<div class="photo">
				<a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>">
					<?php
					echo '<img src="';
					echo catch_that_image();
					echo '" alt="" />';
					?>
					<div class="mark"><?php the_time('M j S') ?></div>
				</a>
			</div><!--.masonry-thumbnail-->
			<h4><?php the_title(); ?></h4>
			<p class="excerpt"><?php echo excerpt(15); ?></p>
			<p class="read">
				<a href="<?php the_permalink() ?>">Read More</a>
			</p>
		</article><!--/.masonry-entry-->
  </div>
	<?php endwhile; ?>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
