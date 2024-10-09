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

		<div class="home_grid"> 

		<?php

		// Check rows exists.
			if( have_rows('home_grid') ):

    		// Loop through rows.
    			while( have_rows('home_grid') ) : the_row();

        		// Load sub field value.
        		$home_element_type = get_sub_field('home_element_type');
        		$home_element_project_link = get_sub_field('home_element_project_link');
        		$home_element_project_image = get_sub_field('home_element_project_image');
        		$home_element_product_link = get_sub_field('home_element_product_link');
        		$home_element_product_image = get_sub_field('home_element_product_image');
        		$home_element_sheet_color = get_sub_field('home_element_sheet_color');
        		$home_element_sheet_link = get_sub_field('home_element_sheet_link');
        		
        		$home_element_sheet_text = get_sub_field('home_element_sheet_text');
        		$home_element_sheet_title = get_sub_field('home_element_sheet_title');


        	
				

        		

        		$size = 'large'; // (thumbnail, medium, large, full or custom size)



        		if ($home_element_type == "home_element_project" && $home_element_project_link->ID) {

        			$project_permalink = get_permalink( $home_element_project_link->ID );
        			$title = get_the_title( $home_element_project_link->ID );
        			$project_year = get_field( 'project_year', $home_element_project_link->ID );
        			
    				if ($project_year){
    					 $project_year=  ", ".$project_year;
    				}
    				$project_location = get_field( 'project_location', $home_element_project_link->ID );
    
    				if ($project_location){
    					 $project_location=  ", ".$project_location;
    				}

        			
        			?>


        			<div  onclick="window.open('<?php echo $project_permalink;?>', '_self');" class="home_grid_item <?php echo $home_element_type ?>">

        				<img src=" <?php echo wp_get_attachment_image_url( $home_element_project_image, $size ); ?>">

        				<h3> <?php echo $title.$project_location.$project_year;?> </h3>

        			</div><?php
        		
        		}

        		if ($home_element_type == "home_element_product") {

        			$product_permalink = get_permalink( $home_element_product_link->ID );
        			$title = get_the_title( $home_element_product_link->ID );
        			
        			?>
        			<div  onclick="window.open('<?php echo $product_permalink;?>', '_self');" class="home_grid_item <?php echo $home_element_type ?>">

        				<img src=" <?php echo wp_get_attachment_image_url( $home_element_product_image, $size ); ?>">

        				<h3> <?php echo $title;?> </h3>

        			</div><?php
        		
        		}


        		

        		if ($home_element_type == "home_element_sheet") {
        			?><div 

        		<?php

        			if( $home_element_sheet_link ): 
				    	$home_element_sheet_link_url = $home_element_sheet_link['url'];
				    	$home_element_sheet_link_title = $home_element_sheet_link['title'];
				    	$home_element_sheet_link_target = $home_element_sheet_link['target'] ? $home_element_sheet_link['target'] : '_self';
				    	?>

				    	onclick="window.open('<?php echo esc_url( $home_element_sheet_link_url );?>', '<?php echo esc_attr( $home_element_sheet_link_target ); ?>');"
        				<?php endif; ?>

        				class="home_grid_item <?php echo $home_element_type.' '.$home_element_sheet_color;?> <?php if ($home_element_sheet_link) {  echo "cliccable"; } ?>">
        				<?php if (!empty($home_element_sheet_title)): ?>
        					<h2 class="sheet_title">

        						<?php echo $home_element_sheet_title;?>
        					</h2>
        				<?php endif ?>
        				<?php if (!empty($home_element_sheet_text)): ?>
        					<h2 class="sheet_text">

        						<?php echo $home_element_sheet_text;?>
        					</h2>
        				<?php endif ?>
        				<?php if ($home_element_sheet_link) { ?>
        				<h3><?php echo mytranslate("Find out more | Scopri di più") ;?> </h3>
        				<?php } ?>
        			</div><?php
        		
        		}





        		// Do something, but make sure you escape the value if outputting directly...

   				// End loop.
    			endwhile;

			// No value.
			else :
    		// Do something...
			endif;
			?>
		</div>

	</main><!-- #main -->

<?php

get_footer();
