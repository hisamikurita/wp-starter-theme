<?php

// $dev = getenv('DEV');
// var_dump(wp_get_environment_type());

//develop mode config
define("IS_VITE_DEVELOPMENT", true);

define('VITE_SERVER', 'http://localhost:3000');

/**
 * @return ローカル環境と本番環境のJSのパスを返す
 */
function vite_src_js($name)
{
  if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {
    // develop mode
    return VITE_SERVER . '/assets/' . $name;
  } else {
    // production mode
    return URL_JS . $name;
  }
}

/**
 * @return ローカル環境と本番環境のCSSのパスを返す
 */
function vite_src_css($name)
{
  if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {
    // develop mode
    return VITE_SERVER . '/assets/css/' . $name;
  } else {
    // production mode
    // return URL_CSS . $name;
  }
}

/**
 * @return ローカル環境と本番環境のSTATICのパスを返す
 */
function vite_src_static($name)
{
  if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {
    // develop mode
    return VITE_SERVER . '/assets/static/' . $name;
  } else {
    // production mode
    return URL_STATIC . $name;
  }
}

/**
 * @return ローカル環境と本番環境のIMAGESのパスを返す
 */
function vite_src_images($name)
{
  if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {
    // develop mode
    return VITE_SERVER . '/assets/images/' . $name;
  } else {
    // production mode
    return URL_STATIC . $name;
  }
}
