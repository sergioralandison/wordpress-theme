<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?> <!--contrôle s'il y a bien quelque chose à afficher-->

    	<h1><?php the_title(); ?></h1> <!--affiche le titre-->

    	<?php the_content(); ?> <!--affiche le contenu-->

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
