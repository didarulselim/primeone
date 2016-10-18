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
      <a class="navbar-brand" href="index.html">Brand Bootstrap</a>
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


    <!-- Home -->

    <section class="container-fluid  bose" id="Home">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    			<h2 class="heading">
    				Distributed with <3 from GitHub
    			</h2>
    			<p class="discription">CrackHTML is a free html template download platform for building simple and beautiful websites. Download, clone from GitHub, edit the text and add your own photo to make it your own.
    			</p>
    				<a href="#call_to_action" class="btn btn-lg btn-default lm-btn">Learn more</a>
    			
    		</div>
    	</div>
    </section>
    <!-- end home section -->
	<script>
    $(document).ready(function() {

      $(".bose").bose({
        images : [ "<?php echo get_template_directory_uri() ?>/image/slider-1.jpg", "<?php echo get_template_directory_uri() ?>/image/slider-2.jpg", "<?php echo get_template_directory_uri() ?>/image/slider-3.jpg"],
        

      });

    });
  </script>
    <!-- call to action -->
    <section class="container-fluid call_to_action" id="call_to_action">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="cl-heading">Forever free, open source, and easy to use.</h2>
            <p class="cl-discription">
				Brand Bootstrap is a collection of <b>free to download Bootstrap themes and templates.</b> Our themes are open source and you can use them for any purpose, even comercially!</p>
          </div>
    	</div>
    </section>
    <!-- end call to action -->

    <hr class="hr-action"> <!--hr call to action-->

    <!-- gallery -->
    <section class="container gallery">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                <img src="<?php echo get_template_directory_uri() ?>/image/tp-1.jpg" alt="..."  class="img-responsive ">
                <div class="caption cp-fix">
                 <h4>KREFOLIO</h4>
                 <p>Landing Page Theme</p>
                  <a href="single_page.html" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                <img src="<?php echo get_template_directory_uri() ?>/image/tp-2.jpg" alt="..."  class="img-responsive ">
                <div class="caption cp-fix">
                 <h4>FRONT ROW</h4>
                 <p>Landing Page Theme</p>
                  <a href="single_page.html" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                <img src="<?php echo get_template_directory_uri() ?>/image/tp-3.jpg" alt="..."  class="img-responsive ">
                <div class="caption cp-fix">
                 <h4>SQUARE</h4>
                 <p>Landing Page Theme</p>
                  <a href="single_page.html" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                <img src="<?php echo get_template_directory_uri() ?>/image/tp-4.jpg" alt="..."  class="img-responsive ">
                <div class="caption cp-fix">
                 <h4>KODAX</h4>
                 <p>Landing Page Theme</p>
                  <a href="single_page.html" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                <img src="<?php echo get_template_directory_uri() ?>/image/tp-5.jpg" alt="..."  class="img-responsive ">
                <div class="caption cp-fix">
                 <h4>VISCERAL</h4>
                 <p>Landing Page Theme</p>
                  <a href="single_page.html" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                <img src="<?php echo get_template_directory_uri() ?>/image/tp-6.jpg" alt="..."  class="img-responsive ">
                <div class="caption cp-fix">
                 <h4>SOCIAL INVO</h4>
                 <p>Landing Page Theme</p>
                  <a href="single_page.html" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                <img src="<?php echo get_template_directory_uri() ?>/image/tp-7.jpg" alt="..."  class="img-responsive ">
                <div class="caption cp-fix">
                 <h4>STARTER</h4>
                 <p>Landing Page Theme</p>
                  <a href="single_page.html" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                <img src="<?php echo get_template_directory_uri() ?>/image/tp-8.jpg" alt="..."  class="img-responsive ">
                <div class="caption cp-fix">
                 <h4>SUPERNOTE</h4>
                 <p>Landing Page Theme</p>
                  <a href="single_page.html" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                <img src="<?php echo get_template_directory_uri() ?>/image/tp-9.jpg" alt="..."  class="img-responsive ">
                <div class="caption cp-fix">
                 <h4>AXIT</h4>
                 <p>Landing Page Theme</p>
                  <a href="single_page.html" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>

    		</div>

    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="#" class="btn btn-lg btn-danger view-btn">View All Themes &amp; Templates</a>
    		</div>
    	</div>
    </section>
    <!-- end gallery section -->

    <!-- about section -->

    <section class="container-fluid about">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<div class="al-discription">
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae aliquid, odit nisi deleniti cupiditate id perferendis culpa unde quas illum quia, deserunt asperiores, dignissimos soluta, delectus ut? Facilis voluptate repudiandae necessitatibus repellat at magnam, blanditiis dolorem ratione optio cumque quos.</p>
    				</div>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    			<div class="hire">
    				<h2>Hire Me</h2>
    				<a href="#" class="btn btn-default btn-xs" role="button">Sign Up</a>
    			</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- end about section -->

    <!-- footer -->
    <footer class="container-fluid">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    			<div class="social_logo">
    				<ul class="list-inline">
    					<li><a href="#"><i class="fa fa-github icon-gt" aria-hidden="true"></i></a></li>

    					<li><a href="#"><i class="fa fa-twitter icon-tw" aria-hidden="true"></i></a></li>

    					<li><a href="#"><i class="fa fa-facebook  icon-fb" aria-hidden="true"></i></a></li>

    					<li><a href="#"><i class="fa fa-google-plus icon-g" aria-hidden="true"></i></a></li>
    				</ul>
    			</div>
				<div class="ft-discription">
					<p><a href="#">Brand Bootstrap</a> is a project created and maintained by <a href="#">primex infosys</a> at Blackrock Digital. 
Themes and templates licensed MIT, Brand Bootstrap website <a href="#">CC BY 3.0</a>. 
Based on <a href="#">Bootstrap.</a></p>
				</div>
    		</div>
    	</div>    	
    </footer>


  
  </body>
</html>