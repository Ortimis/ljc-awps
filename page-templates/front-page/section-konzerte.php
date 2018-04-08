<?php
/**
*	@package ljc
*/

$timenow = date('Y-m-d H:i:s');

// WP_Query arguments
$args = array(
	'post_type'              => 'konzert',
	'post_status'            => 'publish',
	'meta_query'			 => array(
		array(
			'key' => 'datum_und_uhrzeit_ende',
			'compare' => '>',
			'value' => $timenow,
		)
	)
);

// The Query
$query_konzert = new WP_Query( $args );



// The Loop
if ( $query_konzert->have_posts() ) {
?>

<section id="konzerte">

	<div class="container-fluid">

		<div class="row justify-center">

						<?php

							while ( $query_konzert->have_posts() ) {
								$query_konzert->the_post();
								
								get_template_part('views/content-konzert', 'front');
							}
						?>


		</div><!-- .row -->

	</div><!-- .container -->

</section>

<?php

} //endif

// Restore original Post Data
wp_reset_postdata();
?>

