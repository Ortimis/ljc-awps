<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package awps
 */

get_header(); ?>

<div class="container">

	<div class="row justify-center">

		<div class="col-sm-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<h1>Sorry, diese Seite gibt es nicht!</h1>
					<p>Und jetzt am besten schnell hier weg, bevor du das Internet noch kaputt machst.</p>

					<?php get_search_form(); ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();
