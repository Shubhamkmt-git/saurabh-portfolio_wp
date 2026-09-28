<?php
/**
 * Saurabh Portfolio Theme Functions
 */

function saurabh_portfolio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'saurabh_portfolio_setup');

function saurabh_portfolio_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=Roboto+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap', array(), null);
    wp_enqueue_style('saurabh-tailwind', get_template_directory_uri() . '/style/output.css', array(), '1.0.0');
    wp_enqueue_script('saurabh-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'saurabh_portfolio_scripts');
