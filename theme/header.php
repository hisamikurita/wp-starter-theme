<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= vite_src_css('app.scss') ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('./partials/global-header') ?>