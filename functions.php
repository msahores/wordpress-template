<?php 
    function awesome_script_enqueue(){
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
    }

    add_action( 'wp_enqueue_scripts',  'awesome_script_enqueue');

    function awesome_theme_setup(){
        add_theme_support( 'menus' ); //adds menu's option in the admin settings
        register_nav_menu( 'primary', 'Primary Header Nav' ); // Registers one type of menu
        register_nav_menu( 'secondary', 'Secondary Header Nav' ); // Registers one type of menu
    }

    add_action('init', 'awesome_theme_setup' ); //other option: after_setup_theme 
?>