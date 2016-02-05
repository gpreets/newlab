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

	<div class="container-fluid sec-style-one">
		<div class="col-md-6 col-left sec-consultancy">
			<div class="col sec-details text-over-img white">
				<h3>CONSULTANCY OFFICE</h3>
				<p> A new approach to old methods – 1337Lab draws on years’ of experience in advancing clients’ business technology and management processes…</p>
				<a class="btn btn-primary-outline" href="?page_id=192" class="white">learn more</a>
            </div>
			<img alt="" src="<?php bloginfo("template_directory");?>/images/buisness-woman.jpg" title="Business Woman" />
		</div>

		<div class="col-md-6 col-right">
			<div class="col sec-newsletter text-center">
				<div class="sec-details">
					<h3 class="black">SUBSCRIBE TO OUR NEWSLETTER</h3>
					<p class="black">Get news and updates, business oriented tips for entrepreneurs and leaders. We deliver a weekly update with all the insights , controversies and news that will help you take better desicions.</p>
					<a href="?page_id=180" class="btn btn-primary-outline black">SUBSCRIBE </a>
				</div>
			</div>

			<div class="col">
				<div class="col-md-6 text-center sec-about white">
					<div class="sec-details">
	                    <h3>about us</h3>
	                    <p>Meet and Greet, Special Events, Premieres, Exclusive Merchandising and more awesome stuff.</p>
	                    <a href="#" class="btn btn-primary-outline white">learn more</a>
	                </div>
				</div>

				<div class="col-md-6 sec-development white">
					<img src="http://staging.1337lab.io/wp-content/uploads/2015/06/development-core-bg2.jpg" alt="" title="">
					<div class="sec-details text-over-img text-center">
						<h3>DESIGN AND DEVELOPMENT CORE</h3>
						<p>This is where the code is written, and the choice of fonts and colors is put together. At the end without our developers…</p>
						<a href="?page_id=201" class="btn btn-primary-outline white">Learn More</a>
					</div>
                </div>
			</div>
		</div>
	</div>


</div>

<?php
get_footer();
