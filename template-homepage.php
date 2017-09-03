<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Home Page Template
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

<?php
get_footer();
