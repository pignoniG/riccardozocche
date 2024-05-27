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
		<div class="works_filter"></div>

		<div class="works_grid"> 

	<?php

		$args = array(
			'post_type'         => 'project',
						
			'nopaging' => true,
        	'post_status' => 'publish',

        	'meta_query' => array(
   			     'relation' => 'AND',

   			     'order' => array(
   			         'key' => 'project_year',
   			     )
   			 ),
        	 'orderby' => array(
        		'order' => 'DESC'
    		),	
		);
	
	
			$custom_query = new WP_Query( $args );
			// The Loop!
			if ($custom_query->have_posts()) {
			    ?>
			   		<?php
			   			while ($custom_query->have_posts()) {
			   			     $custom_query->the_post();	
			   			     include(locate_template('template-parts/content-project-grid.php'));
			   			    
					
			   	}		
			}



			
		?>










		</div>

	</main><!-- #main -->

<?php

get_footer();
