<?php
function load_stylesheets() {
    wp_register_style("mainstyles", get_template_directory_uri() . "/styles/main-styles.css", array(), 1, "all" );
    wp_enqueue_style("mainstyles");
    if(is_front_page()) {
        wp_register_style("frontstyles", get_template_directory_uri() . "/styles/front-page.css", array(), 1, "all" );
        wp_enqueue_style("frontstyles");
    }
}
function load_scripts() {
    wp_register_script("mainscripts", get_template_directory_uri() . "/scripts/main-scripts.js", array(), 1, true);
    wp_enqueue_script("mainscripts");
    if(is_front_page()) {
        wp_register_script("frontscripts", get_template_directory_uri() . "/scripts/front-page.js", array(), 1, true);
        wp_enqueue_script("frontscripts");
    }
}
add_action("wp_enqueue_scripts", "load_scripts");
add_action("wp_enqueue_scripts", "load_stylesheets");

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>