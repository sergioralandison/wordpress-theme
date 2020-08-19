<?php
  function sg_theme_supports () {
    add_theme_support('title-tag');
  }

  function sg_register_assets(){
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_deregister_script('jquery');
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
  }

  function sg_document_title_parts($title) {
    unset($title['tagline']);
    return $title;
  }

  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }

  add_action( 'init', 'register_my_menu' );
  add_action('after_setup_theme', 'sg_supports');
  add_action('wp_enqueue_scripts', 'sg_register_assets');
  add_filter('document_title_parts', 'sg_document_title_parts');
  add_theme_support('post-thumbnails');
?>
