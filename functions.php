<?php 
// navigation menu 

register_nav_menus( array(
	'main_menu' => 'Main Menu',
) );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

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