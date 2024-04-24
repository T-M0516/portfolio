<?php
function add_files()
{
    // CSSstyle
    wp_enqueue_style('css-style', get_stylesheet_uri());

    // progressbar
    wp_enqueue_script('progressbar', get_theme_file_uri() . '/js/progressbar.js', array('jquery'), '', true);

    // script
    wp_enqueue_script('script', get_theme_file_uri() . '/js/script.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'add_files');

function theme_setup()
{
    // titleタグ
    add_theme_support('title-tag');

    // アイキャッチ
    add_theme_support('post-thumbnails');

    // menu
    register_nav_menus(
        array(
            'main-menu' => 'メインメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');
