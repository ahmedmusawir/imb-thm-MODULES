<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Page One Template
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

get_header(); ?>

<section id="OI-SECTION-ONE" class="oi-module">

 	<?php echo do_shortcode('[module_one]'); ?> 
	
</section>

<section id="OI-SECTION-TWO" class="oi-module">

 	<?php echo do_shortcode('[module_two]'); ?> 
	
</section>

<section id="OI-SECTION-THREE" class="oi-module">

	<?php echo do_shortcode('[module_three]'); ?> 
	
</section>

<section id="OI-SECTION-FOUR" class="oi-module">

	<?php echo do_shortcode('[module_four]'); ?>
	
</section>

<section id="OI-SECTION-THREE" class="oi-module">

	<?php echo do_shortcode('[module_three]'); ?> 
	
</section>

<?php
get_footer();
