<?php
/**
 * The template for displaying all pages with Sidebar
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header('home'); ?>

<section id="imb-home-top-roadmap" class="container-fluid">

	<main class="container">
		
		<div class="flex-content-box">

			<article class="flex-item">

				<div class="icon-box-holder text-center">
					<div class="icon-box center-block">
						<i class="fa fa-calendar fa-5x"></i>
					</div>					
				</div>

				<h1 class="headline text-center">
					Events
				</h1>

				<p class="text-only text-center">
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

				<div class="btn-holder text-center">
					<a class="btn btn-primary btn-lg" href="#">READ MORE</a>
				</div>
				
				
			</article>
			<article class="flex-item">

				<div class="icon-box-holder text-center">
					<div class="icon-box center-block">
						<i class="fa fa-shopping-bag fa-5x"></i>
					</div>					
				</div>

				<h1 class="headline text-center">
					Shop
				</h1>

				<p class="text-only text-center">
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

				<div class="btn-holder text-center">
					<a class="btn btn-primary btn-lg" href="#">READ MORE</a>
				</div>
				
				
			</article>
			<article class="flex-item">

				<div class="icon-box-holder text-center">
					<div class="icon-box center-block">
						<i class="fa fa-file-text fa-5x"></i>
					</div>					
				</div>

				<h1 class="headline text-center">
					Blog
				</h1>

				<p class="text-only text-center">
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

				<div class="btn-holder text-center">
					<a class="btn btn-primary btn-lg" href="#">READ MORE</a>
				</div>
				
				
			</article>
		</div>


	</main>

	
	
</section> <!-- End imb-home-top-roadmap -->	

<section id="imb-home-info-block" class="container-fluid">

	<main class="container">
		
		<div class="content-box">

			<h1 class="headline text-center"><?php the_field('info_block_headline'); ?></h1>

			<div class=" col-sm-6 col-md-3 col-lg-3">
				<article class="text-box">
					
					<div class="text-only">

						<?php the_field('info_block_text_box_1') ?>
						
					</div>

				</article>				
			</div>
			<div class=" col-sm-6 col-md-3 col-lg-3">
				<article class="text-box">
					
					<div class="text-only">

						<?php the_field('info_block_text_box_2') ?>
						
					</div>

				</article>				
			</div>
			<div class=" col-sm-6 col-md-3 col-lg-3">
				<article class="text-box">
					
					<div class="text-only">

						<?php the_field('info_block_text_box_3') ?>
						
					</div>

				</article>				
			</div>
			<div class=" col-sm-6 col-md-3 col-lg-3">
				<article class="text-box">
					
					<div class="text-only">

						<?php the_field('info_block_text_box_4') ?>
						
					</div>

				</article>				
			</div>

		</div>

	</main>	
	
</section> <!-- End imb-home-info-block -->

<section id="imb-home-testimonial" class="container-fluid">

	<main class="container">
		
		<div class="content-box">

			<h1 class="headline text-center">The Testimonials</h1>

				<article id="testimonial-slider">

						<div id="carousel-example-captions" class="carousel slide" data-ride="carousel" data-interval="false">
						   <ol class="carousel-indicators">
						      <li data-target="#carousel-example-captions" data-slide-to="0" class="caption-image">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/Debbie-Shadid.jpg" alt="">
						      </li>
						      <li data-target="#carousel-example-captions" data-slide-to="1" class="caption-image">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/Macy_BHL_005-1.jpg" alt="">
						      </li>
						      <li data-target="#carousel-example-captions" data-slide-to="2" class="caption-image">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/Lynne-Gardner-1.jpg" alt="">
						      </li>
						      <li data-target="#carousel-example-captions" data-slide-to="3" class="caption-image active">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/karen_norris-1.jpg" alt="">
						      </li>
						   </ol>
						   <div class="carousel-inner" role="listbox">
						      <div class="item">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/Debbie-Shadid.jpg" alt="">
						      	<i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
						      	<h4 class="text-center">
						      		Leisa has done a remarkable job of uncovering what I really needed to look at in my life and business. She's helped me conquer the things that were keeping me overwhelmed. She's helping me face things that have kept me from being abundant in EVERY area of my life. Leisa is truly gifted. This is the best investment I have made in my business and in myself.
						      	</h4>
						         <div class="moose-caption">
						            <h3>Debbie Shadid </h3>
						            <p>Founder and Publisher of Wedding Ideas</p>
						         </div>
						      </div>
						      <div class="item">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/Macy_BHL_005-1.jpg" alt="">
									<i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
							      	<h4 class="text-center">
						      		
						      			I am so grateful for the teachings and experience I had. Before working with you I was paralyzed with fear around money. I was able to bring money into my life but managing it was so scary. At first I didn’t really think I would hear any new advice, I knew I needed help but part of me thought I was a lost cause. After going through your program I now have a new relationship with money on both the spiritual and practical levels. I can see that it is possible to evolve in a deep way and I see how powerful this work is in influencing all areas of my life, with my health, relationship, business, and peace of mind. It is truly a spiritual path for me and I look forward to building wealth that will give me the freedom to serve in a big way. THANK YOU for gently helping me heal this and getting me to a place I never thought I could reach… What a gift!!!
							      		
							      	</h4>					
						         <div class="moose-caption">
						            <h3>Macy M.</h3>
						            <p>Big Happy LOVE, Longmont, CO</p>
						         </div>
						      </div>
						      <div class="item">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/Lynne-Gardner-1.jpg" alt="">
						      	<i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
						      	<h4 class="text-center">
						      		Before I knew Leisa Peterson, I understood that money and energy were connected	that money is energy and abundance is energy. Now that I have experienced Leisa’s work, I feel how this relationship is causal of the money and abundance that I receive and create. Leisa’s uncanny ability to delve deep into the heart of the money matter has allowed me to ask key questions that I never would have thought of asking, and to discover solutions beyond my wildest dreams! I feel the shift! Meditation + Action = ABUNDANCE! Thank You!
						      	</h4>								      	
						         <div class="moose-caption">
						            <h3>Lynne Gardner</h3>
						            <p>Founder of LIFEYOGA</p>
						         </div>
						      </div>
						      <div class="item active">
						      	<img class="img-responsive center-block img-circle" src="http://leisapeterson.com/wp-content/uploads/2016/07/karen_norris-1.jpg" alt="">
						      	<i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
						      	<h4 class="text-center">
						      		Leisa Peterson has done amazing things for my life and my happiness.
									She not only has assisted in giving me the foundation to create wealth and abundance in my career, but she has also provided me with the tools, knowledge and mindfulness to experience life in a peaceful, flowing and joyous way. It is almost impossible to articulate the incredible impact of Leisa’s guidance in a few short sentences. The manner in which we approach each day, each choice, each situation, each person, each belief, our money and ourselves can be shifted to produce magnificent results. I have been a part of her Power Up Your Wealth and Wealth Group Programs as well as her Mindful Wealth Mastery private coaching. Each program provided the gateway to a new and everlasting approach to lead a fully abundant life.
									Sincere and loving thanks.
						      	</h4>								      	
						         <div class="moose-caption">
						            <h3>Karen Norris</h3>
						            <p>President and Founder, Business Opportunity Brokers</p>
						         </div>
						      </div>	
						      
						      						      							      							      
						   </div>
						   <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev"> 
						   <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
								<span class="sr-only">Previous</span> </a> 
								<a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next"> 
								<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> 
						</div>
										
				</article>			

		</div>

	</main>	
	
</section> <!-- End imb-home-info-block -->
<?php
get_footer();
