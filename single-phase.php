<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */

?>
<?php



get_header(); ?>

<div class="container">

	<div class="row justify-center">

		<div class="col-sm-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php
					while ( have_posts() ) : the_post(); 
					$status = get_field('phasenstatus'); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php
								the_title( '<h1 class="entry-title">', '</h1>' );
						?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php 
							if ($status === 'Ausschreibung') {
						?>
								
								<div class="mt-8 mb-8"><?php the_field('allgemeiner_text');?></div>
								<br>
						<?php
							} elseif ($status === 'Nachlese') { ?>
								<div class="mt-8 mb-8"><?php the_field('nachlese');?></div>
							<?php } ?>	
						<div class="programm alignfull">
							<div class="container">
								<h2 class="mb-6">Programm</h2>
								<?php the_field('programm'); ?>					
							</div>
						</div>

						<?php 
							if ($status === 'Ausschreibung') {
						?>
						<div class="call-to-action mt-8 mb-8">
							<a href="<?php echo home_url();?>/mitsingen" class="btn btn-sm btn-light">Jetzt Anmelden!</a>	
							<p>Anmeldeschluss für diese Phase: <?php the_field('anmeldeschluss') ?></p>
						</div>


						<div class="row">
							<div class="col-md-6">
								<h2>Arbeitsphase</h2>
								<?php the_field('arbeitsphase'); ?>
							</div>
							<div class="col-md-6 pl-2">
							<h2>Rahmendaten</h2>
						<?php the_field('rahmendaten'); ?>
							</div>
						</div>
						
						

						<h2>Kosten</h2>
						<?php the_field('kosten'); ?>

							<?php } ?>

						<!-- <?php 
							the_content( sprintf(
									/* translators: %s: Name of current post. */
									wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'awps' ), array(
										'span' => array(
											'class' => array(),
										),
									) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false ) ) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'awps' ),
								'after' => '</div>',
							) );
						?> -->
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php Awps\Core\Tags::entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

				<?php the_post_navigation();
				endwhile; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();



