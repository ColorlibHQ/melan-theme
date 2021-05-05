<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'melan_preloader', 'melan_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'melan_header', 'melan_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'melan_footer', 'melan_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'melan_wrp_start', 'melan_wrp_start_cb', 10 );
	add_action( 'melan_wrp_end', 'melan_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'melan_blog_col_start', 'melan_blog_col_start_cb', 10 );
	add_action( 'melan_blog_col_end', 'melan_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'melan_blog_posts_thumb', 'melan_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'melan_blog_details_wrap_start', 'melan_blog_details_wrap_start_cb', 10 );
	add_action( 'melan_blog_details_wrap_end', 'melan_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'melan_blog_posts_title', 'melan_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'melan_blog_posts_meta', 'melan_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'melan_blog_posts_excerpt', 'melan_blog_posts_excerpt_cb', 10 );
	// add_action( 'melan_blog_posts_excerpt', 'melan_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'melan_blog_posts_info_link', 'melan_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'melan_blog_posts_content', 'melan_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'melan_blog_posts_share', 'melan_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'melan_blog_sidebar', 'melan_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'melan_blog_single_meta', 'melan_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'melan_page_content', 'melan_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'melan_fof', 'melan_fof_cb', 10 );

	

?>