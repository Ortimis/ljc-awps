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
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package awps
 */

get_header(); ?>

<div class="container">

	<div class="row justify-center">

		<div class="col-sm-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php
					while ( have_posts() ) : the_post(); ?>




					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php
								the_title( '<h1 class="entry-title">', '</h1>' );
						?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<span>Anmeldeschluss: <?php the_field('anmeldeschluss') ?></span>
						<?php the_field('programm'); ?>
						<?php
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
						?>
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



