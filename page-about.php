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

		<div class=" grid-x about_container">

			<div class="container_bio cell small-12 medium-4 large-3  large-order-1  medium-order-2 small-order-2">


			<?php

				$about_headshot = get_field('about_headshot');
				$about_bio_text = get_field('about_bio_text');
				$size = 'large';


				if( $about_headshot  ){	
					?>
						<img src=" <?php echo wp_get_attachment_image_url( $about_headshot , $size ); ?>">
        				<h5> <?php echo $about_bio_text ;?> </h5>
					<?php 
				}

			?>


			</div>

			<div class="about_menu cell small-12 medium-12 large-2 large-order-2  medium-order-1 small-order-1">
				<ul>
					<li><a data-filterkey="container_studio" class="selected" ><?php echo mytranslate("Studio | Studio") ;?></a></li>
					
					<li><a data-filterkey="container_manifesto " ><?php echo mytranslate("Manifest | Manifesto") ;?></a></li>
					<li><a data-filterkey="container_press" ><?php echo mytranslate("Press | Press") ;?></a></li>
				</ul>
			</div>


			<div style="display:none;" class="toggable_about container_manifesto cell small-12 medium-8 large-7  large-order-3  medium-order-3 small-order-3 grid-x " >

				<?php

					// Check rows exists.
					if( have_rows('about_manifesto_elements') ):
					
					    // Loop through rows.
					    while( have_rows('about_manifesto_elements') ) : the_row();
					
					        // Load sub field value.
					        $titolo = get_sub_field('titolo');
					        $testo = get_sub_field('testo');
					        $colore = get_sub_field('colore');
					        // Do something, but make sure you escape the value if outputting directly...

					        	?>
					        	<div class="manifesto_cell <?php echo $colore."_txt" ;?> cell small-12 medium-12 large-6">

					        		<h3><?php echo $titolo ;?></h3>
					        		<h3><?php echo $testo ;?></h3>
					        	</div>


					        	<?php
					
					    // End loop.
					    endwhile;
					
					// No value.
					else :
					    // Do something...
					endif;
				?>
			</div>

			<div  class="container_studio toggable_about  cell small-12 medium-8 large-7  large-order-3  medium-order-3 small-order-4 grid-x">
				<?php

				$about_studio_images = get_field('about_studio_images');
				$about_studio_text = get_field('about_studio_text');
				$size = 'large';

				?>

				<div class="cell small-12 medium-12 large-6 large-order-1  medium-order-2 small-order-2">
					<?php 
						$size = 'large'; // (thumbnail, medium, large, full or custom size)
						if( $about_studio_images ): ?>
						
						        <?php foreach( $about_studio_images as $image_id ): ?>
						     
						                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
						      
						        <?php endforeach; ?>
						
					<?php endif; ?>


				</div>
				<div class="cell small-12 medium-12 large-6 large-order-2  medium-order-1 small-order-1">

					<h3><?php echo $about_studio_text ;?></h3>

				</div>
			</div>

			<div style="display:none;" class="container_press toggable_about  cell small-12 medium-8 large-7  large-order-3  medium-order-3 small-order-5">

				<?php

					// Check rows exists.
					if( have_rows('about_press_elements') ):
					
					    // Loop through rows.
					    while( have_rows('about_press_elements') ) : the_row();
					
					        // Load sub field value.
					        $titolo = get_sub_field('titolo');
					        $testo = get_sub_field('testo');
					        $immagine = get_sub_field('Immagine');
					        $link = get_sub_field('link');
					        $size = 'large'; // (thumbnail, medium, large, full or custom size)
					        // Do something, but make sure you escape the value if outputting directly...

					        	?>
					        	<div onclick="window.open('<?php echo $link;?>', '_blank');" class="press_cell cell small-12 medium-12 large-6 grid-x">

					        		<div  class="press_image cell small-6 medium-6 large-6">

					        			<img src="<?php echo wp_get_attachment_image_url( $immagine, $size ); ?>">
					        		</div>

					        		<div class="press_content cell small-6 medium-6 large-6">
					        			<h3><?php echo $titolo ;?></h3>
					        			<h3><?php echo $testo ;?></h3>
					        			<h3><?php echo mytranslate("Find out more | Scorpi di più") ;?> </h3>

					        		</div>	
					        	</div>


					        	<?php
					
					    // End loop.
					    endwhile;
					
					// No value.
					else :
					    // Do something...
					endif;
				?>


			</div>

		</div>

	</main><!-- #main -->

<?php

get_footer();
