<?php
/**
 * The main template file.
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

<!--=====================================
=            TOP IMAGE MODAL            =
======================================-->

<!-- THE TOP IMAGE MODAL CODE -->

<!-- Modal Top one-->

<div class="modal fade" id="myModal-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header" style="background: #d96e5a; color: white;">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title text-center" id="myModalLabel" style="color: white;">www.smoobage.com</h4>

            </div>

            <div class="modal-body">

                <section id="popup-form-click" class="clearfix">

                    <article class="popup-text">

                        <figure>

                        	<?php the_field('blog_page_optin_image_mailchimp_form_code', get_option('page_for_posts')); ?>

                        </figure>

                    </article>

                </section>

            </div>

        </div>

        <div class="modal-footer hide">

            <button type="button" class="btn btn-primary center-block" data-dismiss="modal" style="background: black; color: white; border: 1px solid black;">Close</button>

        </div>

    </div>

</div>

<!--====  End of TOP IMAGE MODAL  ====-->

<!--=========================================
=            BOTTOM BUTTON MODAL            =
==========================================-->

<!-- Modal Bottom one-->

<div class="modal fade" id="myModal-button" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header" style="background: #01b3b5; color: white;">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title text-center" id="myModalLabel" style="color: white;">www.smoobage.com</h4>

            </div>

            <div class="modal-body">

                <section id="popup-form-click" class="clearfix">

                    <article class="popup-text">

                        <figure>

							<?php the_field('blog_page_optin_button_mailchimp_form_code', get_option('page_for_posts')); ?>

                        </figure>

                    </article>

                </section>

            </div>

        </div>

        <div class="modal-footer hide">

            <button type="button" class="btn btn-primary center-block" data-dismiss="modal" style="background: black; color: white; border: 1px solid black;">Close</button>

        </div>

    </div>

</div>

<!--====  End of BOTTOM BUTTON MODAL  ====-->

<!-- <h1>MOOSE IS LOSS</h1> -->

<section id="heather-blog-indx-header">

	<div class="content-box container">

		<div class="col-sm-7 col-md-7 col-lg-7">

			<?php 

				$args = array(

					'post_type' => 'post',

					'category_name' => 'featured', 

					'posts_per_page' => 1,

					'post_status' => 'publish',

					// 'order' => 'ASC',

				);

				$the_query = new WP_Query( $args );


				if ( $the_query->have_posts() ) :


				while ( $the_query->have_posts() ) : $the_query->the_post(); 
			?>


			<article class="featured-article">
			    <a class="article-content" href="<?php esc_url( the_permalink()); ?>">
			    	
			    	<figure class="article-image">

			           	<?php the_post_thumbnail('featured-size', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>

			        </figure>


			        <div class="article-content">

			            <h4 class="article-title"> <?php the_title(); ?>  </h4>

			            <p class="article-date"> <?php the_time('F jS, Y') ?> </p>

			            <div class="article-text">
			            	<?php the_excerpt(); ?>
			            </div>

			        </div>

			    </a>
			   	<hr>
				<footer class="article-footer">

			        <div class="clearfix footer-content">
			        	<?php 
				    		$categories = get_the_category();

				    		foreach($categories as $category){
							   $cat_link = get_category_link($category->cat_ID);
							   echo '<a class="category-name pull-right" href="'.$cat_link.'">'.$category->name.'</a>'; // category link
							   // echo '<a class="category-name pull-right" href="'. "#" .'">'.$category->name.'</a>'; // category link
							}

				    	?>
						<div class="social-icons">
							<?php //echo do_shortcode('[addtoany]'); ?>
							<?php //echo do_shortcode('[supsystic-social-sharing id="1"]') ?>

							<style type="text/css" media="screen">
								.resp-sharing-button__link,
							.resp-sharing-button__icon {
							  display: inline-block
							}

							.resp-sharing-button__link {
							  text-decoration: none;
							  color: #fff;
							  /* margin: 0.5em */
							}

							.resp-sharing-button {
							  border-radius: 5px;
							  transition: 25ms ease-out;
							  padding: 0.5em 0.75em;
							  font-family: Helvetica Neue,Helvetica,Arial,sans-serif
							}

							.resp-sharing-button__icon svg {
							  width: 1em;
							  height: 1em;
							  margin-right: 0.4em;
							  vertical-align: top
							}

							.resp-sharing-button--small svg {
							  margin: 0;
							  vertical-align: middle
							}

							/* Non solid icons get a stroke */
							.resp-sharing-button__icon {
							  stroke: #fff;
							  fill: none
							}

							/* Solid icons get a fill */
							.resp-sharing-button__icon--solid,
							.resp-sharing-button__icon--solidcircle {
							  fill: #fff;
							  stroke: none
							}

							.resp-sharing-button--twitter {
							  background-color: #55acee
							}

							.resp-sharing-button--twitter:hover {
							  background-color: #2795e9
							}

							.resp-sharing-button--pinterest {
							  background-color: #bd081c
							}

							.resp-sharing-button--pinterest:hover {
							  background-color: #8c0615
							}

							.resp-sharing-button--facebook {
							  background-color: #3b5998
							}

							.resp-sharing-button--facebook:hover {
							  background-color: #2d4373
							}

							.resp-sharing-button--tumblr {
							  background-color: #35465C
							}

							.resp-sharing-button--tumblr:hover {
							  background-color: #222d3c
							}

							.resp-sharing-button--reddit {
							  background-color: #5f99cf
							}

							.resp-sharing-button--reddit:hover {
							  background-color: #3a80c1
							}

							.resp-sharing-button--google {
							  background-color: #dd4b39
							}

							.resp-sharing-button--google:hover {
							  background-color: #c23321
							}

							.resp-sharing-button--linkedin {
							  background-color: #0077b5
							}

							.resp-sharing-button--linkedin:hover {
							  background-color: #046293
							}

							.resp-sharing-button--email {
							  background-color: #777
							}

							.resp-sharing-button--email:hover {
							  background-color: #5e5e5e
							}

							.resp-sharing-button--xing {
							  background-color: #1a7576
							}

							.resp-sharing-button--xing:hover {
							  background-color: #114c4c
							}

							.resp-sharing-button--whatsapp {
							  background-color: #25D366
							}

							.resp-sharing-button--whatsapp:hover {
							  background-color: #1da851
							}

							.resp-sharing-button--hackernews {
							background-color: #FF6600
							}
							.resp-sharing-button--hackernews:hover, .resp-sharing-button--hackernews:focus {   background-color: #FB6200 }

							.resp-sharing-button--vk {
							  background-color: #507299
							}

							.resp-sharing-button--vk:hover {
							  background-color: #43648c
							}

							.resp-sharing-button--facebook {
							  background-color: #3b5998;
							  border-color: #3b5998;
							}

							.resp-sharing-button--facebook:hover,
							.resp-sharing-button--facebook:active {
							  background-color: #2d4373;
							  border-color: #2d4373;
							}

							.resp-sharing-button--twitter {
							  background-color: #55acee;
							  border-color: #55acee;
							}

							.resp-sharing-button--twitter:hover,
							.resp-sharing-button--twitter:active {
							  background-color: #2795e9;
							  border-color: #2795e9;
							}

							.resp-sharing-button--google {
							  background-color: #dd4b39;
							  border-color: #dd4b39;
							}

							.resp-sharing-button--google:hover,
							.resp-sharing-button--google:active {
							  background-color: #c23321;
							  border-color: #c23321;
							}

							.resp-sharing-button--tumblr {
							  background-color: #35465C;
							  border-color: #35465C;
							}

							.resp-sharing-button--tumblr:hover,
							.resp-sharing-button--tumblr:active {
							  background-color: #222d3c;
							  border-color: #222d3c;
							}

							.resp-sharing-button--email {
							  background-color: #777777;
							  border-color: #777777;
							}

							.resp-sharing-button--email:hover,
							.resp-sharing-button--email:active {
							  background-color: #5e5e5e;
							  border-color: #5e5e5e;
							}

							.resp-sharing-button--pinterest {
							  background-color: #bd081c;
							  border-color: #bd081c;
							}

							.resp-sharing-button--pinterest:hover,
							.resp-sharing-button--pinterest:active {
							  background-color: #8c0615;
							  border-color: #8c0615;
							}

							</style>
							<!-- Sharingbutton Facebook -->
							<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fjennifer.local" target="_blank" aria-label="Share on Facebook">
							  <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
							    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
							    </div></div>
							</a>

							<!-- Sharingbutton Twitter -->
							<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=http%3A%2F%2Fjennifer.local" target="_blank" aria-label="Share on Twitter">
							  <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
							    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
							    </div></div>
							</a>


							<!-- Sharingbutton Pinterest -->
							<a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fsharingbuttons.io&amp;media=http%3A%2F%2Fsharingbuttons.io&amp;description=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking." target="_blank" aria-label="Share on Pinterest">
							  <div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
							    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.14.5C5.86.5 2.7 5 2.7 8.75c0 2.27.86 4.3 2.7 5.05.3.12.57 0 .66-.33l.27-1.06c.1-.32.06-.44-.2-.73-.52-.62-.86-1.44-.86-2.6 0-3.33 2.5-6.32 6.5-6.32 3.55 0 5.5 2.17 5.5 5.07 0 3.8-1.7 7.02-4.2 7.02-1.37 0-2.4-1.14-2.07-2.54.4-1.68 1.16-3.48 1.16-4.7 0-1.07-.58-1.98-1.78-1.98-1.4 0-2.55 1.47-2.55 3.42 0 1.25.43 2.1.43 2.1l-1.7 7.2c-.5 2.13-.08 4.75-.04 5 .02.17.22.2.3.1.14-.18 1.82-2.26 2.4-4.33.16-.58.93-3.63.93-3.63.45.88 1.8 1.65 3.22 1.65 4.25 0 7.13-3.87 7.13-9.05C20.5 4.15 17.18.5 12.14.5z"/></svg>
							    </div></div>
							</a>


						</div>
			        </div>

			    </footer>			    

			</article>


			<?php

				endwhile;

				endif;

				// Reset Post Data

				wp_reset_postdata();
			?>
			
		</div>

		<div class="col-sm-5 col-md-5 col-lg-5">

			<div class="lead-pg lead-pg-block-1">

				<figure class="lead-pg-image">
					
			        <button type="button" data-toggle="modal" data-target="#myModal-image" style="padding: 0; margin: 0; border: none;">
			        	<img src="<?php the_field('blog_page_optin_image', get_option('page_for_posts')); ?>" alt=""></a>
			        </button>	

				</figure>

			</div>	
			<div class="lead-pg lead-pg-block-2">

				<h3 class="block-text text-center">
					
					<?php the_field('blog_page_button_opt-in_headline', get_option('page_for_posts')) ?>

				</h3>			

				
				<h3 class="block-title text-center">
				
					<button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#myModal-button">

						<?php the_field('blog_page_optin_button_text', get_option('page_for_posts')); ?>

					</button> 

				</h3>
				
				

				
			</div>					
			
		</div>

	</div>
	
</section>

<section id="heather-blog-indx">

	<main id="col-md-moose"  class="container">

	   <link rel="stylesheet" type="text/css" href="/wp-content/themes/imb-thm-JENNIFER/_masonry-css/style.css">
       <link rel="stylesheet" type="text/css" href="/wp-content/themes/imb-thm-JENNIFER/_masonry-css/media_query.css">


		<div id="masonry-grid">

			<div class="grid-sizer"></div>

			 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<article class="grid-item article-content-block">

			    <a class="article-link" href="<?php esc_url( the_permalink()); ?>">
			    	
			    	<figure class="article-image" itemprop="image">
			           	<!-- <img src="http://via.placeholder.com/450x225" alt=""> -->
			           	<?php the_post_thumbnail('blog-size', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
			        </figure>


			        <div class="article-content">

			            <h4 class="article-title" itemprop="headline"> <?php the_title(); ?> </h4>

			            <p class="article-date" itemprop="datePublished"> <?php the_time('F jS, Y') ?> </p>

			            <div class="article-text">
			    			
			    			<?php the_excerpt(); ?>
			            	
			            </div>

			        </div>

			    </a>
			   	<hr>
			    <footer class="article-footer">

			        <div class="clearfix footer-content">
			        	<?php 
				    		$categories = get_the_category();

				    		foreach($categories as $category){
							   $cat_link = get_category_link($category->cat_ID);
							   echo '<a class="category-name pull-right" href="'.$cat_link.'">'.$category->name.'</a>'; // category link
							   // echo '<a class="category-name pull-right" href="'. "#" .'">'.$category->name.'</a>'; // category link
							}

				    	?>
						<div class="social-icons">
							<?php //echo do_shortcode('[addtoany]'); ?>
							<!-- Sharingbutton Facebook -->
							<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsharingbuttons.io" target="_blank" aria-label="Share on Facebook">
							  <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
							    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
							    </div></div>
							</a>

							<!-- Sharingbutton Twitter -->
							<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=http%3A%2F%2Fsharingbuttons.io" target="_blank" aria-label="Share on Twitter">
							  <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
							    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
							    </div></div>
							</a>


							<!-- Sharingbutton Pinterest -->
							<a class="resp-sharing-button__link" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fsharingbuttons.io&amp;media=http%3A%2F%2Fsharingbuttons.io&amp;description=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking." target="_blank" aria-label="Share on Pinterest">
							  <div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
							    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.14.5C5.86.5 2.7 5 2.7 8.75c0 2.27.86 4.3 2.7 5.05.3.12.57 0 .66-.33l.27-1.06c.1-.32.06-.44-.2-.73-.52-.62-.86-1.44-.86-2.6 0-3.33 2.5-6.32 6.5-6.32 3.55 0 5.5 2.17 5.5 5.07 0 3.8-1.7 7.02-4.2 7.02-1.37 0-2.4-1.14-2.07-2.54.4-1.68 1.16-3.48 1.16-4.7 0-1.07-.58-1.98-1.78-1.98-1.4 0-2.55 1.47-2.55 3.42 0 1.25.43 2.1.43 2.1l-1.7 7.2c-.5 2.13-.08 4.75-.04 5 .02.17.22.2.3.1.14-.18 1.82-2.26 2.4-4.33.16-.58.93-3.63.93-3.63.45.88 1.8 1.65 3.22 1.65 4.25 0 7.13-3.87 7.13-9.05C20.5 4.15 17.18.5 12.14.5z"/></svg>
							    </div></div>
							</a>

						</div>
			        </div>

			    </footer>

			</article>

			<?php endwhile; else: ?>
			    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
			<?php endif; ?>

		</div>


		<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
        

	</main> <!-- MAIN COL WRAPPER -->
	
</section>

<?php

get_footer();
