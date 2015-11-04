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

  <!--  <div class="row page-title">-->
<!--        <div class="span1">&nbsp;</div>-->
<!--        <div class="span10">-->
<!--            <h1><span class="brand"><img src="--><?php //bloginfo('template_directory'); ?><!--/img/logo-clean.png" alt="Artictropic - Wordwide Adventure" /></span><br/><span>Blog</span></h1>-->
<!---->
<!--		<h2 class="pagetitle">Search Results  for <span>'--><?php //the_search_query(); ?><!--'</span></h2>-->
<!--    -->
<!--        </div>-->
<!--        <div class="span1 hidden-phone">&nbsp;</div>-->
<!---->
<?php
// $blog_template = get_bloginfo('template_directory')."/addthis.php";
// include (TEMPLATEPATH . '/addthis.php');
// ?>
<!---->
<!--   </div>-->
<!--   -->
<!--<div id="post-list" class="post-list">   -->
<!---->
<!---->
<!--	--><?php //if (have_posts()) : ?>
<!---->
<!---->
<!---->
<!--	<div class="wpnav row">-->
<!--<div class="span1 hidden-phone">&nbsp; </div>-->
<!--<div class="span2">-->
<!--<div class="alignleft"><strong>--><?php //next_posts_link('&laquo; Older Entries') ?><!--</strong></div>-->
<!--</div>-->
<!--<div class="span3">&nbsp;</div>-->
<!--<div class="span2">-->
<!--<div class="alignright"><strong>--><?php //previous_posts_link('Newer Entries &raquo;') ?><!--</strong></div>-->
<!--</div>-->
<!---->
<!--</div>      -->
<!--      -->
<!--        <div class="row">-->
<!--            <div class="span1 hidden-phone">&nbsp;</div>-->
<!--            <div class="span7">-->
<!--    -->
<!--<div id="list_content">-->
<!---->
<!---->
<!---->
<!---->
<!--		--><?php //while (have_posts()) : the_post(); ?>
<!---->
<!--			<div --><?php //post_class() ?><!-->-->
<!--				<h3 id="post---><?php //the_ID(); ?><!--"><a href="--><?php //the_permalink() ?><!--" rel="bookmark" title="Permanent Link to --><?php //the_title_attribute(); ?><!--">--><?php //the_title(); ?><!--</a></h3>-->
<!--				<small>--><?php //the_time('l, F jS, Y') ?><!--</small>-->
<!---->
<!--				<p class="postmetadata">--><?php //the_tags('Tags: ', ', ', '<br />'); ?><!-- Posted in --><?php //the_category(', ') ?><!-- | --><?php //echo get_the_term_list( $post->ID, 'countries', 'Countries: ', ', ', '' ); ?><!-- | --><?php //edit_post_link('Edit', '', ' | '); ?><!--  --><?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?><!--</p>-->
<!--			</div>-->
<!--			  <div class="list_separator"></div>-->
<!---->
<!--		--><?php //endwhile; ?>
<!---->
<!---->
<!--</div>-->
<!---->
<!---->
<!--            <div class="span1 hidden-phone">&nbsp;</div>     -->
<!---->
<!---->
<!--	--><?php //else : ?>
<!---->
<!--		<h2 class="center">No posts found. Try a different search?</h2>-->
<!--		--><?php //get_search_form(); ?>
<!---->
<!---->
<!---->
<!--	--><?php //endif; ?>
<!---->
<!---->
<!--</div>-->
<!---->
<!--<div class="span3">-->
<!--  --><?php //get_sidebar();?>
<!--</div>-->
<!---->
<!--        </div>-->
<!--        -->
<!--<div class="closing row">-->
<!--<div class="span1 hidden-phone">&nbsp; </div>-->
<!--<div class="span2">-->
<!--<div class="alignleft"><strong>--><?php //next_posts_link('&laquo; Older Entries') ?><!--</strong></div>-->
<!--</div>-->
<!--<div class="span3">&nbsp;</div>-->
<!--<div class="span2">-->
<!--<div class="alignright"><strong>--><?php //previous_posts_link('Newer Entries &raquo;') ?><!--</strong></div>-->
<!--</div>-->
<!--    </div>-->
<!--            -->
<!--        -->
<!--    </div>-->


<?php get_footer(); ?>