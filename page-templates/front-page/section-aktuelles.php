<?php
/**
*	@package ljc
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



// The Loop
if ( $query_aktuelles->have_posts() ) {
?>

<section id="aktuelles">

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

