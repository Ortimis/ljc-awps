<?php
/**
 * Template Name: Mitsingen Template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */

// WP_Query arguments
$args = array(
	'post_type'              => array('phase'),
	'post_status'            => 'publish',
	'posts_per_page' 		 => 10,
	'meta_query'			 => array(
		array(
			'key' => 'phasenstatus',
			'compare' => '=',
			'value' => 'Ausschreibung',
        ),
	)
);

// The Query
$query_aktive_ausschreibung = new WP_Query( $args );

get_header(); ?>

<div class="container">

	<div class="row align-stretch justify-center">

		<div class="col-sm-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'views/content', 'page' );

					endwhile;

					?>

                    <?php
					if ($query_aktive_ausschreibung->have_posts()) {

						echo "Es gibt ne Ausschreibung";


					} else {
						echo "Keine aktive Ausschreibung";
					}
                    ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->


	</div><!-- .row -->

</div><!-- .container -->

<?php 
wp_reset_postdata();

get_footer();
