<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head() ?>
    <?php show_admin_bar(true); ?>
</head>
<body  <?php body_class("site"); ?>>
<header class="site__header">
    <div class="header__texte">
    <h1 class="header__titre">
        <?= get_custom_logo(); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">    
            <?php bloginfo('name'); ?>
        </a>
    </h1>
    <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    </div>
    <section class="util">
        <?= get_sidebar('entete_1'); ?>    
        <?php // get_search_form(); ?>
    </section>
</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger">
        <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#ddd"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </label>
    <?php 
    $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#3F4238"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path></svg> ';

    wp_nav_menu(array("menu"=>"menu_principal",
                            "container"=>"nav",
                            "container_class" => "site__header__menu",
                            "menu_class" => "site__header__menu__ul",
                            "link_before" => $icone));
    ?>
</section>
