<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bn_title(); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
    <link href="<?php timestamped_stylesheet(); ?>" rel="stylesheet" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/finn.jpg" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/finn.jpg" type="image/x-icon">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="container">
      <header class="header">
        <a href="/"><?php bloginfo('title'); ?></a>
      </header>
      <nav class="nav">
        <?php get_template_part('nav'); ?>
      </nav>
