<?php get_header() ?>
<main class="site__main">

<h1>Accueil</h1>

<h2>Nos formations</h2>
<section class="animation">
    <div class="animation__bloc"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="white"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"></path></svg></div>
    <div class="animation__bloc"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="white"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg></div>
    <div class="animation__bloc"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="white"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
    <div class="animation__bloc"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="white"><path d="M0 0v24h24V0H0zm23 16c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V8c0-1.1.9-2 2-2h18c1.1 0 2 .9 2 2v8z" fill="none"></path><path d="M21 6H3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-10 7H8v3H6v-3H3v-2h3V8h2v3h3v2zm4.5 2c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm4-3c-.83 0-1.5-.67-1.5-1.5S18.67 9 19.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path></svg></div>
    <div class="animation__bloc"><svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="white"><path d="M0 0h24v24H0z" fill="none"></path><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z"></path></svg></div>
</section>
<?php 
        wp_nav_menu(array("menu"=>"menu_accueil",
                            "container"=>"nav"));
?>

<div class="description__accueil">
    <h2>Les cours du TIM</h2>
    <p>Ce programme mène à un diplôme d’études collégiales permettant d’acquérir les compétences pour travailler dans l’univers du Web, des technologies mobiles, du jeu vidéo et des médias numériques, tant sur les plans de l’analyse, de la planification, de la conception que de la réalisation. L’apprentissage de différents langages de programmation fait aussi partie de cette formation.</p>
</div>


   
</main>
<?php get_footer() ?>