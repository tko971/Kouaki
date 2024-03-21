<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
                    
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> "alt="logo Fleurs d'oranger & chats errants" style="position: absolute;" data-bottom-top="transform:translate3d(0, 0px, 0)" data-top-bottom="transform:translate3d(0, -200px, 0)">
                    <video id="background-video" autoplay loop muted>
                      <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/Koukaki.mp4'; ?>" type="video/mp4">
                    </video>
        </section>
        <section id="story" class="story">
            <h2><span>L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <?php get_template_part( './carrousel' ); ?>
                </div>
            </article>
            <article id="place">
                <img src="<?=get_stylesheet_directory_uri() . '/assets/images/Studio_Koukaki-image_place.png'?>">
                <section class="nuages">
                <img class="petitnuage" src="<?=get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'?>">
                <img class="grosnuage" src="<?=get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'?>">
                </section>
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    
                </div>

            </article>
        </section>


        <section id="studio">
            <h2><span>Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
    </main><!-- #main -->

<?php
get_footer();
