<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site" <?php echo ! is_customize_preview() ?: 'style="padding: 0 40px;"'; ?>>

		<header id="masthead" class="site-header <?php echo is_front_page() ?: "onwhitebackground intransparent"; ?>" role="banner">

			<?php if ( is_customize_preview() ) echo '<div id="awps-header-control"></div>'; ?>

			<div class="container container-fluid">

				<div class="row">
					<div class="col-lg-12">

						<div class="site-branding">
							<img id="header-logo" class="header-logo" 
								src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/LJC-Logo_Weiss.svg"
							 	alt="<?php bloginfo( 'name' ); ?>"
								title="<?php bloginfo( 'name' ); ?>"
							 />
							<h1 class="site-title hide"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description hide"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php endif; ?> 
					</div><!-- .site-branding -->

				</div><!-- .col -->

				<div class="col-lg-12">
					<div id="menu-toggle" class="<?php if (!is_front_page()){ echo "background-is-white"; } ?>">
						<div class="bar bar1"></div>
						<div class="bar bar2"></div>
						<div class="bar bar3"></div>
					</div>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php
						if ( has_nav_menu( 'primary' ) ) :
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_id' => 'primary-menu',
								'walker' => new Awps\Core\WalkerNav(),
							) );
						endif;
						?>

					</nav>

				</div><!-- .col -->

			</div><!-- .row -->

			<div class="row">
				<div class="col-lg-12">
				<ul class="social-media-links social-media-links-sidebar mt-10">
							<li>
								<a href="https://www.facebook.com/landesjugendchor/" class="social-media-link">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCSuu1TxQe75sBt4EKutTisA" class="social-media-link">
									<i class="fa fa-youtube"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/landesjugendchor/" class="social-media-link">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
						</ul>
				</div>
			</div>
		</div><!-- .container-fluid -->

	</header><!-- #masthead -->

	<?php if (!is_front_page()) {?>
		<div class="content-spacer"></div>
	<?php } ?>

	<div id="content" class="site-content">
