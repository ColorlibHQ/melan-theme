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

	$melan_reservation_title     = !empty( melan_opt( 'melan_reservation_title' ) ) ? melan_opt( 'melan_reservation_title' ) : '';
	$melan_reservation_sub_title = !empty( melan_opt( 'melan_reservation_sub_title' ) ) ? melan_opt( 'melan_reservation_sub_title' ) : '';
	$melan_reservation_btn_text  = !empty( melan_opt( 'melan_reservation_btn_text' ) ) ? melan_opt( 'melan_reservation_btn_text' ) : '';
	$melan_reservation_btn_url	  = !empty( melan_opt( 'melan_reservation_btn_url' ) ) ? melan_opt( 'melan_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $melan_reservation_title )?></h3>
			<p><?php echo esc_html( $melan_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $melan_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $melan_reservation_btn_text )?></a>
		</div>
	</div>