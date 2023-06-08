<?php

/**
 * variables
 */

// assets
define('URL_ASSETS', get_template_directory_uri() . '/assets/');
define('URL_CSS', URL_ASSETS . 'css/');
define('URL_JS', URL_ASSETS . 'js/');
define('URL_STATIC', URL_ASSETS . 'static/');
define('URL_IMAGES', URL_ASSETS . 'images/');

// url
define('URL_HOME', home_url('/'));
define('URL_ABOUT', URL_HOME . 'about/');
define('URL_ARCHIVE', URL_HOME . 'archive/');

// external url
define('URL_CONTACT', 'https://liginc.co.jp/contact');

// ローカル環境ではlocal、本番環境ではproductionを返す
define('IS_TYPE', wp_get_environment_type());

// ローカル環境のViteサーバーのURL
define('VITE_SERVER', 'http://localhost:3000');
