<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package awps
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('phase-front container'); ?> >
	<div class="row justify-center">
		<div class="col-lg-4 col-md-6 content">
			<h2>Ausschreibung</h2>
			<p><?php the_field('allgemeiner_text') ?></p>
			<span>Anmeldeschluss: <?php the_field('anmeldeschluss') ?></span>
		</div>
		
		<div class="col-lg-5 col-md-6 call-to-action">
			<h1 class="phase-titel"><?php the_title(); ?></h1>
			<div class="btn-group mt-12">
				<a href="<?php echo home_url();?>/mitsingen" class="btn btn-sm btn-light">Anmelden!</a>
				<a href="<?php the_permalink(); ?>" class="btn btn-sm">Mehr Info</a>
			</div>
		</div>
	</div>

</article><!-- #post-## -->
