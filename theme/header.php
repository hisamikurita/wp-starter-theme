<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class("bg-black p-[30px] font-yugo text-[16px] text-white"); ?>>
  <?php get_template_part('./partials/global-header') ?>