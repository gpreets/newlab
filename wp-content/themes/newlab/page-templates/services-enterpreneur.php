<?php
/**
 * Template Name: services-enterpreneur
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
		<main id="main" class="site-main container-fluid services" role="main">
			<div class="outer-container">
				<div class="col-md-6 col-left">
					<img alt="" src="<?php bloginfo("template_directory");?>/images/orange1.jpg" title="orange1-bg" />
				</div>
				<div class="col-md-6 col-right text-center">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="orange">ENTREPRENEUR WELCOME</h1>
						<h4>A list of servicers of what we can do?</h4>
						<p class="text-left">Your idea’s from whiteboard to market. Its simply – You have an idea we help you build it. Today there is more and more people looking to build their own technology business, not all have the necessary skills or capital to build their ideas.</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="text-over-img ">
						<div class="col-left col-md-3 col-md-offset-2 text-center">
						<h1>WHY WORK WITH US IN</h1>
						<h1 class="orange">"THE SERVICE"</h1>
						<p>We can help vet your ideas, see if there is a market, and offer C-Level services. We can even help you in raising capital to take your business to the next level.</p>
					</div>
					</div>
					<span><img alt="" src="<?php bloginfo("template_directory");?>/images/orange.jpg" title="orange-bg" /></span>

				</div>
				<div class="col-md-12 service-footer">
					<div class="text-over-img text-center">
						<h3>CREATIVE PROCESS STARTS</h3>
						<a class="btn-primary-outline black" href="">HERE</a>
					</div>
					<span><img alt="" src="<?php bloginfo("template_directory");?>/images/footer-top-bg.png" title="footer-bg" /></span>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
