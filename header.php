<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hyphen
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="m-top-large container c-red t-white p-large t-shadow ">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://getmortified.com/wp-content/uploads/2015/02/nav-logo1.png" class="siteLogo" style="max-width: 250px" /></a>
		<a href="#" class="btn t-white responsiveNavTrigger"><i class="fa fa-bars"></i> Menu</a>
		<nav>
			<ul class="siteNav m-bottom-large">
				<li><a href="/attend" class="siteNav__item <?php if (is_page('Attend Mortified')) {echo " is-active"; }?>">Attend <i class="fa fa-ticket" aria-hidden="true"></i></a></li>
				<li><a href="/listen" class="siteNav__item<?php if (is_page('Listen')) {echo " is-active"; }?>">Listen <i class="fa fa-headphones" aria-hidden="true"></i></a></li>
				<li><a href="/participate" class="siteNav__item<?php if (is_page('Participate')) {echo " is-active"; }?>">Participate <i class="fa fa-microphone" aria-hidden="true"></i></a></li>
				<li><a href="/watch/mortified-nation" class="siteNav__item<?php if (is_page('Mortified Nation')) {echo " is-active"; }?>">Watch <i class="fa fa-television" aria-hidden="true"></i></a></li>
				<li><a href="/books" class="siteNav__item<?php if (is_page('Books')) {echo " is-active"; }?>">Books <i class="fa fa-book" aria-hidden="true"></i></a></li>
			</ul>
		</nav>
	</header>
