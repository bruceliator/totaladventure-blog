<article class="masonry-entry" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
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
	<?php the_excerpt(); ?>
	<p class="read">
		<a href="<?php the_permalink() ?>">Read More</a>
	</p>
</article><!--/.masonry-entry-->