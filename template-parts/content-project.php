<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zocche
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php 
		$project_top_gallery_images = get_field('project_top_gallery');
		$size = 'full'; // (thumbnail, medium, large, full or custom size)
		if( $project_top_gallery_images ): ?>
		    <div class="project_top_gallery">
		        <?php foreach( $project_top_gallery_images as $image_id ): ?>
		            <div class="project_top_gallery_image" style="background-image:  url(' <?php echo wp_get_attachment_image_url( $image_id, $size ); ?>');">

		                
		            </div>
		        <?php endforeach; ?>
		    </div>
		<?php endif; ?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->

	



	<div class="entry-content grid-x">

		<div class="cell small-12 medium-12 large-3 large-order-1 small-order-1 conten_project_infocard">
			

			<?php 
				$rows = get_field('project_infocard');
				if( $rows ) {
				    echo '<table>';

				    foreach( $rows as $row ) {

				        echo '<tr><td>';
				            echo  $row['project_info_title'];
				            echo '</td><td>';
				            echo $row['project_info_content'];
				        echo '</td></tr>';
				    }
				    echo '</table>';
				}
				?>
		


		</div>	
		<div class="cell small-12 medium-12 large-6 large-order-2 small-order-2 conten_project_body">

	
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'zocche' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		?>
		</div>


	</div><!-- .entry-content -->

	<?php 
		$project_bottom_gallery_images = get_field('project_bottom_gallery');
		$size = 'full'; // (thumbnail, medium, large, full or custom size)
		if( $project_bottom_gallery_images ): ?>
		    <div class="project_bottom_gallery">
		        <?php foreach( $project_bottom_gallery_images as $image_id ): ?>
		            <div class="project_bottom_gallery_image">
		                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
		            </div>
		        <?php endforeach; ?>
		    </div>
		<?php endif; ?>

		<div class="cell small-12 medium-12 large-12 large-order-3 small-order-3" style="text-align: center; margin-top: 50px;margin-bottom: 50px;">
			<a href="<?php echo apply_filters( 'wpml_permalink',get_permalink(117));?>"style="font-size: 25px" class="button green"><?php echo mytranslate("Back to Works | Torna ai Progetti") ;?></a>
		</div>



</article><!-- #post-<?php the_ID(); ?> -->
