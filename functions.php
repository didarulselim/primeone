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
add_image_size( 'template-single', 750, 425,true );

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

//Titan framework added
require_once( 'inc/Titan-Framework/titan-framework-embedder.php' );


//TF Options
add_action( 'tf_create_options', 'primeone_create_options' );
function primeone_create_options() {
    // We create all our options here
    $titan = TitanFramework::getInstance( 'primeone' );
    $panel = $titan->createAdminPanel( array(
    'name' => 'Theme Options',
) );



// Create an admin tab inside the admin page above
$generaltab = $panel->createTab( array(
    'name' => 'General Options',
) );

    $generaltab->createOption( array(
        'name' => 'Your Brand Name',
        'id' => 'po_brand',
        'type' => 'text',
        'desc' => 'Here will be our brand name',
        'default' => 'CrackHT.ML'
    ) );
    $generaltab->createOption( array(
        'name' => 'Your Brand main slogan',
        'id' => 'po_hero_h',
        'type' => 'text',
        'desc' => 'Here will be our brand main slogan',
        'default' => 'Distributed with <3 from GitHub'
    ) );
    $generaltab->createOption( array(
        'name' => 'Your Brand main slogan Description',
        'id' => 'po_hero_p',
        'type' => 'textarea',
        'desc' => 'Here will be our brand main slogan Description',
        'default' => 'CrackHTML is a free html template download platform for building simple and beautiful websites. Download, clone from GitHub, edit the text and add your own photo to make it your own.'
    ) );
    $generaltab->createOption( array(
        'name' => 'Main slogan Buton Text',
        'id' => 'po_hero_bt',
        'type' => 'text',
        'desc' => 'Buton Text',
        'default' => "Let's Rock"
    ) );
  $generaltab->createOption( array(
        'name' => 'Main slogan Buton URL',
        'id' => 'po_hero_ba',
        'type' => 'text',
        'desc' => 'Buton URL',
        'default' => "https://crackht.ml/"
    ) );
  $generaltab->createOption( array(
        'name' => 'Open Source Dialog heading',
        'id' => 'po_op_h',
        'type' => 'text',
        'desc' => 'Open Source Dialog heading like (Forever free, open source, and easy to use.)',
        'default' => "Forever free, open source, and easy to use."
    ) );
  $generaltab->createOption( array(
        'name' => 'Open Source Dialog Description',
        'id' => 'po_op_d',
        'type' => 'textarea',
        'desc' => 'Open Source Dialog description',
        'default' => "CrackHTML is a collection of <b>free to download HTML and templates.</b> Our templates are open source and you can use them for any purpose!"
    ) );

    $generaltab->createOption( array(
        'type' => 'save',
    ) );

    $githubltab = $panel->createTab( array(
        'name' => 'Github Options',
    ) );
    $githubltab->createOption( array(
        'name' => 'Github Username/ organization Name',
        'id' => 'po_git_u',
        'type' => 'text',
        'desc' => 'Open Source Gihub Handle',
        'default' => "crackhtml"
    ) );

    $githubltab->createOption( array(
        'type' => 'save',
    ) );



    //meta box

    $metaBox = $titan->createMetaBox( array(
        'name' => 'Special Options',
        'post_type' => 'template',
    ) );

    $metaBox->createOption( array(
        'name' => 'Github Repository Name',
        'id' => 'po_git_meta_repo',
        'type' => 'text',
        'desc' => 'Open Source Gihub Repo Name Exactly',
    ) );
    $metaBox->createOption( array(
        'name' => 'Sort Descreaption',
        'id' => 'po_meta_sd',
        'type' => 'text',
        'desc' => 'Short Descreaption of the template.',
    ) );




    //end options
}