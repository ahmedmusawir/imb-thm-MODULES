<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>
<section id="heather-archive-indx">

		<main id="col-md-moose" class="container" role="main">

		    <link rel="stylesheet" type="text/css" href="/wp-content/themes/imb-thm-JENNIFER/_masonry-css/style.css">
		    <link rel="stylesheet" type="text/css" href="/wp-content/themes/imb-thm-JENNIFER/_masonry-css/media_query.css">


			<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

			<div id="masonry-grid">

				<div class="grid-sizer"></div>

				
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'archive' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</div> <!-- MASONRY GRID -->


			<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
        	<script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>


		</main><!-- #main -->
	<!-- </div>#primary -->
	
	
</section> <!-- End Container -->	

<?php
get_footer();
