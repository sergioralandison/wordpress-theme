<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link rel="stylesheet" href="style.css">
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>
  <header>
    <nav class="container-fluid navbar navbar-expand-lg">
      <div class="container">
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <a class="navbar-brand" href="#">Logo</a>
          <div class="navbar-nav">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Articles</a>
            <a class="nav-link" href="#">Contact</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/road.jpg" class="img-fluid" alt="road">
    </div>

  </header>




  <div class="container">
