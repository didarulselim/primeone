<?php get_header();?>
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
    <section class="container-fluid call_to_action" id="call_to_action">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="cl-heading"><?php single_cat_title(); ?></h2>
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

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>


            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="#" class="btn btn-lg btn-danger view-btn">Load More</a>
            </div>
        </div>
    </section>
    <!-- end gallery section -->
<?php get_footer();?>