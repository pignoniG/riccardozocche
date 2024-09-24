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

				<div class="service_grid"> 

		<?php

		// Check rows exists.
			if( have_rows('service_grid') ):

    		// Loop through rows.
    			while( have_rows('service_grid') ) : the_row();

        		// Load sub field value.
        		$service_image = get_sub_field('service_image');
        		$service_title = get_sub_field('service_title');
        		$service_text = get_sub_field('service_text');

        		$size = 'large'; // (thumbnail, medium, large, full or custom size)

        		?>


        		<div  class="service_grid_item">

        			<h3> <?php echo $service_title;?> </h3>

        			<img src=" <?php echo wp_get_attachment_image_url( $service_image, $size ); ?>">

        			<h3> <?php echo $service_text;?> </h3>

        		</div><?php
        		
        

        		




        		// Do something, but make sure you escape the value if outputting directly...

   				// End loop.
    			endwhile;

			// No value.
			else :
    		// Do something...
			endif;
			?>
		</div>
	

		<div class="cell small-12 medium-12 large-12 large-order-3 small-order-3" style="text-align: center; margin-top: 50px;margin-bottom: 50px;">
			<h2 class="methodology_contact green_txt">
				<?php echo get_field('methodology_call_to_action');?>
			</h2>
			<a href="<?php echo get_permalink(123);?>"style="font-size: 25px" class="button green"><?php echo get_field('methodology_button');?></a>
		
			
		</div>


get_permalink(4)



	</main><!-- #main -->

<?php

get_footer();
