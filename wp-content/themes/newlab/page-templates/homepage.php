<?php
/**
 * Template Name: Homepage
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
	<div id="primary" class="content-area">
		<main id="main" class="site-main container-fluid" role="main">

			<div class="intro-container intro white" >
				<img class="intro-image" alt="1137Lab" src="<?php bloginfo("template_directory");?>/images/m-welcome-banner.jpg" title="Homepage Welcome Banner" />
				<h1>welcome to the creative <span class="strike">agency</span> lab</h1>
			</div>

			<div class="container-fluid section">
				<!-- <div class="col-md-6 white class">
					<div class="sec-details text-over-img">
						<h3>CONSULTANCY OFFICE</h3>
						<p>A new approach to old methods – 1337Lab draws on years of experience in advancing clients’ business technology and management processes…</p>
						<div><a class="btn btn-primary-outline white" href="#">learn more</a></div>
					</div>
					<span><img alt="" src="http://localhost:8888/newlab/wp-content/uploads/2016/02/m-buisness-woman.jpg"></span>
				</div> -->

				<?php add_tile(array(
						'class' => 'col-md-6 white',
						'textClass' => 'text-over-img',
						'title'  => 'CONSULTANCY OFFICE',
						'content' => '<p>A new approach to old methods – 1337Lab draws on years of experience in advancing clients’ business technology and management processes…</p>',
						'btnText' => 'learn more',
						'href' => '#',
						'image' => 'http://localhost:8888/newlab/wp-content/themes/newlab/images/m-buisness-woman.jpg',
					)
				); ?>

				<div class="col-md-6 col-right">
					<div class="class black cols bg-dark-gray text-center">
						<div class="sec-details textclass">
							<h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
							<p>Get news and updates, business oriented tips for entrepreneurs and leaders. We deliver a weekly update with all the insights , controversies and news that will help you take better desicions.</p>
							<div><a class="btn btn-primary-outline black" href="#">SUBSCRIBE</a></div>
						</div>
					</div>

					<div class="cols white">
						<div class="col-md-6 white bg-nero-gray">
							<div class="sec-details textclass">
								<h3>ABOUT US</h3>
								<p>Meet and Greet, Special Events, Premieres, Exclusive Merchandising and more awesome stuff.</p>

								<div><a class="btn btn-primary-outline white" href="#">learn more</a></div>
							</div>
							<span><img alt="" src=""></span>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid section">
				<div class="col-md-6  white">
					<div class="sec-details text-over-img">
						<h3>DESIGN AND DEVELOPMENT CORE</h3>
						<p>This is where the code is written, and the choice of fonts and colors is put together. At the end without our developers…</p>

						<div><a class="btn btn-primary-outline " href="#">Learn More</a></div>
					</div>
					<span><img alt="" src="http://localhost:8888/newlab/wp-content/uploads/2016/02/development-core-bg.jpg"></span>
				</div>
				<div class="col-md-6  class">
					<span><img alt="" src="http://localhost:8888/newlab/wp-content/uploads/2016/02/developers.jpg"></span>
				</div>
			</div>


			<div class="container-fluid section">
				<div class="col-md-6  class">
					<div class="sec-details text-over-img">
						<h3></h3>
						<div><a class="btn btn-primary-outline " href=""></a></div>
					</div>
					<span><img alt="" src="http://localhost:8888/newlab/wp-content/uploads/2016/02/building-img.jpg"></span>
				</div>
				<div class="col-md-6 black class">
					<div class="sec-details text-over-img">
						<h3>ENTREPRENEUR WELCOME</h3>
						<p>your idea’s from whiteboard to market.Its simply – You have an idea we help you build it. Today there is more and more people looking to build their own technology business…</p>

						<div><a class="btn btn-primary-outline black" href="#">learn more</a></div>
					</div>
					<span><img alt="" src="http://localhost:8888/newlab/wp-content/uploads/2016/02/core-bg-white.jpg"></span>
				</div>
			</div>


			<h3 class="text-center">WHAT WE DO</h3>
			<div class="container-fluid section">
				<div class="col-md-4 black class">
					<div class="sec-details textclass">
						<?php add_logo_svg(array(
								'bgcolor' => '#FF8400',
							)
						); ?>
						<h3 class="orange">ENTREPRENEUR WELCOME</h3>
						<p>Your idea’s from whiteboard to market.Its simply – You have an idea we help you build it. Today there is more and more people looking to build their own technology business, not all have the necessary skills …</p>
						<div><a class="btn btn-primary-outline black" href="#">learn more</a></div>
					</div>
					<span><img alt="" src=""></span>
				</div>
				<div class="col-md-4 black class">
					<div class="sec-details textclass">
						<?php add_logo_svg(array(
								'bgcolor' => '#14519A',
							)
						); ?>
						<h3 class="blue">ENTREPRENEUR WELCOME</h3>
						<p>Your idea’s from whiteboard to market.Its simply – You have an idea we help you build it. Today there is more and more people looking to build their own technology business, not all have the necessary skills …</p>
						<div><a class="btn btn-primary-outline black" href="#">learn more</a></div>
					</div>
					<span><img alt="" src=""></span>
				</div>
				<div class="col-md-4 black class">
					<div class="sec-details textclass">
						<?php add_logo_svg(array(
								'bgcolor' => '#A6CE37',
							)
						); ?>
						<h3 class="green">ENTREPRENEUR WELCOME</h3>
						<p>Your idea’s from whiteboard to market.Its simply – You have an idea we help you build it. Today there is more and more people looking to build their own technology business, not all have the necessary skills …</p>
						<div><a class="btn btn-primary-outline black" href="#">learn more</a></div>
					</div>
				</div>
			</div>

			<?php
        $latest_post = new WP_Query("showposts=4");
        if($latest_post->have_posts()) :
	    ?>
			<h3 class="text-center blog-hdr">FROM OUR BLOG</h3>
			<div class="container-fluid section blogs-list">
				<dl class="col-xs-10 col-xs-offset-1">
					<?php
            while($latest_post->have_posts()):
                $latest_post->the_post(); ?>
					<dd>
						<div class="col-sm-5 clearfix">
							<div class="blog-date">
								<?php the_time('M'); ?><span><?php the_time('d'); ?></span>
							</div>
							<div class="blog-image">
								<?php the_post_thumbnail('medium'); ?>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="blog-text">
								<h3><?php the_title() ?></h3>
								<p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
								<div><a href="?page_id=21&amp;post=514" class="btn btn-primary-outline black">Learn More</a></div>
							</div>
						</div>
					</dd>
	        <?php endwhile ?>
				</dl>
			</div>
			<?php endif ?>

			<!-- Social Channels -->
			<div class="container-fluid section social-channels">
				<div class="col-md-3 pinterest bg-black">
					<h3>PINTEREST</h3>
					<?php echo do_shortcode( '[do_widget "Pinterest RSS Widget"]' );?>

					<!--?php echo get_pins_feed_list(
						$username='cdavdra',
						$boardname,
						$maxfeeds=1,
						$divname='standard',
						$printtext=NULL,
						$target='samewindow',
						$useenclosures='yes',
						$thumbwidth='100%',
						$thumbheight='auto',
						$showfollow='none'); ?-->

				</div>
				<div class="col-md-6 youtube bg-dark-gray">
					<h3>YOUTUBE</h3>
					<?php echo do_shortcode( '[do_widget "youtube channel"]' );?>
				</div>
				<div class="col-md-3 twitter bg-darker-gray">
					<h3>TWEETS</h3>
					<?php echo do_shortcode( '[do_widget id=wptt_twittertweets-2]' );?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<!--?php if ( !function_exists('dynamic_sidebar')
|| !dynamic_sidebar('sidebar-home') ) : ?-->
<!--?php endif; ?-->

<?php
get_footer();
