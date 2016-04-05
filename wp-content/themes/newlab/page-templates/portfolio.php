<?php
/**
* Template Name: Portfolio
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
<div id="primary" class="content-area portfolio">
    <main id="main" class="site-main container-fluid" role="main">
        <div class="page-hed white">
            <h1>PORTFILIO</h1>
        </div>

        <div class="container-fluid.section slide-container sec-lancome white clearfix">
            <div class="col-md-6 sec-details">
                <h3>Lancome app of color</h3>
                <p>We teamed up with Attention again, this time to design and develop House of Color, a Facebook app for Lancôme. Its centerpiece, the Magic Mirror Virtual Makeup Tool, allows users to try out different eye shadow palettes on their Facebook pictures. It was a fun and challenging project that put us in charge of R&amp;D, design, and development. Check out the live House of Color app or take a look at our video case study:</p>

                <div>
                    <a class="btn btn-primary-outline white"  data-toggle="slide-content" data-target="#lancomeModal">Read More</a>
                    <a class="btn btn-primary-outline white" href="#">View Site</a>
                </div>
            </div>
            <div class="col-md-6">
                <img alt="" src="<?php bloginfo("template_directory");?>/images/bg-lancome.jpg" title="" />
            </div>

            <div id="lancomeModal" class="slide-content col-md-12 bg-purple">
                <div class="slide-header">
                    <button type="button" class="close" data-dismiss="slide-content">&times;</button>
                    <h2>LANCOME APP OF COLOR</h2>
                </div>

                <div class="slide-body">
                    <div class="slide col-md-6">
                        <p><strong>Challenge</strong></p>
                        <p>Attention is a social media/PR agency with clients in the beauty, fashion, entertainment, consumer, travel and lifestyle industries. They wanted to launch a Black Friday social media campaign for a large sports retailer. The goal was to get people into the client’s stores, check in through Foursquare, and then tweet their check-in. One in-store winner would be selected each hour and notified of his or her prize while still in the store.</p>

                        <p><strong>Analysis</strong></p>
                        <p>To succeed, the promotion needed to be extremely reliable as its time-specific nature allowed no room for error. Additionally, check-ins would need to be archived, and captured data exported, for reporting purposes. Redundancy was required to prevent loss of important data.</p>

                        <p><strong>Solution</strong></p>
                        <p>Analog Method assessed available options for tracking check-ins and selecting in-store winners. Then, they mapped out and documented the process for running the promotion. Next, Analog developed a custom web application that monitored and stored tweeted check-ins and allowed</p>
                    </div>
                    <div class="slide col-md=6">
                        <p>Attention’s team and their client’s representative to log in and access a constantly updated stream of tweets meeting the criteria. Because the Twitter search component was the most error-prone, two separate processes performed simultaneous searches to ensure no check-ins were missed.</p>
                        <p>Before launch, Analog conducted two weeks of extensive testing using another brand with a high volume of check-ins and high-volume keywords. This phase ensured the application both returned accurate data and would operate reliably during heavy activity periods.</p>
                        <p><strong>Results</strong></p>
                        <p>Hourly prize winners were selected from the stream and notified in store. Captured data, including details on individual check-ins, was exported for reporting purposes.</p>
                        <p>“Analog Method’s work allowed us to execute the promotion effortlessly. The promotion itself generated about 3,000 [Foursquare] check-ins the morning of Black Friday compared to the [client’s] average of 500 check-ins per day… Analog reduced a lot of risk and guaranteed we could actually pull the project off.”</p>

                        <p>Attention’s team and their client’s representative to log in and access a constantly updated stream of tweets meeting the criteria. Because the Twitter search component was the most error-prone, two separate processes performed simultaneous searches to ensure no check-ins were missed.</p>
                        <p>Before launch, Analog conducted two weeks of extensive testing using another brand with a high volume of check-ins and high-volume keywords. This phase ensured the application both returned accurate data and would operate reliably during heavy activity periods.</p>
                        <p><strong>Results</strong></p>
                        <p>Hourly prize winners were selected from the stream and notified in store. Captured data, including details on individual check-ins, was exported for reporting purposes.</p>
                        <p>“Analog Method’s work allowed us to execute the promotion effortlessly. The promotion itself generated about 3,000 [Foursquare] check-ins the morning of Black Friday compared to the [client’s] average of 500 check-ins per day… Analog reduced a lot of risk and guaranteed we could actually pull the project off.”</p>

                        <p>Attention’s team and their client’s representative to log in and access a constantly updated stream of tweets meeting the criteria. Because the Twitter search component was the most error-prone, two separate processes performed simultaneous searches to ensure no check-ins were missed.</p>
                        <p>Before launch, Analog conducted two weeks of extensive testing using another brand with a high volume of check-ins and high-volume keywords. This phase ensured the application both returned accurate data and would operate reliably during heavy activity periods.</p>
                        <p><strong>Results</strong></p>
                        <p>Hourly prize winners were selected from the stream and notified in store. Captured data, including details on individual check-ins, was exported for reporting purposes.</p>
                        <p>“Analog Method’s work allowed us to execute the promotion effortlessly. The promotion itself generated about 3,000 [Foursquare] check-ins the morning of Black Friday compared to the [client’s] average of 500 check-ins per day… Analog reduced a lot of risk and guaranteed we could actually pull the project off.”</p>
                    </div>
                </div>

                <div class="slide-footer">
                    <button type="button" class="btn btn-default" data-dismiss="slide-content">Close</button>
                </div>
            </div>
        </div>

        <div class="container-fluid section">
            <div class="col-md-6 col-left sec-virgil black">
                <div class="sec-details text-over-img sec-txt-right">
                    <h3>VIRGIL WEBSITE</h3>
                    <p>Website production with custom content management system and blog.</p>
                    <p>IndustryDate1337 Role</p>
                    <div><a class="btn btn-primary-outline black" href="#">Visit Site</a></div>
                </div>
                <img alt="" src="<?php bloginfo("template_directory");?>/images/bg-virgil.jpg" title="" />
            </div>

            <div class="col-md-6 col-right eqh-rows-2">
                <div class="eqh-row bg-black sec-university-ottawa">
                    <div class="sec-flex-rows">
                        <div class="sec-row">
                            <div class="sec-details white">
                                <h3>UNIVERSITY OF OTTAWA</h3>
                                <p>Website production with custom content management system and blog.</p>
                                <p>IndustryDate1337 Role</p>
                            </div>
                        </div>
                        <div class="sec-row ">
                            <img class="pull-right" alt="" src="<?php bloginfo("template_directory");?>/images/bg-university-ottawa.jpg" title="" />
                        </div>
                    </div>
                </div>

                <div class="eqh-row bg-dim-gray sec-art-of-giving">
                    <div class="sec-flex-rows">
                        <div class="sec-row ">
                            <img alt="" src="<?php bloginfo("template_directory");?>/images/bg-art-of-giving.jpg" title="" />
                        </div>
                        <div class="sec-row">
                            <div class="sec-details white">
                                <h3>ABOUT US</h3>
                                <p>Meet and Greet, Special Events, Premieres, Exclusive Merchandising and more awesome stuff.</p>
                                <div><a class="btn btn-primary-outline white" href="#">learn more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid section sec-barbie">
            <div class="col-md-6 col-left">
                <div class="sec-details text-over-img">
                    <p>Website production with custom content management system and blog.</p>
                    <div><a class="btn btn-primary-outline black" href="#">View Project</a></div>
                </div>
                <img alt="" src="<?php bloginfo("template_directory");?>/images/bg-barbie-text.jpg" title="" />
            </div>
            <div class="col-md-6 hidden-sm-down">
                <img alt="" src="<?php bloginfo("template_directory");?>/images/bg-barbie-doll.jpg" title="" />
            </div>
        </div>

        <div class="container-fluid section">
            <div class="col-md-6 sec-seatow black">
                <div class="sec-details text-over-img col-md-6">
                    <h3>SEATOW RESPONSIVE WEBSITE</h3>
                    <p>Website development and UX design with e-commerce integration, membership management, Google maps integration, location-specific micro sites, single sign on integration, and Facebook application development.</p>
                </div>
                <img alt="" src="<?php bloginfo("template_directory");?>/images/bg-seatow.jpg" title="" />
            </div>
            <div class="col-md-6 sec-bevmax white">
                <div class="sec-details text-over-img col-md-6">
                    <h3>BEVMAX RESPONSIVE WEBSITE</h3>
                    <p class="para white">Website production with custom content management system and blog.</p>
                    <p class="para white">IndustryDate1337 Role</p>
                    <div><a class="btn btn-primary-outline white" href="#">Visit Project</a></div>
                </div>
                <img alt="" src="<?php bloginfo("template_directory");?>/images/bg-bevmax.jpg" title="" />
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
