<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

$content_width = 450;

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
			'name' => 'mobile-menu',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
	));
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 644, 208, true ); // Normal post thumbnails 

add_action( 'init', 'create_my_taxonomies', 0 );

function create_my_taxonomies() {
	register_taxonomy( 'countries', 'post', array( 'hierarchical' => false, 'label' => 'Countries', 'query_var' => true, 'rewrite' => true ) );
	
}
function custom_tax_title() {
	echo end(explode('|', wp_title('|',false,'')));
}

function catch_that_image($size = 'full') {
	if (has_post_thumbnail()) {
		$image_id = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src($image_id, $size);
		$image_url = $image_url[0];
	}	else {
		global $post, $posts;
		$image_url = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$image_url = $matches[1][0];

		if(empty($image_url)) {
			$image_url = get_bloginfo('stylesheet_directory'). '/img/sample/big_sample1.jpg';
		}
	}
	return $image_url;
}

// Load Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );

}

function custom_comments( $comment, $args, $depth ) {
$GLOBALS['comment'] = $comment;
switch( $comment->comment_type ) :
	case 'pingback' :
	case 'trackback' : ?>
		<li <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
		<div class="back-link">< ?php comment_author_link(); ?></div>
	<?php break;
	default : ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<article <?php comment_class(); ?> class="comment">
			<div class="comment-body">
        <div class="row">
          <div class="columns large-2 medium-2 small-2 no-padding-for-small">
            <div class="user-logo author-img left">
              <?php echo get_avatar( $comment, 100 ); ?>
            </div>
          </div>
          <div class="columns large-10 medium-10 small-10">
            <span class="author-comment-name"><?php comment_author(); ?></span>
            <time <?php comment_time( 'c' ); ?> class="comment-time">
	            <span class="date" style="color: rgb(157, 158, 160);">
	            <?php comment_date('n.j.Y'); ?>
	            </span>
            </time>
            <?php comment_text(); ?>
            <div class="reply"><?php
              comment_reply_link( array_merge( $args, array(
                  'reply_text' => 'Reply',
                  'after' => ' <span></span>',
                  'depth' => $depth,
                  'max_depth' => $args['max_depth']
              ) ) ); ?>
            </div><!-- .reply -->
          </div>
        </div>
			</div>
	</article>
	<?php // End the default styling of comment
	break;
	endswitch;
	}

  function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
  }

  function div_wrapper($content) {
// match any iframes
    $pattern = '~<iframe.*</iframe>~';
    preg_match_all($pattern, $content, $matches);

    foreach ($matches[0] as $match) {
      // wrap matched iframe with div
      $wrappedframe = '<div class="flex-video">' . $match . '</div>';

      //replace original iframe with new in content
      $content = str_replace($match, $wrappedframe, $content);
    }

    return $content;
  }
  add_filter('the_content', 'div_wrapper');

  /* check if user using smaller mobile device */
  function my_wp_is_mobile() {
    include_once ( get_template_directory() . '/Mobile_Detect.php');
    $detect = new Mobile_Detect();
    if( $detect->isMobile() && !$detect->isTablet() ) {
      return true;
    } else {
      return false;
    }
  }

	?>
