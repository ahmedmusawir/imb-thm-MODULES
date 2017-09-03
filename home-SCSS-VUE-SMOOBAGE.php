<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>

<section id="heather-blog-indx-header">

	<div class="content-box container">

		<div class="col-sm-7 col-md-7 col-lg-7">

			<article class="featured-article">
			    <a class="article-content" href="/this-is-a-sample-post-3/">
			    	
			    	<figure class="article-image" itemprop="image">
			           	<img src="/wp-content/uploads/2017/06/blog-header-img-800x400.jpg" alt="">
			           	<!-- <img src="http://via.placeholder.com/800x400" alt=""> -->
			        </figure>


			        <div class="article-content">

			            <h4 class="article-title" itemprop="headline">Lorem ipsum dolor sit amet business Design </h4>

			            <p class="article-date" itemprop="datePublished">May 25, 2017 </p>

			            <p class="article-text">
			            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...
			            </p>

			        </div>

			    </a>
			   	<hr>
			    <footer class="article-footer">
			        
			        <div class="clearfix">
			        	<a href="/this-is-a-sample-post-3-copy/" title="category">Design</a> 
						<a class="socialicons-facebook pull-right" onclick="essb_window('http://www.facebook.com/sharer/sharer.php?u=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;t=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana','facebook','635420585'); return false;" target="_blank" rel="nofollow">
		        			<i class="fa fa-facebook" aria-label="Facebook"></i>
			            </a>

			            <a class="socialicons-twitter pull-right" onclick="essb_window('https://twitter.com/intent/tweet?text=Lorem ipsum dolor sit amet business Design team at&nbsp;Asana&amp;url=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;counturl=https://blog.asana.com/2017/05/asana-designer-fund-bridge-program-summer-2017/&amp;related=asana&amp;via=asana','twitter','635420585'); return false;" target="_blank" rel="nofollow">
			                <i class="fa fa-twitter" aria-label="Twitter"></i>
			            </a>
			        </div>
			    </footer>
			</article>
			
		</div>

		<div class="col-sm-5 col-md-5 col-lg-5">

			<div class="lead-pg lead-pg-block-1">

				<figure class="lead-pg-image">
					
					<script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <img style="cursor:pointer;" data-leadbox-popup="14e99a133f72a2:142918c46b46dc" src="https://lh3.googleusercontent.com/Zze4WNPrUiTu3BL4zbLw9JY-VUPBRFlyjeoWp_D2tiP_bn5yMka2dmIayyfChelACNKs-qcwP-OTuAVWeJgkxiE=s0" alt="Click here to subscribe"/> 					

				</figure>

			</div>	
			<div class="lead-pg lead-pg-block-2">

				<h3 class="block-text text-center">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt.
				</h3>			

				
				<h3 class="block-title btn btn-primary btn-lg center-block">
				
					<script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <a href="" data-leadbox-popup="14e99a133f72a2:142918c46b46dc">CLICK HERE NOW</a> 						
				
				</h3>
				
				

				
			</div>					
			
		</div>

	</div>
	
</section>

<section id="heather-blog-indx">

	<main id="col-wrapper">
		<div id="columns" class="container">

			 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<article class="article-content-block">

			    <a class="article--link" href="/this-is-a-sample-post-3-copy/">
			    	
			    	<figure class="article-image" itemprop="image">
			           	<!-- <img src="http://via.placeholder.com/450x225" alt=""> -->
			           	<?php the_post_thumbnail('blog-size', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
			        </figure>


			        <div class="article-content">

			            <h4 class="article-title" itemprop="headline"> <?php the_title(); ?> </h4>

			            <p class="article-date" itemprop="datePublished"> <?php the_time('F jS, Y') ?> </p>

			            <p class="article-text">
			    			
			    			<?php the_excerpt(); ?>
			            	
			            </p>

			        </div>

			    </a>
			   	<hr>
			    <footer class="article-footer">
			        
			        <div class="clearfix">
			        	<a class="category-name pull-right" href="/this-is-a-sample-post-3-copy/" title="category">Design</a> 
						<div class="social-icons">
							<?php //echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?> 
							<?php echo do_shortcode('[addtoany]'); ?>
						</div>
			        </div>

			    </footer>

			</article>

			<?php endwhile; else: ?>
			    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
			<?php endif; ?>

		</div>

	</main> <!-- MAIN COL WRAPPER -->
	
</section>

<?php

get_footer();
