<?php 
/*
YARPP Template: Totaladventure
Author: bruceliator (Tsibulko Alexandr)
Description: A simple example YARPP template.
*/
?><h3>Related articles</h3>
<?php if (have_posts()):?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="columns large-4 medium-4 small-12">
		<article class="related-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
      <div class="row">
        <div class="columns large-12 medium-12 small-3 photo no-padding">
          <a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>">
            <?php
            echo '<img src="';
            echo catch_that_image();
            echo '" alt="" />';
            ?>
            <div class="mark show-for-medium-up"><?php the_time('M jS') ?></div>
          </a>
        </div>
        <div class="columns large-12 medium-12 small-9 no-padding text-wrap">
          <h4><?php the_title(); ?></h4>
          <p class="related-time show-for-small-only"><?php the_time('M jS') ?></p>
          <p class="excerpt"><?php echo excerpt(15); ?></p>
          <p class="read show-for-medium-up">
            <a href="<?php the_permalink() ?>">Read More</a>
          </p>
        </div>
      </div>
		</article>
  </div>
	<?php endwhile; ?>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
