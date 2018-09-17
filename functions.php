<?php
/**
 *
 * This theme uses PSR-4 and OOP logic instead of procedural coding
 * Every function, hook and action is properly divided and organized inside related folders and files
 * Use the file `config/Custom/Custom.php` to write your custom functions
 *
 * @package awps
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'Awps\\Init' ) ) :
	Awps\Init::register_services();
endif;

// Custom Excerpt function for Advanced Custom Fields
function nachlese_excerpt() {
    global $post;
    $text = get_field('nachlese'); //Replace 'your_field_name'
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]&gt;', ']]&gt;', $text);
        $excerpt_length = 55; // 20 words
        $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    return apply_filters('the_excerpt', $text);
}

add_shortcode( 'foerderverein-loop', 'get_foerderverein_loop');

function get_foerderverein_loop() {
    ob_start();
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

    <section id="aktuelles-jubilaum" class="alignfull">

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

    return ob_get_clean();
}

		
