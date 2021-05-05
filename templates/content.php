<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Melan
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Post Item Start

?>

<article id="<?php the_ID(); ?>" <?php post_class('blog_item'); ?>>
	<?php 
	/**
	 * Blog Post thumbnail
	 * @Hook  melan_blog_posts_thumb
	 *
	 * @Hooked melan_blog_posts_thumb_cb
	 * 
	 *
	 */
	do_action( 'melan_blog_posts_thumb' );

	/**
	 * 
	 * Blog details wrapper start hook function.
	 * column end.
	 *
	 * Hook melan_blog_details_wrap_start
	 *
	 * @Hooked melan_blog_details_wrap_start_cb
	 *  
	 */
	do_action( 'melan_blog_details_wrap_start' );
	
	/**
	 * Blog Post Meta
	 * @Hook  melan_blog_posts_meta
	 *
	 * @Hooked melan_blog_posts_meta_cb
	 * 
	 *
	 */
	// do_action( 'melan_blog_posts_meta' );

	/**
	 * Blog Post title
	 * @Hook  melan_blog_posts_title
	 *
	 * @Hooked melan_blog_posts_title_cb
	 * 
	 *
	 */
	do_action( 'melan_blog_posts_title' );		
	
	/**
	 * Blog Excerpt With read more button
	 * @Hook  melan_blog_posts_excerpt
	 *
	 * @Hooked melan_blog_posts_excerpt_cb
	 * @Hooked melan_blog_read_more_cb
	 * 
	 *
	 */
	do_action( 'melan_blog_posts_excerpt' );
	
	/**
	 * Blog posts info links hook function.
	 * @Hook  melan_blog_posts_info_link
	 *
	 * @Hooked melan_blog_posts_info_link_cb
	 * 
	 *
	 */
	do_action( 'melan_blog_posts_info_link' );

	/**
	 * 
	 * Blog details wrapper end hook function.
	 * column end.
	 *
	 * Hook melan_blog_details_wrap_end
	 *
	 * @Hooked melan_blog_details_wrap_end_cb
	 *  
	 */
	do_action( 'melan_blog_details_wrap_end' );
	
	?>
</article>