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
		<?php
		while ( have_posts() ) : the_post(); ?>
		<div class="col-sm-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
	
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php
								the_title( '<h1 class="entry-title">', '</h1>' );
						?>
						<span class="konzert-meta"><?php the_field('datum_und_uhrzeit'); ?> | <?php the_field('konzertort'); ?> </span>
					</header><!-- .entry-header -->
					<div class="entry-content mt-10">
						<?php
							the_content( );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'awps' ),
								'after' => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
					<?php the_post_navigation(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="col-sm-4">
				<?php the_post_thumbnail('large'); ?>
			</div>
		<?php } 

		
		endwhile; ?>

	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();



