<?php
/**
*	@package ljc
*/


// WP_Query arguments
$args = array(
	'post_type'              => array( 'phase' ),
	'post_status'            => array( 'publish' ),
	'nopaging'               => true,
	'posts_per_page'         => '1',
	'meta_query'			 => array(
		array(
			'key' => 'phasenstatus',
			'value' => 'Ausschreibung'
		)
	)
);

// The Query
$query_phase = new WP_Query( $args );

// The Loop
if ( $query_phase->have_posts() ) {
?>

<section id="ausschreibung">

	<div class="container">

		<div class="row">


			<div class="col-sm-8">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<?php

							while ( $query_phase->have_posts() ) {
								$query_phase->the_post();
                                
                                get_template_part('views/content', 'phase');
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
   echo '<pre>Keine Posts</pre>';
}

// Restore original Post Data
wp_reset_postdata();
?>

