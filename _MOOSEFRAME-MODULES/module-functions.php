<?php
/**
 * ALL THE Moose_Framework MODULES GO HERE AS SHORTCODES
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */


/**
 *
 * MODULE ONE SHORTCODE
 *
 */

function moose_module_one() {

	ob_start(); // OUTPUT BUFFERING

	?>

<main id="OI-MODULE-ONE">

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<article class="content-block">

					<h1 class="mod-title">THIS IS MODULE ONE</h1>
					<h4 class="mod-subtitle">
						This is Subtitle for Moose_Framework Module One
					</h4>
					
					<p class="text-only">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					
				</article>
			</div>
			<div class="col-md-6 col-lg-6">

				<article class="content-block">

					<figure>
						
						<img class="img-responsive pull-right" src="http://via.placeholder.com/450x350" alt="">
						
					</figure>
					
				</article>
			</div>
		</div>
	</div>
	
</main>


	<?php 

	$module_contents = ob_get_contents();

	ob_end_clean();

	return $module_contents;
}
add_shortcode( 'module_one', 'moose_module_one' );


/**
 *
 * MODULE TWO SHORTCODE
 *
 */


function moose_module_two() {

	ob_start(); // OUTPUT BUFFERING

	?>

<main id="OI-MODULE-TWO">

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<article class="content-block">

					<h1 class="mod-title">THIS IS MODULE TWO</h1>
					<h4 class="mod-subtitle">
						This is Subtitle for Moose_Framework Module One
					</h4>
					<p class="text-only">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					
				</article>
			</div>
			<div class="col-md-6 col-lg-6">
				<article class="content-block">

					<h1 class="mod-title">THIS IS MODULE TWO</h1>
					<h4 class="mod-subtitle">
						This is Subtitle for Moose_Framework Module One
					</h4>
					<p class="text-only">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					
				</article>
			</div>
		</div>
	</div>
	
</main>


	<?php 

	$module_contents = ob_get_contents();

	ob_end_clean();

	return $module_contents;
}
add_shortcode( 'module_two', 'moose_module_two' );

/**
 *
 * MODULE THREE SHORTCODE
 *
 */

function moose_module_three() {

	ob_start(); // OUTPUT BUFFERING

	?>

<main id="OI-MODULE-THREE">

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<article class="content-block">

					<h1 class="mod-title text-center">THIS IS MODULE THREE</h1>
					<h4 class="mod-subtitle text-center">
						This is Subtitle for Moose_Framework Module Three
					</h4>
					<h4 class="btn-holder text-center">
						<a href="#" class="btn btn-primary btn-lg">CLICK ME NOW</a>
					</h4>
					<!-- <p class="text-only">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p> -->
					
				</article>
			</div>
		</div>
	</div>
	
</main>


	<?php 

	$module_contents = ob_get_contents();

	ob_end_clean();

	return $module_contents;
}
add_shortcode( 'module_three', 'moose_module_three' );

/**
 *
 * MODULE FOUR SHORTCODE
 *
 */

function moose_module_four() {

	ob_start(); // OUTPUT BUFFERING

	?>

<main id="OI-MODULE-FOUR">

	<div class="container">
		<div class="row row-one">
			<div class="col-md-12 col-lg-12">
				<article class="content-block">

					<h1 class="mod-title text-center">THIS IS MODULE FOUR</h1>
					<h4 class="mod-subtitle text-center">
						This is Subtitle for Moose_Framework Module four
					</h4>
					
				</article>
			</div>
		</div>
		<div class="row row-two">
			<div class="col-md-4 col-lg-4">
				<article class="content-block">

					<figure>
						
						<img class="img-responsive" src="http://via.placeholder.com/350x250" alt="">
						
					</figure>

					<h4 class="mod-subtitle text-center">
						This is Subtitle for Moose_Framework Module four
					</h4>
					
				</article>
			</div>
			<div class="col-md-4 col-lg-4">
				<article class="content-block">

					<figure>
						
						<img class="img-responsive" src="http://via.placeholder.com/350x250" alt="">
						
					</figure>

					<h4 class="mod-subtitle text-center">
						This is Subtitle for Moose_Framework Module four
					</h4>
					
				</article>
			</div>
			<div class="col-md-4 col-lg-4">
				<article class="content-block">

					<figure>
						
						<img class="img-responsive" src="http://via.placeholder.com/350x250" alt="">
						
					</figure>

					<h4 class="mod-subtitle text-center">
						This is Subtitle for Moose_Framework Module four
					</h4>
					
				</article>
			</div>
		</div>
	</div>
	
</main>


	<?php 

	$module_contents = ob_get_contents();

	ob_end_clean();

	return $module_contents;
}
add_shortcode( 'module_four', 'moose_module_four' );

/**
 *
 * SAMPLE MODULE SHORTCODE
 *
 */

function moose_module_sample() {

	ob_start(); // OUTPUT BUFFERING

	?>

<main id="OI-MODULE-SAMPLE">

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<article class="content-block">

					<h1 class="mod-title">THIS IS MODULE SAMPLE</h1>
					<h4 class="mod-subtitle">
						This is Subtitle for Moose_Framework Module sample
					</h4>
					<p class="text-only">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					
				</article>
			</div>
		</div>
	</div>
	
</main>


	<?php 

	$module_contents = ob_get_contents();

	ob_end_clean();

	return $module_contents;
}
add_shortcode( 'module_sample', 'moose_module_sample' );

