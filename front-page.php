<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc">1</div>
    <div class="animation__bloc">2</div>
    <div class="animation__bloc">3</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">5</div>
</section>

    <h1>Page d'accueil</h1>

    <h2>Nouveaux cours :</h2>

    <div class="nouveau__cours">
        <?php if (have_posts()): the_post(); ?>
            <?php
                $titre = get_the_title();
                $titreFiltreCours = substr($titre, 7, -6);
                $nbHeures = substr($titre, -6);
                $sigleCours = substr($titre, 0, 7);
                $descCours = get_the_content();
                ?>
            
            <?php the_post_thumbnail("thumbnail"); ?>
                <h3 class="cours__titre">
                    <a href="<?php echo get_permalink(); ?>">
                        <?= $titreFiltreCours; ?>
                    </a>
                </h3>
                <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                <p class="cours__sigle"><?= $sigleCours; ?> </p>
                <p class="cours__desc"> <?= $descCours; ?></p>  
  
        <?php endif ?>
    </div>
   
</main>
<?php get_footer() ?>