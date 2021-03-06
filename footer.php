<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?>

	</div><!-- #content -->

	<?php if ( is_customize_preview() ) echo '<div id="awps-footer-control" style="margin-top:-30px;position:absolute;"></div>'; ?>
	<?php if (!is_front_page()) {?>
		<div class="content-spacer"></div>
	<?php } ?>
	<footer id="colophon" class="site-footer container-fluid pt-5 
		<?php if ( is_page_template('page-templates/jubilaeum.php') || in_category('foerderverein') && is_single() ) 
			{
				echo 'yellow';
			} ?>" 
		role="contentinfo">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3>Der Chor</h3>
					<?php
					if ( has_nav_menu( 'footer1' ) ) :
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu_id' => 'footer-menu'
						) );
					endif;
					?>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3>Förderverein</h3>
					<?php
					if ( has_nav_menu( 'footer2' ) ) :
						wp_nav_menu( array(
							'theme_location' => 'footer2',
							'menu_id' => 'footer-menu'
						) );
					endif;
					?>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<h3>Rechtliches</h3>
					<?php
					if ( has_nav_menu( 'footer3' ) ) :
						wp_nav_menu( array(
							'theme_location' => 'footer3',
							'menu_id' => 'footer-menu'
						) );
					endif;
					?>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
				</div>

			</div>
			<div class="row mb-10 justify-center align-bottom">

				<div class="col-md-3">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/mwk_logo" alt=""></img>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-3">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/lmr_logo" alt=""></img>
				</div>
			</div>
			<div class="row justify-center">
				<div class="col-md-2">
					<ul class="social-media-links">
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
			<div class="row justify-center">
				<div class="col-md-6 col-xs-12 site-info">
					<p>Landesjugendchor Baden-Württemberg &copy; <?php echo date('Y'); ?></p>
				</div><!-- .site-info -->
			</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page --> 



<?php wp_footer(); ?>

</body>
</html>
