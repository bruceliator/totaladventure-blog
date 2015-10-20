<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>



  <div class="row page-title">
        <div class="span1">&nbsp;</div>
        <div class="span10">
            <h1><span class="brand"><img src="<?php bloginfo('template_directory'); ?>/img/logo-clean.png" alt="Artictropic - Wordwide Adventure" /></span><br/><span>Blog</span></h1>

		<h2 class="pagetitle">Posts labeled with Country <span>'<?php custom_tax_title(); ?>'</span></h2>
    
        </div>
        <div class="span1 hidden-phone">&nbsp;</div>

<?php
 $blog_template = get_bloginfo('template_directory')."/addthis.php";
 include (TEMPLATEPATH . '/addthis.php'); 
 ?>

   </div>
   
<div id="post-list" class="post-list">   
   

		<?php if (have_posts()) : ?>



	<div class="wpnav row">
<div class="span1 hidden-phone">&nbsp; </div>
<div class="span2">
<div class="alignleft"><strong><?php next_posts_link('&laquo; Older Entries') ?></strong></div>
</div>
<div class="span3">&nbsp;</div>
<div class="span2">
<div class="alignright"><strong><?php previous_posts_link('Newer Entries &raquo;') ?></strong></div>
</div>

</div>      
      
        <div class="row">
            <div class="span1 hidden-phone">&nbsp;</div>
            <div class="span7">
    
<div id="list_content">


		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small>Posted on <?php the_time('l, F jS, Y') ?> by <?php the_author();?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php echo get_the_term_list( $post->ID, 'countries', 'Countries: ', ', ', '' ); ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>
			
						  <div class="list_separator"></div>

		<?php endwhile; ?>
</div>


            <div class="span1 hidden-phone">&nbsp;</div>     


		



	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

</div>

<div class="span3">
  <?php get_sidebar();?>
</div>

        </div>
        
<div class="closing row">
<div class="span1 hidden-phone">&nbsp; </div>
<div class="span2">
<div class="alignleft"><strong><?php next_posts_link('&laquo; Older Entries') ?></strong></div>
</div>
<div class="span3">&nbsp;</div>
<div class="span2">
<div class="alignright"><strong><?php previous_posts_link('Newer Entries &raquo;') ?></strong></div>
</div>
    </div>
            
        
    </div>


<?php get_footer(); ?>