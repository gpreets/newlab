<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newlab
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <?php require get_template_directory() . '/page-templates/includes/tile.php'; ?>
  <?php require get_template_directory() . '/page-templates/includes/logo-svg.php'; ?>

  <header id="masthead" class="site-header" role="banner" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
    <div class="site-branding col-xs-6">
      <?php add_logo_svg(array(
          'textcolor' => '#fff',
          'labcolor' => '#000',
          'bgcolor' => '#fff',
        )
      ); ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation col-xs-6" role="navigation">
      <span class="menu-toggle pull-right glyphicon glyphicon-menu-hamburger" aria-controls="primary-menu" aria-expanded="false" title="Primary Menu"></span>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->
