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
if ( is_single() ) {
	?>
		<a href="<?php echo get_home_url(); ?>">Zurück</a>
	<?php
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blogpost') ?>>
	<header class="entry-header <?php if ( is_single() ) { echo 'mb-10 single'; } ?>">
		<?php
				if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
				else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php Awps\Core\Tags::posted_on(); ?>
					</div><!-- .entry-meta -->
		<?php
				endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			if ( is_single() ) :
				the_content( sprintf(
						the_title( '<span class="screen-reader-text">"', '"</span>', false ) ) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'awps' ),
					'after' => '</div>',
				) );

				
			else :
				echo nachlese_excerpt();
				the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">Mehr</a>
				<?php
			endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php ?>
