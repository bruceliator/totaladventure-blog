<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header('inner');
?>

  <div class="row page-title">
        <div class="span1">&nbsp;</div>
        <div class="span10">
            <h1><span class="brand"><img src="<?php bloginfo('template_directory'); ?>/img/logo-clean.png" alt="Artictropic - Wordwide Adventure" /></span><br/><span>Blog</span></h1>

    
        </div>
        <div class="span1 hidden-phone">&nbsp;</div>

<?php
 $blog_template = get_bloginfo('template_directory')."/addthis.php";
 include (TEMPLATEPATH . '/addthis.php'); 
 ?>

   </div>
   
<div id="post-list" class="post-list">   
                
                 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>





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
<!-- google_ad_section_start -->
      <div class="post">
			<h3><?php the_title(); ?></h3>
      <small>Posted on <?php the_time('l, F jS, Y') ?> by <?php the_author();?></small>
      

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php echo get_the_term_list( $post->ID, 'countries', 'Countries: ', ', ', '' ); ?> | <?php edit_post_link('Edit', '', '  '); ?> | <?php// comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>
		

	<?php comments_template(); ?>
</div>
	<?php endwhile;?> 
  <!-- google_ad_section_end -->
  </div>


            <div class="span1 hidden-phone">&nbsp;</div>     
  
  
  <?php else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>


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