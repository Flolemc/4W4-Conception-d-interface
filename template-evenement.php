<?php /* Template Name: Évenement */ ?>
<?php get_header() ?>
<main class="site__main">

     <?php if (have_posts()) : the_post(); ?>
          <h1 class="evenement__titre"><?php the_title() ?></h1>

          <div class="evenement__info">

          <div class="evenement__img">
          <?php
          $image = get_field('image');
          if (!empty($image)) : ?>
               <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
          <?php endif ?>
          </div>

          <h2>L'endroit</h2>
          <p><?php the_field('endroit') ?></p>
          <h2>Organisé par : <?php the_field('organisateur') ?></h2>
          <p>Date de l'evenement : <?php the_field('date') ?></p>
          <p>Heure de l'evenement : <?php the_field('heure') ?></p>
          <p>Description de l'evenement : <?php the_field('resume') ?></p>
          <?php the_content() ?>
          
          </div>

     <?php endif ?>
</main>
<?php get_footer() ?>