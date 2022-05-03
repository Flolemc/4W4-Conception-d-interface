<footer class="site__footer">

<div class="site__footer__colonne">
    <section class="site__footer__colonne__adresse"><?php get_sidebar('footer_colonne_1'); ?></section>
    <section class="site__footer__colonne__article"><?php get_sidebar('footer_colonne_2'); ?></section>
    <section class="site__footer__colonne__lien"><?php get_sidebar('footer_colonne_3'); ?></section>
</div>

<div class="site__footer__rangee">
    <section class="site__footer__rangee__recherche"><?php get_search_form(); ?></section>
    <?php
            wp_nav_menu(array(  "menu" => "Footer",
                                "container" => "nav",
                                "container_class" => "site__footer__rangee__menu",
                                "menu_class" => "menu_footer")); 
    ?>
    <section class="site__footer__rangee__sociaux"><?php get_sidebar('footer_ligne_1'); ?></section>
    <section class="site__footer__rangee__droits">&copy; Collège de Maisonneuve - Tous droits réservés</section>
    <section class="site__footer__rangee__auteur">Thème réalisé par Florence Lemieux Cayer</section>
</div>

<div class="boite__modale">
    <button class="boite__modale__ferme">X</button>
    <article class="boite__modale__text">
        Ceci est un test de modal le fonctionnement d'une boite de dialogue
    </article>
</div>
<?php wp_footer(); ?>
</body>
</html>