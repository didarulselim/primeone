<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo get_the_title(); ?>  || <?php bloginfo( 'name' ); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="font-awesome/<?php echo get_template_directory_uri() ?>/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/bose.slider.js"></script>
    <?php wp_head();?>
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<?php $titan = TitanFramework::getInstance( 'primeone' );
					$po_brand = $titan->getOption( 'po_brand' );?>
                <a class="navbar-brand" href="<?php echo home_url();?>"><?php echo $po_brand ;?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
            wp_nav_menu( array(
                    'menu'              => 'main_menu',
                    'theme_location'    => 'main_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
            <!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header> <!--end header-->

