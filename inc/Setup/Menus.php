<?php

namespace Awps\Setup;

/**
 * Menus
 */
class Menus
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'after_setup_theme', array( $this, 'menus' ) );
    }

    public function menus()
    {
        /*
            Register all your menus here
        */
        register_nav_menus(array(
            'primary' => esc_html__( 'Primary', 'awps' ),
            'footer1' => esc_html__( 'Footer1', 'awps'),
            'footer2' => esc_html__( 'Footer2', 'awps'),
            'footer3' => esc_html__( 'Footer3', 'awps'),
            'footer4' => esc_html__( 'Footer4', 'awps'),
        ));
    }
}
