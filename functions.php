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
		
