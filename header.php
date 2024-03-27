<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line l1"></span>
                <span class="line l2"></span>
                <span class="line l3"></span>
            </button>
            <ul>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            </ul>
            
		</nav><!-- #site-navigation -->
        <div class="navhover">
          <section class="sectionun">
            <img class="orchid" src="<?=get_stylesheet_directory_uri() . '/assets/images/orchid.png'?>">
            <img class="catviolet" src="<?=get_stylesheet_directory_uri() . '/assets/images/catviolet.png'?>">
            <img class="flower" src="<?=get_stylesheet_directory_uri() . '/assets/images/flower.png'?>">
            <img class="catroux" src="<?=get_stylesheet_directory_uri() . '/assets/images/catroux.png'?>">
            
          </section>
          <div class="sectiondeux">

            <img class="loghover" src="<?=get_stylesheet_directory_uri() . '/assets/images/miniLogo.png'?>">
            <ul class="liensmenu">
              <li><a href="#story">Histoire</a></li>
              <li><a href="#characters">Personnages</a></li>
              <li><a href="#place">Lieu</a></li>
              <li><a href="#studio">Studio Koukaki</a></li>
            </ul>
            <p>STUDIO KOUKAKI</p> 
          </div>
          <section class="sectiontrois">
            <img class="sunflower" src="<?=get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'?>">
            <img class="randum" src="<?=get_stylesheet_directory_uri() . '/assets/images/random_flower.png'?>">
            <img class="chatnoir" src="<?=get_stylesheet_directory_uri() . '/assets/images/chatnoir.png'?>">
            <img class="hibiscus" src="<?=get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'?>">
          </section>
        </div>
	</header><!-- #masthead -->
