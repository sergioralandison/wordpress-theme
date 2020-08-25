<?php

  function sg_theme_supports () {
    add_theme_support( 'title-tag');
  }

  function sg_register_assets () {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
  }

  function sg_title_separator () {
    return '|';
  }

  add_action('after_setup_theme', 'sg_theme_supports');
  add_action('wp_enqueue_scripts', 'sg_register_assets');
  add_filter('document_title_separator', 'sg_title_separator');

?>
