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

	<main id="main" class="site-main" role="main">
		<?php

			while ( $query_phase->have_posts() ) {
				$query_phase->the_post();
				
				get_template_part('views/content-phase', 'front');
			}
		?>

	</main><!-- #main -->

</section>

<?php

} else {
   echo '<pre>Keine Arbeitsphase mit Status "Ausschreibung". Ausschreibungen mit Status "Nachlese" werden unter "Aktuelles" gezeigt</pre>';
}

// Restore original Post Data
wp_reset_postdata();
?>

