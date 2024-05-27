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
	
	<?php	

	$posts_in_post_type = get_posts( array(
    'fields' => 'ids',
    'post_type' => 'project',
    'posts_per_page' => -1,) );
	
	$terms = wp_get_object_terms( $posts_in_post_type, 'category', array( 'ids' ) ); 
	$terms = array_values( array_unique( $terms, SORT_REGULAR ) );

	?><a class="works_filter_button selected" data-filterkey="category-all"><?php echo mytranslate("All | Tutti") ;?></a><?php

	/** echo print_r($terms); */

	foreach ($terms as &$term) {

		?><a class="works_filter_button" data-filterkey="<?php echo "category-".$term->name;?>"> <?php echo $term->name;?></a><?php	

	}
	?>
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
