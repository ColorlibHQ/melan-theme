<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Melan
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
			
	$social_opt = melan_opt('melan_social_profile_toggle');
	$social_items = melan_opt('melan_social_profiles');
	?>

	<div class="col-xl-6 col-md-6">
		<?php
			if(has_nav_menu('footer-menu')) {
				wp_nav_menu(array(
					'menu'            => 'footer-menu',
					'theme_location'  => 'footer-menu',
					'menu_id'         => false,
					'container_class' => 'menu_links',
					'container_id'    => false,
					'menu_class'      => false,
					'depth'           => 1,
				));
			}
		?>
	</div>
	<div class="col-xl-6 col-md-6">
		<?php
			// Social profiles
			if ( $social_opt == true ) {
				if( is_array( $social_items ) && count( $social_items ) > 0 ){
					echo '<div class="socail_links"><ul>';
						foreach ($social_items as $value) {
							echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
						}
					echo '</ul></div>';
				}          
			}  
		?>
	</div>