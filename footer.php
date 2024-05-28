<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zocche
 */

?>



<footer id="colophon" class="site-footer compressed">
	<hr class="separator">
	<div class="site-info">


	<svg id="bottom_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.24 197.83"><defs><style>.cls-1{stroke-width:0px;}</style></defs><path class="cls-1" d="m96.51,129.95v-31.33l30.83,31.33h-30.83Zm-26.51,0h-22.96v-62.06h43.17v62.06h-20.21Zm37.39,61.97H29.86l38.77-53.48,38.77,53.48ZM9.9,129.95l30.83-31.33v31.33H9.9Zm12.12-35.88c-8.34,0-14.26-5.24-14.26-13.09s5.92-13.09,14.26-13.09h18.71v26.18h-18.71ZM29.98,5.82h77.28l-38.64,53.64L29.98,5.82Zm85.23,62.06h0c8.34,0,14.26,5.14,14.26,13.09s-5.92,13.09-14.26,13.09h-18.71v-26.18h18.7Zm22.03,62.06l-32.68-30.45h12.01c17.84,0,19.31-15.42,19.31-18.52,0-9.7-8.34-19-19.58-19h-42.2L114.24,6.59V0H23v6.59l40.14,55.38H20.95c-11.25,0-19.58,9.31-19.58,19,0,3.11,1.47,18.52,19.31,18.52h12.01L0,129.95v5.82h63.02l-39.95,55.47v6.59h91.12v-6.59l-39.95-55.47h63.02v-5.82Z"/></svg>


<div class="footer_containers left">
	<h4><?php echo  get_field('footer_text_top_left',$post_id =108);?></h4>
	<h5><?php echo  get_field('footer_text_bottom_left',$post_id =108);?></h5>
</div>
<div class="footer_containers right">
	<h4><?php echo  get_field('footer_text_top_right',$post_id =108);?></h4>
	<h5><?php echo  get_field('footer_text_bottom_right',$post_id =108);?></h5>
</div>


<div class="footer_containers buttons">
<?php 
$rows = get_field('footer_arch_buttons',$post_id =108);
if( $rows ) {

    foreach( $rows as $row ) {
        $url = $row['footer_arch_button_url'];
        $label = $row['footer_arch_button_label'];
        ?>

        <a class="arch_button" href="<?php echo $url;?>" target="_blank">
        	<svg  xmlns="http://www.w3.org/2000/svg">
  			<path id="lineAC" width="100%" height="100%" d="M 10.729922,84.666667 V 59.785495 h 0.01654 c -0.0082,-0.108146 -0.01596,-0.216323 -0.02326,-0.324528 -4e-5,-23.296734 	18.885704,-42.182478 42.182438,-42.182438 h 5.1e-5 c 23.296734,-4e-5 42.182481,18.885704 42.182441,42.182438 -0.002,0.108186 -0.005,0.216362 	-0.008,0.324528 h 0.03 v 24.881172" stroke="transparent" stroke-width="0" fill="none"/>
  	
  			<text ><textPath href="#lineAC" textLength="78%" startOffset="0"><?php echo $label;?></textPath></text>
  			Sorry, your browser does not support inline SVG.
			</svg>
		</a>
        <?php 
        
       
    }

}


?>

</div>







		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
