<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div class="columns large-8 medium-8 small-12 results-list">
<?php if(have_posts()) : ?>
  <h2 class="search-title">Search Results  for <span>'<?php the_search_query(); ?>'</span></h2>
  <?php while (have_posts()): the_post() ?>
    <article>
      <h4>
        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
      </h4>
      <time style="color: black;"><?php the_time('l, F jS, Y') ?></time>
      <dl class="tag-list">
        <dt>Tags:</dt>
        <?php the_tags('<dd>',', ', '</dd>') ?>
        <dt>Posted in:</dt>
        <?php the_terms( $post->ID, 'countries', '<dd>', ', ', '</dd>' ); ?>
      </dl>
    </article>
  <?php endwhile ?>
  <div><strong><?php next_posts_link('&laquo; Older Posts') ?></strong></div>
  <div class="alignright"><strong><?php previous_posts_link('Newer Posts &raquo;') ?></strong></div>
<?php else : ?>
  <h2 class="text-center">No posts found. Try a different search?</h2>
<?php endif ?>
</div>
<?php if (!my_wp_is_mobile()) { ?>
  <div class="columns large-4 medium-4">
    <?php get_sidebar() ?>
  </div>
<?php } ?>


<?php get_footer(); ?>