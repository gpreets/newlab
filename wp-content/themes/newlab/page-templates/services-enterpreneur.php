<?php
/**
 * Template Name: Enterpreneur Welcome
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
	<div id="primary" class="content-area services">
		<main id="main" class="site-main container-fluid" role="main">

			<div class="container-fluid section">
				<div class="col-md-6">
					<img alt="" src="<?php bloginfo("template_directory");?>/images/bg-orange-w-logo.jpg" title="" />
				</div>
				<div class="col-md-6 text-center sec-entrepreneur">
					<div class="sec-details text-over-img">
						<h1 class="header orange">ENTREPRENEUR WELCOME</h1>
						<h3>A list of services of what we can do?</h3>
						<p>Your idea’s from whiteboard to market. Its simply – You have an idea we help you build it. Today there is more and more people looking to build their own technology business, not all have the necessary skills or capital to build their ideas.</p>
					</div>
				</div>
			</div>

			<div class="container-fluid section sec-work">
				<div class="sec-details col-sm-6 text-over-img">
					<h2>WHY WORK WITH US?</h2>
					<h3 class="orange">"THE SERVICE"</h3>
					<p>We can help vet your ideas, see if there is a market, and offer C-Level services. We can even help you in raising capital to take your business to the next level.</p>
				</div>
				<span><img alt="" src="<?php bloginfo("template_directory");?>/images/bg-orange-trails.jpg" title="orange-bg" /></span>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
