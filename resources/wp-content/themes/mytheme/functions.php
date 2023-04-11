<?php

// 初期設定の削除

remove_filter('wp_robots', 'wp_robots_max_image_preview_large');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_print_styles', 'print_emoji_styles', 10);
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');

add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('classic-theme-styles');
}, 20);

add_action('wp_footer', function () {
  wp_dequeue_style('core-block-supports');
});
