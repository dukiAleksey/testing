<?php 
/**
 * Header Template
 *
 * This file is responsible for generating the 
 * top-most html for all public-facing views.
 * 
 * @package      Test
 * @author       Alex Duki <duki.aleksey@gmail.com>
 * @copyright    Copyright (c) 2015, Alex Duki
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since        0.1
 */
  ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <?php wp_head(); ?>

  </head>

  <body <?php  body_class(); ?>>
    <header>
  <h1><a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
</header>