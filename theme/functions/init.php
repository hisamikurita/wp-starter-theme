<?php

/**
 * WPの初期スタイルの削除
 */

remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_head', 'wp_oembed_add_discovery_links');

remove_action('wp_print_styles', 'print_emoji_styles', 10);
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');

add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('classic-theme-styles');
}, 20);

add_action('wp_footer', function () {
  wp_dequeue_style('core-block-supports');
});

/**
 * 投稿編集画面で不要な項目を非表示にする
 */

add_action('init', function () {
  remove_post_type_support('post', 'excerpt'); // 抜粋
  remove_post_type_support('post', 'trackbacks'); // トラックバック
  remove_post_type_support('post', 'comments'); // ディスカッション
});

// アイキャッチを有効化
add_theme_support('post-thumbnails');

// ファイルのアップロード上限を変更
// @ini_set('upload_max_size', '30M');
// @ini_set('post_max_size', '30M');
// @ini_set('max_execution_time', '300');
