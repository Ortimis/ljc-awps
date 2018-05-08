<?php
/**
 * Template Name: Blog Template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package awps
 */

// WP_Query arguments
$args = array(
	'post_type'              => array('post', 'phase'),
	'post_status'            => 'publish',
	'posts_per_page' 		 => 10,
	'meta_query'			 => array(
		array(
			'key' => 'phasenstatus',
			'compare' => '=',
			'value' => 'nachlese',
        ),
        array(
            'key' => 'phasenstatus',
            'compare' => 'NOT EXISTS',
        ),
        'relation' => 'OR',
	)
);

// The Query
$query_aktuelles = new WP_Query( $args );

get_header(); ?>

<div class="container">

	<div class="row align-stretch justify-center">

		<div class="col-sm-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

                    <?php

                    while ( $query_aktuelles->have_posts() ) {
                        $query_aktuelles->the_post();

                        get_template_part('views/content');

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
