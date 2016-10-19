<?php 
// navigation menu 

register_nav_menus( array(
	'main_menu' => 'Main Menu',
) );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

//thumbnail suppor
add_theme_support( 'post-thumbnails' );
add_image_size( 'template-thumb', 358, 250 );
add_image_size( 'template-slider', 1400, 450 );

// template post type intiation

add_action( 'init', 'primeone_create_posttype' );
function primeone_create_posttype() {
  register_post_type( 'template',
    array(
      'labels' => array(
        'name' => __( 'Templates' ),
        'singular_name' => __( 'Template' )
      ),
      'public' => true,
      'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields'),

        'rewrite' => array('slug' => 'templates'),
    )
  );
}

//add category at templarte

add_action( 'init', 'create_book_tax' );

function create_book_tax() {
	register_taxonomy(
		'tm_cat',
		'template',
		array(
			'label' => __( 'Category' ),
			'rewrite' => array( 'slug' => 'category' ),
			'hierarchical' => true,
		)
	);
	
}