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
$idpage=125;

			if(ICL_LANGUAGE_CODE=='en'){
				$idpage=125;



			} elseif(ICL_LANGUAGE_CODE=='it'){ 
				$idpage=123;
			

			}

			

?>



<footer id="colophon" class="site-footer compressed">
	<hr class="separator hideinc">

<div class="grid-x top_contacts grid-margin-x showinc">

  <div class="cell small-12 medium-6 contacts_top_left">
  	<h1>
  		<?php echo  get_field('contacts_top_left',$post_id =$idpage);?> 
  	</h1>
  </div>
  <div class="cell small-12 medium-6 contacts_top_right ">
  	<p><h1>
  		<?php echo  get_field('contacts_top_right',$post_id =$idpage)?>
  	</h1></p>
  </div>


  <div style="margin-top: 20px;"class="cell small-6 large-3 small-offset-0 large-offset-6 "><h3><?php echo  get_field('contacts_bottom_left',$post_id =$idpage);?></h3></div>
  <div style="margin-top: 20px;" class="cell small-6 large-3"><h3><?php echo  get_field('contacts_bottom_right',$post_id =$idpage);?></h3></div>

  <div class="cell small-12 medium-12 large-6 small-offset-0 large-offset-6 newsletter_contacts" style="margin-top: 20px;">
  	<h3><?php echo  get_field('newsletter_text',$post_id =$idpage);?></h3>
	 <?php  echo do_shortcode('[newsletter]');?>

  </div>

</div>



<div class="site-info">


	<svg id="bottom_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.24 197.83"><defs><style>.cls-1{stroke-width:0px;}</style></defs><path class="st0" d="M96.5,129.9V98.6l30.8,31.3H96.5z M70,129.9H47V67.9h43.2v62.1H70z M107.4,191.9H29.9l38.8-53.5L107.4,191.9
	L107.4,191.9z M9.9,129.9l30.8-31.3v31.3H9.9z M22,94.1c-8.3,0-14.3-5.2-14.3-13.1S13.7,67.9,22,67.9h18.7v26.2
	C40.7,94.1,22,94.1,22,94.1z M30,5.8h77.3L68.6,59.5L30,5.8z M115.2,67.9L115.2,67.9c8.3,0,14.3,5.1,14.3,13.1s-5.9,13.1-14.3,13.1
	H96.5V67.9L115.2,67.9L115.2,67.9z M137.2,129.9l-32.7-30.4h12c17.8,0,19.3-15.4,19.3-18.5c0-9.7-8.3-19-19.6-19H74.1l40.1-55.4V0
	H23v6.6L63.1,62H21C9.7,62,1.4,71.3,1.4,81c0,3.1,1.5,18.5,19.3,18.5h12L0,129.9v5.8h63l-40,55.5v6.6h91.1v-6.6l-39.9-55.5h63
	L137.2,129.9L137.2,129.9z"/>
<path class="st0" d="M128.7,182.3c-4.5,0-8,3.5-8,8.2s3.6,8.2,8,8.2s8-3.5,8-8.2S133.2,182.3,128.7,182.3z M128.7,196.9
	c-3.6,0-6.2-2.8-6.2-6.5s2.6-6.5,6.2-6.5c3.6,0,6.2,2.8,6.2,6.5S132.2,196.9,128.7,196.9z"/>
<path class="st0" d="M132.1,192.1c-0.2-0.8-0.5-1.3-1.2-1.4v-0.1c1-0.3,1.4-1,1.4-1.9c0-1.5-1.3-2.4-2.9-2.4h-4v8.2h2.2v-2.9h1.1
	c0.8,0,1.2,0.3,1.3,1.1c0.1,0.8,0.2,1.7,0.3,1.9h2.1v-0.2C132.2,194.1,132.3,193.1,132.1,192.1L132.1,192.1z M129,189.9h-1.3V188
	h1.3c0.8,0,1.1,0.3,1.1,1S129.8,189.9,129,189.9L129,189.9z"/></svg>


<div class="footer_containers left">
	<h4 class="hideinc"><?php echo  get_field('footer_text_top_left',$post_id =108);?></h4>
	<h5><?php echo  get_field('footer_text_bottom_left',$post_id =108);?></h5>
</div>
<div class="footer_containers right">
	<h4 class="hideinc"><?php echo  get_field('footer_text_top_right',$post_id =108);?></h4>
	<h5><?php echo  get_field('footer_text_bottom_right',$post_id =108);?></h5>
</div>


<div class="footer_containers buttons hideinc">
<?php 
$rows = get_field('footer_arch_buttons',$post_id =108);
if( $rows ) {

    foreach( $rows as $row ) {
        $url = $row['footer_arch_button_url'];
        $label = $row['footer_arch_button_label'];
        ?>

        <a class="arch_button" href="<?php echo $url;?>" target="_blank">
        	<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
  			<path id="lineAC" width="100%" height="100%" d="M 10.729922,84.666667 V 59.785495 h 0.01654 c -0.0082,-0.108146 -0.01596,-0.216323 -0.02326,-0.324528 -4e-5,-23.296734 	18.885704,-42.182478 42.182438,-42.182438 h 5.1e-5 c 23.296734,-4e-5 42.182481,18.885704 42.182441,42.182438 -0.002,0.108186 -0.005,0.216362 	-0.008,0.324528 h 0.03 v 24.881172" stroke="transparent" stroke-width="0" fill="none"/>
  	
  			<text ><textPath href="#lineAC"  textLength="185"  startOffset="0"><?php echo $label;?></textPath></text>
  			Sorry, your browser does not support inline SVG.
			</svg>
		</a>
        <?php 
        
       
    }

}




?>

 <a class="arch_button" data-open="newsletterModal" >
        	<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
  			<path id="lineAC" width="100%" height="100%" d="M 10.729922,84.666667 V 59.785495 h 0.01654 c -0.0082,-0.108146 -0.01596,-0.216323 -0.02326,-0.324528 -4e-5,-23.296734 	18.885704,-42.182478 42.182438,-42.182438 h 5.1e-5 c 23.296734,-4e-5 42.182481,18.885704 42.182441,42.182438 -0.002,0.108186 -0.005,0.216362 	-0.008,0.324528 h 0.03 v 24.881172" stroke="transparent" stroke-width="0" fill="none"/>
  	
  			<text ><textPath href="#lineAC"  textLength="185"  startOffset="0"><?php echo mytranslate("Subscribe to the Newsletter | Iscriviti alla Newsletter") ;?> </textPath></text>
  			Sorry, your browser does not support inline SVG.
			</svg>
		</a>

</div>
<?php 
		if(ICL_LANGUAGE_CODE=='en'){
				$idpage=125;



			} elseif(ICL_LANGUAGE_CODE=='it'){ 
				$idpage=123;
			

			}
			?>
<div class="reveal" id="newsletterModal" data-reveal>

	<h3><?php echo  get_field('newsletter_text',$post_id =$idpage);?></h3>
	 <?php echo do_shortcode('[newsletter]');?>
 
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>







		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>
</html>
