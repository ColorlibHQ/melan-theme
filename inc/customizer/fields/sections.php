<?php 
/**
 * @Packge     : Melan
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'melan_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'melan' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'melan_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'melan' ),
            'panel'    => 'melan_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'melan_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'melan' ),
            'panel'    => 'melan_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'melan_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'melan' ),
            'panel'    => 'melan_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'melan_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'melan' ),
            'panel'    => 'melan_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'melan_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'melan' ),
            'panel'    => 'melan_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'melan_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'melan' ),
            'panel'    => 'melan_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'melan_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'melan' ),
            'panel'    => 'melan_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'melan_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'melan' ),
            'panel'    => 'melan_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>