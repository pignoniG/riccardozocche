<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zocche
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'zocche' ); ?></a>

	<header id="masthead" class="site-header">
	

		<nav id="site-navigation" class="main-navigation">
			
<?php $my_home_url = apply_filters( 'wpml_home_url', get_option( 'home' ) );?>

<a href="<?php echo $my_home_url; ?>">


<svg  id="topLogo" version="1.1" id="Livello_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 384 199.4" style="enable-background:new 0 0 384 199.4;" xml:space="preserve">
<g>
	<path d="M9.6,30.5l21,23.3h10.3L18.2,31.2h10.5l5.4-5.4c3.6-3.6,5.7-7.2,5.7-11.7c0-7.8-6.9-13.4-15.8-13.4H2.7v53.1h7
		C9.6,53.8,9.6,30.5,9.6,30.5z M9.6,7.3h13.3c5.6,0,9.8,3.6,9.8,9s-4.2,8.9-9.8,8.9H9.6C9.6,25.2,9.6,7.3,9.6,7.3z"/>
	<rect x="51.9" y="0.8" width="7" height="53"/>
	<path d="M96.6,54.6c8.6,0,15.5-3.6,19.9-9.1l-4.6-5.2c-3,3.8-8,7.1-15,7.1c-10,0-18.9-8.1-18.9-19.9S86.7,7.1,96.8,7.1
		c6.4,0,11.2,3.2,14.2,6.9l5.4-5.3C112.3,3.3,105.6,0,96.8,0c-3.7,0-7.3,1-9.5,2.1L80,9.8C74.7,15.1,70.9,22,70.9,29
		C70.9,43.8,82.1,54.6,96.6,54.6L96.6,54.6z"/>
	<path d="M148.3,54.6c8.6,0,15.5-3.6,19.9-9.1l-4.6-5.2c-3,3.8-8,7.1-15,7.1c-10,0-18.9-8.1-18.9-19.9s8.7-20.5,18.8-20.5
		c6.4,0,11.2,3.2,14.2,6.9l5.4-5.3C164,3.3,157.3,0,148.5,0c-3.7,0-7.4,1-9.5,2.1l-7.4,7.6c-5.2,5.3-9.1,12.2-9.1,19.2
		C122.6,43.8,133.8,54.6,148.3,54.6L148.3,54.6z"/>
	<path d="M202.2,0.8h-10.3l-19,53h7.3l4.9-13.8h23.6l4.9,13.8h7.7L202.2,0.8z M187.4,33.4L197,6.4l9.4,26.9H187.4z"/>
	<path d="M257,31.2l5.4-5.4c3.6-3.6,5.7-7.2,5.7-11.7c0-7.8-6.9-13.4-15.8-13.4h-21.3v53.1h7V30.5l21,23.3h10.3l-22.7-22.6H257
		L257,31.2z M237.9,7.3h13.3c5.6,0,9.8,3.6,9.8,9s-4.2,8.9-9.8,8.9h-13.3L237.9,7.3L237.9,7.3z"/>
	<path d="M324,24.9c0-13.9-10.7-24.2-25.6-24.2h-18.2v53h25.6l7.8-8C319.3,40,324,33.7,324,24.9L324,24.9z M299.2,47.2h-12V7.4h9.9
		c11.8,0.2,19.6,8.3,19.6,19.5C316.6,39.1,307.8,47.1,299.2,47.2L299.2,47.2z"/>
	<path d="M357.5,0c-4.5,0-8.3,1-10.2,2.1l-6.1,6.3c-4.8,4.9-8.9,11.4-8.9,20.2c0,14.6,11.7,25.9,26.1,25.9c4.1,0,8-0.8,10.5-2
		l6.1-6.3c5.1-5.2,9-11.6,9-20.3C384,11.2,372.4,0,357.5,0L357.5,0z M359.3,47.8c-10.6,0-19.9-8.2-19.9-21.6
		c0-12.4,8.3-19.5,17.4-19.5c10.3,0,20.2,8,20.2,21.7C377,40.7,368.5,47.8,359.3,47.8z"/>
	<polygon points="39.6,121.4 8.4,121.4 38.9,82.7 38.9,75 1.7,75 1.7,81.6 31.1,81.6 1,120.4 1,128.1 39.6,128.1 	"/>
	<path d="M71.6,74.3c-4.5,0-8.3,1-10.2,2.1l-6.1,6.3c-4.8,4.9-8.9,11.4-8.9,20.2c0,14.6,11.7,25.9,26.2,25.9c4.1,0,8-0.8,10.5-2
		l6.1-6.3c5.2-5.2,9-11.6,9-20.3C98.1,85.5,86.5,74.3,71.6,74.3z M73.4,122.1c-10.6,0-19.9-8.2-19.9-21.6c0-12.4,8.3-19.5,17.4-19.5
		c10.3,0,20.2,8,20.2,21.7C91.1,115,82.6,122.1,73.4,122.1z"/>
	<path d="M132.4,121.7c-10,0-18.9-8.1-18.9-19.9s8.7-20.5,18.8-20.5c6.4,0,11.2,3.2,14.2,6.9l5.4-5.3c-4.1-5.3-10.8-8.6-19.6-8.6
		c-3.7,0-7.3,1-9.5,2.1l-7.3,7.7c-5.2,5.3-9.1,12.2-9.1,19.2c0,14.8,11.2,25.5,25.8,25.5c8.6,0,15.5-3.6,19.9-9.1l-4.6-5.2
		C144.4,118.4,139.5,121.7,132.4,121.7L132.4,121.7z"/>
	<path d="M203.7,119.7l-4.6-5.2c-3,3.8-8,7.1-15,7.1c-10,0-18.9-8.1-18.9-19.9S174,81.3,184,81.3c6.4,0,11.2,3.2,14.2,6.9l5.4-5.3
		c-4.1-5.3-10.8-8.6-19.6-8.6c-3.7,0-7.4,1-9.5,2.1l-7.4,7.7c-5.2,5.3-9.1,12.2-9.1,19.2c0,14.8,11.2,25.5,25.8,25.5
		C192.5,128.8,199.4,125.3,203.7,119.7L203.7,119.7z"/>
	<polygon points="249.4,97.5 221.6,97.5 221.6,75 214.6,75 214.6,128.1 221.6,128.1 221.6,104.2 249.4,104.2 249.4,128.1 
		256.3,128.1 256.3,75 249.4,75 	"/>
	<polygon points="272.1,128.1 305.1,128.1 305.1,121.4 279.1,121.4 279.1,104.6 302.4,104.6 302.4,98.1 279.1,98.1 279.1,81.7 
		305.1,81.7 305.1,75 272.1,75 	"/>
	<path d="M16.8,176.2l-4.6-1.2c-3.6-0.9-5.2-2.2-5.2-4.5c0-2.6,2.2-4.9,6.1-4.9s5.9,2.1,6.2,5.2H26c0-6.8-4.7-11.3-12.5-11.3
		c-2.8,0-4.7,0.7-5.5,1.1l-3.7,3.8c-2.8,2.9-3.6,5.5-3.6,7.9c0,3.5,1.6,7.4,8.6,9.2L14,183c4.4,1.2,5.8,3,5.8,5.1
		c0,2.7-2.3,5.1-6.6,5.1c-3.2,0-5.9-1.2-6.4-4.8H0c0,6.8,5.2,10.9,12.8,10.9c2.5,0,4.8-0.4,5.8-0.9l3.8-3.9c2.7-2.7,3.9-5.5,3.9-8.3
		C26.3,182.2,24,178.1,16.8,176.2L16.8,176.2z"/>
	<polygon points="47.2,149 40.5,149 40.5,160.4 31.9,160.4 31.9,166.7 40.5,166.7 40.5,198.6 47.2,198.6 47.2,166.7 55.8,166.7 
		55.8,160.4 47.2,160.4 	"/>
	<path d="M88,183.1c0,6.1-3.6,9.9-8.8,9.9s-8.7-3.7-8.7-9.9v-22.7h-6.8v24.2c0,9.8,6.6,14.7,13.7,14.7c2.7,0,4.5-0.4,5.6-1.1
		l4.9-5.1v5.5h6.8v-38.2H88V183.1L88,183.1z"/>
	<path d="M135.8,165.5c-2.7-3.6-7.5-5.9-12.8-5.9c-3,0-5.2,0.6-6.8,1.4l-4.8,5.1c-4.8,5-6.4,9.7-6.4,14.3c0,10.5,8.3,18.9,18.9,18.9
		c2.6,0,5.2-0.5,6.5-1.2l5.5-5.6v6.1h6.8v-53.1h-6.8L135.8,165.5L135.8,165.5z M124.8,193.1c-6.3,0-13.3-5.1-13.4-14.7
		c-0.1-8,5.1-12.7,11.2-12.7s13.5,5.1,13.6,14.7C136.3,188.4,131.1,193.1,124.8,193.1z"/>
	<rect x="154.2" y="147.7" width="8.8" height="8.3"/>
	<rect x="155.3" y="160.4" width="6.8" height="38.2"/>
	<path d="M190.9,159.6c-3.4,0-6.1,0.8-7.3,1.4l-5.6,5.8c-4.1,4.2-5.9,8.8-5.9,13.7c0,10.4,8.7,18.8,19.5,18.8c3,0,5.5-0.7,7.3-1.5
		l5.4-5.5c4.5-4.5,6.1-9.1,6.1-13.9C210.3,168,201.6,159.6,190.9,159.6z M192.4,193.1c-7.1,0-13.8-6.4-13.8-14.8
		c0-7.9,5.5-12.6,11.4-12.6c7.1,0,13.9,6.4,13.9,14.8C203.9,188.4,198.3,193.1,192.4,193.1L192.4,193.1z"/>
	<path d="M322.1,69.9c-5.7,0-10.1,4.4-10.1,10.3s4.5,10.3,10.1,10.3s10.1-4.4,10.1-10.3S327.8,69.9,322.1,69.9z M322.1,88.3
		c-4.5,0-7.8-3.5-7.8-8.2s3.3-8.2,7.8-8.2s7.8,3.5,7.8,8.2S326.6,88.3,322.1,88.3z"/>
	<path d="M326.4,82.3c-0.2-1-0.6-1.6-1.5-1.8v-0.1c1.2-0.4,1.8-1.3,1.8-2.4c0-1.9-1.7-3-3.7-3h-5v10.3h2.8v-3.7h1.4
		c1,0,1.5,0.4,1.6,1.4c0.1,1,0.2,2.2,0.4,2.4h2.7V85C326.5,84.8,326.6,83.6,326.4,82.3L326.4,82.3z M322.5,79.5h-1.7v-2.3h1.7
		c1,0,1.4,0.4,1.4,1.2S323.4,79.4,322.5,79.5L322.5,79.5z"/>
</g>
</svg>
</a>



			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fi-align-justify"></i></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
