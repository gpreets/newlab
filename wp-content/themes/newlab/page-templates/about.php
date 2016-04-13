<?php
/**
 * Template Name: About Us
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newlab
 */

get_header(); ?>
	<div id="primary" class="content-area about">
		<main id="main" class="site-main container-fluid" role="main">
			<div class="intro-container intro white" >
        <img class="intro-image" alt="1137Lab" src="<?php bloginfo("template_directory");?>/images/m-welcome-banner.jpg" title="Homepage Welcome Banner" />
        <div class="intro-hed"><h1>OUR STRENGTH IS THE PEOPLE WE WORK WITH AWESOME CREATIVE PROACTIVE AND EXPERTS IN EACH ONES FIELD</h1></div>
      </div>

      <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile; // End of the loop.
      ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
