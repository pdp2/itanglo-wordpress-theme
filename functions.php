<?php

// Allows you to pick a featured image for posts
add_theme_support( 'post-thumbnails' );

add_action('wp_enqueue_scripts', 'itanglo_scripts');

function itanglo_scripts() {
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;0,600;0,700;1,400');
}