<?php get_header(); ?>
    <!-- gallery -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="container snp-gallery">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
    				<div class="thumbnail snp-gl-fix">
                        <?php the_post_thumbnail('template-single', array('class' => 'img-responsive')); ?>

                
                    
                
                
                 <div class="download-links">

					<ul class="list-inline">
                    
					<li>
					<!-- Place this tag where you want the button to render. -->
						<a target="_blank" class="github-button" href="https://crackhtml.github.io/Zentro/" data-icon="octicon-eye" >Live Preview</a></li>
					<li>
					<!-- Place this tag where you want the button to render. -->
						<a target="_blank" class="github-button" href="https://github.com/ntkme/github-buttons/archive/master.zip" data-icon="octicon-cloud-download" data-style="mega" aria-label="Download ntkme/github-buttons on GitHub">Download</a>
					</li>
					<li><!-- Place this tag where you want the button to render. -->
						<a target="_blank" class="github-button" href="https://github.com/ntkme/github-buttons" data-style="mega" aria-label="view source ntkme/github-buttons on GitHub">view source</a>
					</li>
                    <li>
                    <!-- Place this tag where you want the button to render. -->
<p  class="gt-btn"><a target="_blank" class="github-button "  href="https://github.com/ntkme/github-buttons/fork" data-icon="octicon-repo-forked" data-style="mega" data-count-href="/ntkme/github-buttons/network" data-count-api="/repos/ntkme/github-buttons#forks_count" data-count-aria-label="# forks on GitHub" aria-label="Fork ntkme/github-buttons on GitHub">Fork</a></p></li>
<li ><!-- Place this tag where you want the button to render. -->
<p  class="gt-btn"><a target="_blank" class="github-button " href="https://github.com/ntkme/github-buttons" data-icon="octicon-star" data-style="mega" data-count-href="/ntkme/github-buttons/stargazers" data-count-api="/repos/ntkme/github-buttons#stargazers_count" data-count-aria-label="# stargazers on GitHub" aria-label="Star ntkme/github-buttons on GitHub">Star</a></p></li>
					</ul>

				</div>
                <div class="user">
                         <h3><?php the_title();?></h3>
                    <p>An nepage template</p>
                     </div>

                </div>
                

              </div>
    			

    			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    				<div class="krefolio-discription">
    				<h2>Description:</h2>
    					<p><?php the_excerpt();?></p>
    				</div>
    				<div class="krefolio-feature">
    				<h2>Features:</h2>
    					<?php the_content();?>
    				</div>

    			</div>
                     
    			</div>
    		</div>
    	</div>
    </section>
    <!-- end gallery section -->
<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


    
<?php get_footer(); ?></html>