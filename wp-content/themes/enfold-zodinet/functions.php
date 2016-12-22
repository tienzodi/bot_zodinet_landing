<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Add style from parent theme
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function add_my_script() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri().'/js/main.js',
        array('jquery')
    );

    wp_enqueue_script(
        'particles-script',
        get_stylesheet_directory_uri().'/js/libs/particles.min.js',
        array('jquery')
    );
}
add_action( 'wp_enqueue_scripts', 'add_my_script' );
 
// Add "custom CSS" field for Enfold builder elements
add_theme_support('avia_template_builder_custom_css');

//Disable themes, plugins and WP core update notifications
function remove_core_updates(){
	global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

// Add language file for Enfold theme
function avia_lang_setup()
{
 $lang = get_stylesheet_directory()  . '/languages';
 load_child_theme_textdomain('avia_framework', $lang);
}
add_action('after_setup_theme', 'avia_lang_setup');

?>
