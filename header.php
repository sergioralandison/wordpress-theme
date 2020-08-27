<!DOCTYPE html>
<html <?php language_attributes();?>> <!--défini automatiquement la langue du document et modifiable dans les réglages WordPress : Réglages > Général > Langue du site-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>"> <!--défini l'encodage du site, par défaut c'est UTF-8-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <?php wp_head() ?> <!--déclare le chargement des scripts et des styles-->
</head>

<body <?php body_class(); ?>> <!--permet d'obtenir des noms de classe CSS en fonction de la page visitée-->

  <?php wp_body_open(); ?>

  <header class="header">
   <a href="<?php echo home_url( '/' ); ?>">
     <img src="<?php echo get_template_directory_uri(); ?>/images/www.png" alt="Logo"> <!--donne l'adresse absolue-->
   </a>
 </header>
