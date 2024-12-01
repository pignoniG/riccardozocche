<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zocche
 */

get_header();
?>

	<main id="primary" class="site-main">
			<div class="entry-content grid-x">
				<div  class="cell medium-12 large-6 large-offset-3">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

	

		endwhile; // End of the loop.
		?>
		</div>
	</div>

	</main><!-- #main -->

<?php

get_footer();
