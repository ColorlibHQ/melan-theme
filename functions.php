<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'MELAN_DIR_URI' ) ) {
	define( 'MELAN_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'MELAN_DIR_ASSETS_URI' ) ) {
	define( 'MELAN_DIR_ASSETS_URI', MELAN_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'MELAN_DIR_CSS_URI' ) ) {
	define( 'MELAN_DIR_CSS_URI', MELAN_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'MELAN_DIR_JS_URI' ) ) {
	define( 'MELAN_DIR_JS_URI', MELAN_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'MELAN_DIR_IMGS_URI' ) ) {
	define( 'MELAN_DIR_IMGS_URI', MELAN_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'MELAN_DIR_ICON_IMG_URI' ) ) {
	define( 'MELAN_DIR_ICON_IMG_URI', MELAN_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'MELAN_DIR_PATH' ) ) {
	define( 'MELAN_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'MELAN_DIR_PATH_INC' ) ) {
	define( 'MELAN_DIR_PATH_INC', MELAN_DIR_PATH . 'inc/' );
}

//Melan Libraries Folder Directory
if ( ! defined( 'MELAN_DIR_PATH_LIBS' ) ) {
	define( 'MELAN_DIR_PATH_LIBS', MELAN_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'MELAN_DIR_PATH_CLASSES' ) ) {
	define( 'MELAN_DIR_PATH_CLASSES', MELAN_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'MELAN_DIR_PATH_HOOKS' ) ) {
	define( 'MELAN_DIR_PATH_HOOKS', MELAN_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function melan_admin_script(){
    wp_enqueue_style( 'melan-admin', get_template_directory_uri().'/assets/css/melan-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'melan_admin', get_template_directory_uri().'/assets/js/melan-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'melan_admin_script' );



/**
 * Include File
 *
 */
require_once( MELAN_DIR_PATH_INC . 'melan-breadcrumbs.php' );
require_once( MELAN_DIR_PATH_INC . 'melan-widgets-reg.php' );
require_once( MELAN_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( MELAN_DIR_PATH_INC . 'post-like.php' );
require_once( MELAN_DIR_PATH_INC . 'melan-functions.php' );
require_once( MELAN_DIR_PATH_INC . 'melan-commoncss.php' );
require_once( MELAN_DIR_PATH_INC . 'support-functions.php' );
require_once( MELAN_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( MELAN_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( MELAN_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( MELAN_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( MELAN_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( MELAN_DIR_PATH_HOOKS . 'hooks.php' );
require_once( MELAN_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( MELAN_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( MELAN_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Melan object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Melan = new Melan();