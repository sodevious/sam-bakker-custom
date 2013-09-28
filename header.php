<?php
/**
 * The Header for our theme.
 *
 * @package sam-bakker-custom
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Sam Bakker">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<link rel='stylesheet'  href='<?php echo get_template_directory_uri(); ?>/assets/base.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo get_template_directory_uri(); ?>/assets/skeleton.css' type='text/css' media='all' />
<link rel='stylesheet'  href='<?php echo get_template_directory_uri(); ?>/assets/bakker.css' type='text/css' media='all' />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header class="site-header" role="banner">
	<div class="container">
		<div class="eight columns logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
		</div>

		<div class="eight columns social">
			<h3>Social & Search</h3>
			<?php get_search_form(); ?>

		</div>
	</div>
	</header>

	<nav class="main-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'container' ) ); ?>
	</nav><!-- #site-navigation -->
<div class="clear"></div>
	<section class="container">
