<?php 
/*
 * Instantiates wordpress menus
 */
if (!function_exists( 'mayecreate_wp_bootstrapwp_theme_setup' ) ):
  		function mayecreate_wp_bootstrapwp_theme_setup() {
    	// Adds the main menu
    	register_nav_menus( array(
      		'top-menu' 		=> __( 'Top Menu', 'mayecreate_wp_bootstrapwp' ),
      		'main-menu'		=> __( 'Main Menu', 'mayecreate_wp_bootstrapwp' ),
      		'footer-menu' 	=> __( 'Footer Menu', 'mayecreate_wp_bootstrapwp' ),
      		'footer-menu-2' 	=> __( 'Footer Menu 2', 'mayecreate_wp_bootstrapwp' ),
      		'footer-menu-3' 	=> __( 'Footer Menu 3', 'mayecreate_wp_bootstrapwp' ),
      		'footer-menu-4' 	=> __( 'Footer Menu 4', 'mayecreate_wp_bootstrapwp' ),
      		'footer-menu-5' 	=> __( 'Footer Menu 5', 'mayecreate_wp_bootstrapwp' ),
      		'mobile-menu' 	=> __( 'Mobile Menu', 'mayecreate_wp_bootstrapwp' ),
    	));
}
endif;
add_action( 'after_setup_theme', 'mayecreate_wp_bootstrapwp_theme_setup' );