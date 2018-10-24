<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_Montezuma
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title>Montezuma Lodge</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> <?php  if ( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?>  >
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'montezuma_new' ); ?></a>

			<header>
<div class="wrapper">
<div class="navigation">
	<div class="logo">
		<a href="<?php echo home_url(); ?>">
		<img src="<?php bloginfo('template_directory'); ?>/images/nav-logo.png"  alt = "example">
		</a>
	</div>

				<nav id="site-navigation" class="main-navigation">
					<a class="burger-nav"></a>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'Primary',
					) );
					?>
				</nav><!-- #site-navigation -->
</div>
</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">