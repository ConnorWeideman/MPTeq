<?php
function load_stylesheets() {
    wp_register_style("mainstyles", get_template_directory_uri() . "/styles/main-styles.css", array(), 1, "all" );
    wp_enqueue_style("mainstyles");
    if(is_front_page()) {
        wp_register_style("frontstyles", get_template_directory_uri() . "/styles/front-page.css", array(), 1, "all" );
        wp_enqueue_style("frontstyles");
    }
    if(is_page("contact")) {
        wp_register_style("contactstyles", get_template_directory_uri() . "/styles/contact.css", array(), 1, "all" );
        wp_enqueue_style("contactstyles");
    }
    if(is_page("news")) {
        wp_register_style("newsstyles", get_template_directory_uri() . "/styles/news.css", array(), 1, "all" );
        wp_enqueue_style("newsstyles");
    }
    if(is_page("projects")) {
        wp_register_style("projectstyles", get_template_directory_uri() . "/styles/projects.css", array(), 1, "all" );
        wp_enqueue_style("projectstyles");
    }
    if(is_page("products")) {
        wp_register_style("productstyles", get_template_directory_uri() . "/styles/products.css", array(), 1, "all" );
        wp_enqueue_style("productstyles");
    }
    if(is_page("about")) {
        wp_register_style("aboutstyles", get_template_directory_uri() . "/styles/about.css", array(), 1, "all" );
        wp_enqueue_style("aboutstyles");
    }
    if(is_page_template("product.php")) {
        wp_register_style("singleproductstyles", get_template_directory_uri() . "/styles/product.css", array(), 1, "all" );
        wp_enqueue_style("singleproductstyles");
    }
}
function load_scripts() {
    wp_register_script("mainscripts", get_template_directory_uri() . "/scripts/main-scripts.js", array(), 1, true);
    wp_enqueue_script("mainscripts");
    if(is_front_page()) {
        wp_register_script("frontscripts", get_template_directory_uri() . "/scripts/front-page.js", array(), 1, true);
        wp_enqueue_script("frontscripts");
    }
    if(is_page("contact")) {
        wp_register_script("contactscript", get_template_directory_uri() . "/scripts/contact.js", array(), 1, true );
        wp_enqueue_script("contactscript");
    }
    if(is_page("news")) {
        wp_register_script("newsscript", get_template_directory_uri() . "/scripts/news.js", array(), 1, true );
        wp_enqueue_script("newsscript");
    }
    if(is_page("projects")) {
        wp_register_script("projectscript", get_template_directory_uri() . "/scripts/projects.js", array(), 1, true );
        wp_enqueue_script("projectscript");
    }
    if(is_page("products")) {
        wp_register_script("productscript", get_template_directory_uri() . "/scripts/products.js", array(), 1, true );
        wp_enqueue_script("productscript");
    }
    if(is_page("about")) {
        wp_register_script("aboutscript", get_template_directory_uri() . "/scripts/about.js", array(), 1, true );
        wp_enqueue_script("aboutscript");
    }
    if(is_page_template("product.php")) {
        wp_register_script("singleproductscript", get_template_directory_uri() . "/scripts/product.js", array(), 1, true );
        wp_enqueue_script("singleproductscript");
    }
}
add_action("wp_enqueue_scripts", "load_scripts");
add_action("wp_enqueue_scripts", "load_stylesheets");

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>