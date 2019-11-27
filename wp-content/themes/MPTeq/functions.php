<?php
function load_stylesheets() {
    wp_register_style("mainstyles", get_template_directory_uri() . "/styles/main-styles.css", array(), 1, "all" );
    wp_enqueue_style("mainstyles");
}
function load_scripts() {
    wp_register_script("mainscripts", get_template_directory_uri() . "/scripts/main-scripts.js", array(), 1, true);
    wp_enqueue_script("mainscripts");
}
add_action("wp_enqueue_scripts", "load_scripts");
add_action("wp_enqueue_scripts", "load_stylesheets");
add_theme_support( 'post-thumbnails' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>