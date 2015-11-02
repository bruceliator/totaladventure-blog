<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<!--  <div class="row page-title">-->
<!--        <div class="span1">&nbsp;</div>-->
<!--        <div class="span10">-->
<!--            <h1><span class="brand"><img src="--><?php //bloginfo('template_directory'); ?><!--/img/logo-clean.png" alt="Artictropic - Wordwide Adventure" /></span><br/><span>Blog</span></h1>-->
<!--        </div>-->
<!--        <div class="span1 hidden-phone">&nbsp;</div>-->
<!--        -->
<?php
// $blog_template = get_bloginfo('template_directory')."/addthis.php";
// include (TEMPLATEPATH . '/addthis.php');
// ?>
<!---->
<!--   </div>-->

<?php if (!my_wp_is_mobile()) { ?>
  <div class="columns large-4 medium-4 small-12 floated-sidebar">
    <?php get_sidebar() ?>
  </div>
<?php } ?>
<div id="post-list" class="post-list columns large-8 medium-8 small-12 ">

<!--	--><?php //if (have_posts()) : ?>
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
<!--</div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="span1 hidden-phone">&nbsp;</div>-->
<!--            <div class="span7">-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--<div id="list_content">-->
<!--<!-- google_ad_section_start -->-->
<!--		--><?php //while (have_posts()) : the_post(); ?>
<!---->
<!--			<div --><?php //post_class() ?><!-- id="post---><?php //the_ID(); ?><!--">-->
<!--				<h3><a href="--><?php //the_permalink() ?><!--" rel="bookmark" title="Permanent Link to --><?php //the_title_attribute(); ?><!--">--><?php //the_title(); ?><!--</a></h3>-->
<!--				<small>Posted on --><?php //the_time('F jS, Y') ?><!--  by --><?php //the_author() ?><!--</small>-->
<!---->
<!--				<div class="entry">-->
<!--					--><?php //the_content('Read the rest of this entry &raquo;'); ?>
<!--				</div>-->
<!---->
<!--				<p class="postmetadata">--><?php //the_tags('Tags: ', ', ', '<br />'); ?><!-- Posted in --><?php //the_category(', ') ?><!-- | --><?php //echo get_the_term_list( $post->ID, 'countries', 'Countries: ', ', ', '' ); ?><!-- | --><?php //edit_post_link('Edit', '', ' | '); ?><!--  --><?php //comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?><!--</p>-->
<!--			</div>-->
<!---->
<!--			<div class="list_separator"></div>-->
<!---->
<!--		--><?php //endwhile; ?>
<!--<!-- google_ad_section_end -->-->
<!--</div>-->
<!---->
<!---->
<!--            <div class="span1 hidden-phone">&nbsp;</div>-->
<!---->
<!---->
<!--	--><?php //else : ?>
<!---->
<!--		<h2 class="center">Not Found</h2>-->
<!--		<p class="center">Sorry, but you are looking for something that isn't here.</p>-->
<!--		--><?php //get_search_form(); ?>
<!---->
<!--	--><?php //endif; ?>
<!---->
<!---->
<!--</div>-->
<!---->
<!---->
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
<!--	--><?php //if ( have_posts() ) : ?>
<!--		<div id="masonry-loop">-->
<!--			--><?php ///* The loop */ ?>
<!--			--><?php //while ( have_posts() ) : the_post(); ?>
<!--				--><?php //get_template_part( 'content', 'masonry') ?>
<!--    --><?php //endwhile; ?>
<!--		</div><!--/#masonry-loop-->-->
<!--	--><?php //endif; ?>
  <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="5" pause="true" scroll="false" button_label="Load more"]') ?>
    </div>


<?php get_footer(); ?>