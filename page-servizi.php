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

		<hr class="separator">

		
		<div class="entry-content grid-x methodology_container">

		<div class="cell small-12 medium-12 large-12 ">

			<h3> <?php echo get_field('methodology_title');?> </h3>
		</div>	


		<div class="cell small-12 medium-12 large-8 large-order-1 small-order-1 ">
			<?php 
			$methodology_gallery= get_field('methodology_gallery');

			$size = 'full'; // (thumbnail, medium, large, full or custom size)



			if( have_rows('methodology_gallery') ): ?>
				<div class="methodology_gallery">

    			<?php while ( have_rows('methodology_gallery') ) : the_row();
        		$image_id = get_sub_field('methodology_gallery_image');
        		$image_caption = get_sub_field('methodology_gallery_caption');?>

        		 <div  alt="<?php echo $image_caption;?>" class="methodology_gallery_image" style="background-image:  url(' <?php echo wp_get_attachment_image_url( $image_id, $size ); ?>');"></div>
        		
    			<?php endwhile;?>
    			</div>
			<?php endif; ?>
		</div>
		<div class="cell small-12 medium-12 large-4 large-order-2 small-order-2">
			<h3 class="methodology_gallery_caption"></h3>
		</div>

		<div class="cell small-12 medium-12 large-12 large-order-3 small-order-3" style="text-align: center;">
			<h3 class="methodology_contact green_txt">
				<?php echo get_field('methodology_call_to_action');?>
			</h3>
			<a href="mailto:info@riccardozocche.com" class="button white"><?php echo mytranslate("Contact Us | Contattaci") ;?></a>
		
			
		</div>



	</main><!-- #main -->

<?php

get_footer();
