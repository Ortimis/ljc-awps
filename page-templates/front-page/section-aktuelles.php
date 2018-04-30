<?php
/**
*	@package ljc
*/

// WP_Query arguments
$args = array(
	'post_type'              => array('post', 'phase'),
	'post_status'            => 'publish',
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



// The Loop
if ( $query_aktuelles->have_posts() ) {
?>

<section id="aktuelles">

	<div class="container">

		<div class="row">


			<div class="col-sm-8">

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

			</div><!-- .col- -->

		</div><!-- .row -->

	</div><!-- .container -->

</section>

<?php

} else {
    echo '<pre>Nothing Found</pre>';
}

// Restore original Post Data
wp_reset_postdata();
?>

