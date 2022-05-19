<?php /* Template Name: Atelier */ ?>
<?php get_header() ?>
<main class="site__main">

     <?php if (have_posts()) : the_post(); ?>
          <h1 class="atelier__titre"><?php the_title() ?></h1>

          <div class="atelier__info">

          <h2>Description</h2>
          <p><?php the_field('description') ?></p>
          <h2>Animateur : <?php the_field('organisateur') ?></h2>
          <p>Date de l'atelier : du <?php the_field('date_debut') ?> au <?php the_field('date_fin') ?>
           du <?php the_field('jours') ?> de <?php the_field('heure_debut') ?> à <?php the_field('heure_fin') ?></p>
          <p>Durée de la séance : <?php the_field('duree') ?>h</p>
          <p>Local : <?php the_field('local') ?></p>
          <?php the_content() ?>
          
          </div>

     <?php endif ?>
</main>
<?php get_footer() ?>