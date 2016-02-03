<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newlab
 */

get_header(); ?>

<div class="outer-container">
	<div class="intro-container">
		<span class="intro-image">
			<img alt="" src="<?php bloginfo("template_directory");?>/images/home-welcome-banner.jpg" title="Homepage Welcome Banner" />
		</span>
		<h1>welcome to the creative <span class="strike">agency</span> lab</h1>
	</div>
	<div class="container-fluid section-one">
		<div class="row flex-box">
			<div class="col-sm-6 col-left">
				<div class="row">
					<div class="text-over-img col-sm-5 text-right">
						<h3>CONSULTANCY OFFICE</h3>
						<p> A new approach to old methods – 1337Lab draws on years’ of experience in advancing clients’ business technology and management processes…</p>
						<a class="btn btn-primary-outline" href="?page_id=192" class="white">learn more</a>
	                </div>
					<img alt="" src="<?php bloginfo("template_directory");?>/images/buisness-woman.jpg" title="Business Woman" />
				</div>
			</div>
			<div class="col-sm-6 col-right">
				<div class="row">
					<div class="col">Column on right top</div>
					<div class="col">
						<div class="col-xs-6 bg-black">
							Col half
						</div>
						<div class="col-xs-6">
							Col half
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
