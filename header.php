<?php $options = _WSH()->option();
	lisbon_bunch_global_variable();
	$icon_href = (lisbon_set( $options, 'site_favicon' )) ? lisbon_set( $options, 'site_favicon' ) : get_template_directory_uri().'/images/favicon.png';
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		 <!-- Basic -->
	    <meta charset="<?php bloginfo( 'charset' ); ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- Favcon -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ):?>
			<link rel="shortcut icon" type="image/png" href="<?php echo esc_url($icon_href);?>">
		<?php endif;?>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

<?php if(lisbon_set($options, 'body_color')) : ?>
	<div class="body_class" style="background-color:<?php echo esc_url(lisbon_set($options, 'body_color'));?>;" >
	<?php else :?>
	<div class="body_class" style="background-image:url(<?php echo esc_url(lisbon_set($options, 'body_image'));?>);" >
	<?php endif ; ?>


	<div class="page-wrapper<?php if(lisbon_set($options, 'boxed')) echo ' boxed';?>" style="background:<?php echo esc_url(lisbon_set($options, 'wrapper_color'));?>;" >
	<?php if(lisbon_set($options, 'preloader')):?>
	<div class="preloader"></div>
	<?php endif;?>

	<?php $header = lisbon_set($options, 'header_style');
	  $header = (lisbon_set($_GET, 'header_style')) ? lisbon_set($_GET, 'header_style') : $header;
	  switch($header){
	  	case "header_v2":
			get_template_part('includes/modules/header_v2');
			break;
		default:
			get_template_part('includes/modules/header_v1');
		}
  ?>





























   <!-- MINE -->


   <?php
wp_nav_menu( array(
   'theme_location' => 'extra-menu',
   'container_class' => 'upper-right-menu' ) );
?>

 <?php
wp_nav_menu( array(
   'theme_location' => 'my-custom-menu',
   'container_class' => 'custom-navigation' ) );
?>
