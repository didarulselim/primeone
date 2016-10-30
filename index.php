<?php get_header();?>
    <!-- Home -->
	<?php $titan = TitanFramework::getInstance( 'primeone' );
	$po_hero_h = $titan->getOption( 'po_hero_h' );?>
    <section class="container-fluid  bose" id="Home">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    			<h2 class="heading">
    				<?php echo  $po_hero_h?>
    			</h2>
				<?php $titan = TitanFramework::getInstance( 'primeone' );
	$po_hero_p = $titan->getOption( 'po_hero_p' );?>
    			<p class="discription"><?php echo  $po_hero_p?>
    			</p>
				
				<?php $titan = TitanFramework::getInstance( 'primeone' );
	$po_hero_bt= $titan->getOption( 'po_hero_bt' );?>
	
	<?php $titan = TitanFramework::getInstance( 'primeone' );
	$po_hero_ba= $titan->getOption( 'po_hero_ba' );?>
    				<a href="#call_to_action" class="btn btn-lg btn-default lm-btn"><?php echo  $po_hero_bt?></a>
    			
    		</div>
    	</div>
    </section>
    <!-- end home section -->
	<script>
    $(document).ready(function() {

      $(".bose").bose({
        images : [
            <?php
            // the query
            $the_query1 = new WP_Query( array( 'post_type' => 'template', 'posts_per_page' => 5 ) ); ?>

            <?php if ( $the_query1->have_posts() ) : ?>

            <!-- pagination here -->

            <!-- the loop -->
            <?php while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>
            "<?php the_post_thumbnail_url( 'template-slider' );  ?>",
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
            "<?php echo get_template_directory_uri() ?>/image/slider-1.jpg"
        <?php endif; ?>
        ],
        

      });

    });
  </script>
    <!-- call to action -->
	<?php $titan = TitanFramework::getInstance( 'primeone' );
	$po_op_h= $titan->getOption( 'po_op_h' );?>
    <section class="container-fluid call_to_action" id="call_to_action">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
			<h2 class="cl-heading"><?php echo  $po_op_h?>
			</h2>
				<?php $titan = TitanFramework::getInstance( 'primeone' );
	$po_op_d= $titan->getOption( 'po_op_d' );?>
            <p class="cl-discription">
				<?php echo  $po_op_d?>
    	</div>
    </section>
    <!-- end call to action -->

    <hr class="hr-action"> <!--hr call to action-->

    <!-- gallery -->
    <section class="container gallery">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <?php
                // the query
                $the_query = new WP_Query( array( 'post_type' => 'template', 'posts_per_page' => 9 ) ); ?>

                <?php if ( $the_query->have_posts() ) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    				<div class="thumbnail gl-fix">
                        <?php the_post_thumbnail('template-thumb', array('class' => 'img-responsive')); ?>
                <div class="caption cp-fix">
                 <h4><?php the_title(); ?></h4>
                 <p><?php the_excerpt(); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-default btn-xs" role="button">PREVIEW & DOWNLOAD</a>
                </div>
              </div>
    			</div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e( 'Sorry, no Template Posted Yet.' ); ?></p>
                <?php endif; ?>


    		</div>

    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="#" class="btn btn-lg btn-danger view-btn">View All Themes &amp; Templates</a>
    		</div>
    	</div>
    </section>
    <!-- end gallery section -->
<?php get_footer();?>