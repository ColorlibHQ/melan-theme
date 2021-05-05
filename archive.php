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

	//  Call Header
	get_header();

	/**
	 * 
	 * Hook for Blog, single, page, search, archive pages
	 * wrapper start with wrapper div, container, row.
	 *
	 * Hook melan_wrp_start
	 *
	 * @Hooked melan_wrp_start_cb
	 *  
	 */
	do_action( 'melan_wrp_start' );
	
	/**
	 * 
	 * Hook for Blog, single, search, archive pages
	 * column start.
	 *
	 * Hook melan_blog_col_start
	 *
	 * @Hooked melan_blog_col_start_cb
	 *  
	 */
	do_action( 'melan_blog_col_start' );


	if( have_posts() ){
		while( have_posts() ){
			the_post();
			// Post Contant
			get_template_part( 'templates/content', get_post_format() );
		}
		// Pagination
		get_template_part( 'templates/pagination' );
		// Reset Data
		wp_reset_postdata();
	}else{
		get_template_part( 'templates/content', 'none' );
	}


	
	/**
	 * 
	 * Hook for Blog, single, search, archive pages
	 * column end.
	 *
	 * Hook melan_blog_col_end
	 *
	 * @Hooked melan_blog_col_end_cb
	 *  
	 */
	do_action( 'melan_blog_col_end' );

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
	// do_action( 'melan_blog_details_wrap_start' );

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
	// do_action( 'melan_blog_details_wrap_end' );
	
	/**
	 * 
	 * Hook for Blog, single blog, search, archive pages sidebar.
	 *
	 * Hook melan_blog_sidebar
	 *
	 * @Hooked melan_blog_sidebar_cb
	 *  
	 */
	do_action( 'melan_blog_sidebar' );
 	
 	/**
	 * Hook for Blog, single, page, search, archive pages
	 * wrapper end with wrapper div, container, row.
 	 *
 	 * Hook melan_wrp_end
 	 * @Hooked  melan_wrp_end_cb
 	 *
 	 */
 	do_action( 'melan_wrp_end' );
 	
	 // Call Footer
	 get_footer();
?>