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

  <div class="outer-container">
    <nav id="sidebar" class="sidebar-offcanvas" role="navigation">
      <!-- <span class="navtoggle glyphicon glyphicon-remove pull-left white" data-toggle="collapse" data-target="#sidebar"></span> -->
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav><!-- #site-navigation -->

    <header id="masthead" class="site-header" role="banner" data-spy="affix" data-offset-top="60">
      <div class="site-branding col-xs-10 col-sm-9">
        <a href="/" title="home">
          <?php add_logo_svg(array(
              'textcolor' => '#fff',
              'labcolor' => '#000',
              'bgcolor' => '#fff',
            )
          ); ?>
        </a>

        <?php if (!is_front_page()) { ?>
          <span class="page-title"><?php echo wp_title(''); ?></span>
        <?php } ?>

      </div><!-- .site-branding -->

      <div class="main-navigation col-xs-2 col-sm-3 pull-right">
        <span class="navtoggle menu-toggle glyphicon glyphicon-menu-hamburger" aria-controls="primary-menu" aria-expanded="false" title="Primary Menu"></span>
      </div>
    </header><!-- #masthead -->
