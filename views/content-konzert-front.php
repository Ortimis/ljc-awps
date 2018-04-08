<?php
/**
 * Template part for Konzert content on front page
 *
 * @package awps
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('konzert-front col-lg-3 col-md-6'); ?>>
    <a href="<?php the_permalink(); ?>"><span></span></a>
	<header class="entry-header">
        <?php if ( has_post_thumbnail() ){ ?>
            <img src="<?php the_post_thumbnail_url( 'medium_large' ); ?>" alt="">
        <?php } ?>
        
	</header><!-- .entry-header -->

	<div class="entry-content">

        <?php the_title( '<h1 class="entry-title mb-4">', '</h1>' ); ?>

        <?php the_field('auszug_front'); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

        <span class="mt-3">
            <?php the_field('konzertort');?> 
            <br> 
            <time><?php the_field('datum_und_uhrzeit')?></time>
        </span>

    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
