<?php

// NOTE: To overwrite the script file in the parent theme uncomment this section and copy the mayecreate_sripts.js file into a folder called js in your child theme. Then edit that file.
add_action('wp_enqueue_scripts', 'mayecreate_script_fix', 100);
function mayecreate_script_fix()
{
    wp_dequeue_script('mayecreatejs'); 
    wp_dequeue_script('mc-block-editor-script');
    wp_enqueue_script('child_theme_mayecreatejs', get_stylesheet_directory_uri().'/js/mayecreate_scripts.js', array('jquery'));
}
function jsforwpblocks_editor_scripts_child() {
	
  // Make paths variables so we don't write em twice
	
  $blockPath = '/js/mayecreate_scripts.js';
  //$editorStylePath = '/style.css'; 
	
  // Enqueue the bundled block JS file
  wp_enqueue_script( 'mc-block-editor-script_child', get_stylesheet_directory_uri() . '/js/mayecreate_scripts.js', false, '1.0', 'all' );

}
// Hook scripts function into block editor hook
add_action( 'enqueue_block_editor_assets', 'jsforwpblocks_editor_scripts_child' );

add_action( 'wp_enqueue_scripts', 'mc_enqueue_child_theme_styles', PHP_INT_MAX);
function mc_enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/css/main.min.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/css/main.min.css', array('parent-style')  );
}

function parent_editor_style_setup() {
	// Add support for editor styles.
	add_editor_style(  get_template_directory_uri().'/css/main.min.css' );
}
add_action( 'after_setup_theme', 'parent_editor_style_setup' );

/* NOTE: These functions are functions that don't need to be in the parent theme because not every site will have them. */
function build_taxonomies_child() {
   register_taxonomy( 'partnercategory', 'menu', array( 'hierarchical' => true, 'label' => 'Partner Categories', 'query_var' => true, 'rewrite' => true, 'show_in_rest' => true ) );
}
add_action( 'init', 'build_taxonomies_child', 0 );

function mayecreate_create_post_type_child() {
	$include_partners_post_type = ('yes' == get_field('include_partners_post_type', 'option'));
	if ($include_partners_post_type) { 
	// Register the "Partners" custom post type if this is not needed, DELETE ME.
		register_post_type( 'partner',
			array(
				'labels' => array(
					'name'              => __( 'Partner'),
					'singular_name'     => __( 'Partners' ),
					'add_new'           => __( 'Add Partner' ),
					'add_new_item'      => __( 'Add New Partner' ),
					'edit_item'         => __( 'Edit Partner' ),  
					
				),
			'public' => true,
			'menu_position' => 10,
			'rewrite' => array('slug' => 'partner', 'with_front' => false),
			'supports' => array('title','thumbnail','revisions'),
			'menu_icon'         => 'dashicons-businessman',
			'taxonomies' => array('partnercategory'),
			'has_archive' => true 
			)
		);
	}
}
add_action( 'init', 'mayecreate_create_post_type_child' );

function child_theme_colors() {

	$primary_site_color = (get_field('primary_site_color', 'option'));
	$secondary_color = (get_field('secondary_color', 'option'));
	
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Grey', 'mayecreate-theme' ), //Name: visible to user
			'slug'  => 'grey', //Slug: used in CSS class
			'color'	=> '#aaa', //Color: used for rendering elements in the Gutenberg block editor
		),
		array(
			'name'  => __( 'Light Grey', 'mayecreate-theme' ),
			'slug'  => 'lightgrey',
			'color' => '#eee',
		),
		array(
			'name'  => __( 'Dark Grey', 'mayecreate-theme' ),
			'slug'  => 'darkgrey',
			'color' => '#666',
		),
		array(
			'name'  => __( 'Black', 'mayecreate-theme' ),
			'slug'  => 'black',
			'color' => '#000',
		),
		array(
			'name'	=> __( 'White', 'mayecreate-theme' ),
			'slug'	=> 'white',
			'color'	=> '#fff',
		),
		array(
			'name'	=> __( 'Primary Site Color', 'mayecreate-theme' ),
			'slug'	=> 'primary',
			'color'	=> $primary_site_color,
		),
		array(
			'name'	=> __( 'Secondary Site Color', 'mayecreate-theme' ),
			'slug'	=> 'secondary',
			'color'	=> $secondary_color,
		),
		array(
			'name'	=> __( 'Yellow', 'mayecreate-theme' ),
			'slug'	=> 'yellow',
			'color'	=> '#FFA50A',
		),
		array(
			'name'	=> __( 'Hot Pink Error', 'mayecreate-theme' ),
			'slug'	=> 'hotpink',
			'color'	=> '#f542e6',
		)
	) );
	
	}
add_action( 'after_setup_theme', 'child_theme_colors' );


