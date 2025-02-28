<?php
function my_custom_theme_setup() {
    // 支持特色图像
    add_theme_support('post-thumbnails');

    // 注册导航菜单
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// 加载样式表和脚本
function my_custom_theme_scripts() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
    wp_enqueue_script('my-custom-theme-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');



