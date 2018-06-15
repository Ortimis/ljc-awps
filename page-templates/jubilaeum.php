<?php
/**
 * Template Name: Jubiläum
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
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
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'views/content', 'page' );

					endwhile;

					?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

	</div><!-- .row -->

</div><!-- .container -->
<?php
// WP_Query arguments
$args = array(
	'post_type'              => array('post'),
	'post_status'            => 'publish',
	'posts_per_page' 		 => 10,
    'category_name'          => 'förderverein'
);

// The Query
$query_aktuelles = new WP_Query( $args );



// The Loop
if ( $query_aktuelles->have_posts() ) {
?>

<section id="aktuelles-jubilaum">

	<div class="container">

				
				<div id="primary" class="content-area">
					<main id="aktuelles-wrapper" class="site-main" role="main">
						<?php

							while ( $query_aktuelles->have_posts() ) {
								$query_aktuelles->the_post();

                                get_template_part('views/content');

							}
						?>

					</main><!-- #main -->
				</div><!-- #primary -->

				
				<a href="<?php echo home_url(); ?>/blog" class="btn btn-sm btn-light btn-transp mt-10 mb-5">Zum Blog</a>
	</div><!-- .container -->

</section>

<?php

} else {
    echo '<pre>Nothing Found</pre>';
}

// Restore original Post Data
wp_reset_postdata();
?>

<?php
get_footer();
