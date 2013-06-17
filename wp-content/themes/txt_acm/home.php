<?php
/**
*
* @package WordPress
* @subpackage TXT_ACM
* @since TXT 1.0
*/

/*
Template Name: Home Page
*/

get_header(); ?>

<!-- Main -->
<div id="main-wrapper">
    <div id="gold-bar"></div>

<!-- Highlight -->
<div id="main" class="5grid-layout">
    <div class="row">
        <div class="12u">

            <style type="text/css" scoped>
                .fly { min-height: 220px; }
            </style>

            <section class="is-highlight">
                <ul class="special">
                    <li><a href="#" id="first_trigger" class="battery">Battery</a></li>
                    <li><a href="#" id="second_trigger" class="tablet">Tablet</a></li>
                    <li><a href="#" id="third_trigger" class="flask">Flask</a></li>
                    <li><a href="#" id="fourth_trigger" class="chart">Pie Chart?</a></li>
                </ul>
                
                <!-- static element -->
                <div id="static_fly" class="fly">
                    <header>
                        <h2>Welcome to fsu.acm.org</h2>
                        <span class="byline">The ACM Chapter for The Florida State University</span>
                    </header>
                    <p>
                        ACM, the world’s largest educational and scientific computing society, delivers resources that advance computing<br /> 
                        as a science and a profession. ACM provides the computing field's premier Digital Library and serves its members <br />
                        and the computing profession with leading-edge publications, conferences, and career resources.
                    </p>
                </div>

                <!-- first fly in element -->
                <div id="first_flyin" class="fly" style="display:none">
                    <header>
                        <h2>FSU Computer Science</h2>
                        <span class="byline">ACM has a very close relationship to the Computer Science Department</span>
                    </header>
                    <p>
                        Our organization works closely with Florida State University's department of Computer Science to ensure<br />
                        our student members are receiving help in the necessary areas. This relationship allows us to offer students<br />
                        with impromptu office hours and tutoring from experienced and knowledgeable peers.
                    </p>
                </div>

                <!-- second fly in element -->
                <div id="second_flyin" class="fly" style="display:none">
                    <header>
                        <h2>Network of Student Professionals</h2>
                        <span class="byline">Brought together by common interests.</span>
                    </header>
                    <p>
                        ACM not only helps students assist each other academically, we also try to help students find jobs and<br />
                        rewarding careers. Our main goal is to help prepare our members for that first technical interview. We<br />
                        strive to make sure each student that comes through our doors leaves with confidence and determination.
                    </p>
                </div>

                <!-- third fly in element -->
                <div id="third_flyin" class="fly" style="display:none">
                    <header>
                        <h2>Encouragement. Collaboration. Unity.</h2>
                        <span class="byline">We emphasize teamwork and mutual growth</span>
                    </header>
                    <p>
                        Computer Science is a difficult discipline to learn. ACM@FSU offers students with virtually unlimited<br />
                        resources to grow, learn, and succeed. Our workshops and contests aim to challenge and inspire. All while <br />
                        exposing students to real world problems and technologies that are relevant to the industry job markets.
                    </p>
                </div>

                <!-- fourth fly in element -->
                <div id="fourth_flyin" class="fly" style="display:none">
                    <header>
                        <h2>Think. Solve. Create.</h2>
                        <span class="byline">Inspiration through education.</span>
                    </header>
                    <p>
                        For successful computer science students the learning never stops in the classroom. We provide opportunities<br />
                        for students to exercise their knowledge and hone skills well before they interview for that first job.<br />
                        We host bi-annual events such as a Programming Contest and Picnic as well as social events including game nights.
                    </p>
                </div>

            </section>
        <!-- /Highlight -->

        </div>
    </div>

        <br class="clear" />


    <!-- DONATE TO ACM -->
    <h2 class="major" style="margin:0;"><span>be a sponsor</span></h2>
        <div class="row" style="padding: 1em 0 1em 0;">
            <div class="12u">
                <section class="is-feature">
                    <div class="5grid">
                        <div class="row">
                            <div class="9u" style="width:65%;">
                                <div class="content content-left" style="text-align:left;">
                                    <h2>ACM@FSU is funded through private sponsors</h2>
                                        <p>
                                            Many of our events and gatherings are catered and sponsored by generous donors from local, 
                                            regional, and even international companies. Thanks to their support our members can enjoy
                                            competing in Programming Contests, attending talks by industry leaders, and access to helpful resources.
                                            If you would like to make a donation, simply click on the button.
                                        </p>
                                </div>
                            </div>
                            <div class="3u">
                                <!-- floater should display:none; on mobile browsers!!!  -->
                                <div id="floater" style="padding:20%;"> 
                                <div class="sidebar"><a href="#" class="button button-big">Donate</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="row">
            <div class="12u">

                <!-- Blog -->
                    <section class="is-blog">
                        <h2 class="major"><span>The Buzz</span></h2>
                        <div class="5grid">
                            <div class="row">
                                <div class="9u">
                                    <div class="content content-left">
                                    
                                        <!-- Featured Post -->
                                            <article class="is-post">
                                                <header>
                                                    <h3><a href="#">You mean I have to read stuff?</a></h3>
                                                    <span class="byline">I’m going back to playing call of Modern Halostrike 15</span>
                                                    <ul class="meta">
                                                        <li class="timestamp">15 minutes ago</li>
                                                        <li class="comments"><a href="#">8</a></li>
                                                    </ul>
                                                </header>
                                                <a href="#" class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/pic05.jpg" alt="" /></a>
                                                <p>
                                                    Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in lectus. Praesent 
                                                    semper mod quis eget mi. Etiam sed ante risus aliquam erat et volutpat. Praesent a 
                                                    dapibus velit. Curabitur sed nisi nunc, accumsan vestibulum lectus. Lorem ipsum 
                                                    dolor sit non aliquet sed, tempor et dolor.  Praesent a dapibus velit. Curabitur 
                                                    accumsan.
                                                </p>
                                                <a href="#" class="button">Continue Reading</a>
                                            </article>
                                        <!-- /Featured Post -->
                                    
                                    </div>
                                </div>
                                <div class="3u">
                                    <div class="sidebar">
                                
                                        <!-- Archives -->
                                            <ul class="style2">
                                                <li>
                                                    <article class="is-post-summary">
                                                        <h3><a href="#">Where are the graphics?</a></h3>
                                                        <ul class="meta">
                                                            <li class="timestamp">6 hours ago</li>
                                                            <li class="comments"><a href="#">34</a></li>
                                                        </ul>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="is-post-summary">
                                                        <h3><a href="#">What achievements are there</a></h3>
                                                        <ul class="meta">
                                                            <li class="timestamp">9 hours ago</li>
                                                            <li class="comments"><a href="#">27</a></li>
                                                        </ul>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="is-post-summary">
                                                        <h3><a href="#">Can I play w/a controller</a></h3>
                                                        <ul class="meta">
                                                            <li class="timestamp">Yesterday</li>
                                                            <li class="comments"><a href="#">184</a></li>
                                                        </ul>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="is-post-summary">
                                                        <h3><a href="#">How is this a game??</a></h3>
                                                        <ul class="meta">
                                                            <li class="timestamp">2 days ago</li>
                                                            <li class="comments"><a href="#">286</a></li>
                                                        </ul>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="is-post-summary">
                                                        <h3><a href="#">Imagination is lost on me</a></h3>
                                                        <ul class="meta">
                                                            <li class="timestamp">3 days ago</li>
                                                            <li class="comments"><a href="#">8,086</a></li>
                                                        </ul>
                                                    </article>
                                                </li>
                                            </ul>
                                            <a href="#" class="button button-alt">Browse Archives</a>
                                        <!-- /Archives -->
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- /Blog -->
                
            </div>
        </div>
        <div class="row">
            <div class="12u">

                <!-- Features -->
                    <section class="is-features">
                        <h2 class="major"><span>The Latest</span></h2>
                        <div class="5grid">
                            <div class="row">
                                <div class="3u">
                                    
                                    <!-- Feature -->
                                        <section class="is-feature">
                                            <a href="#" class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/pic01.jpg" alt="" /></a>
                                            <h3><a href="#">Look Up</a></h3>
                                            <p>
                                                Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
                                                lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                            </p>
                                        </section>
                                    <!-- /Feature -->
                            
                                </div>
                                <div class="3u">
                                    
                                    <!-- Feature -->
                                        <section class="is-feature">
                                            <a href="#" class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/pic02.jpg" alt="" /></a>
                                            <h3><a href="#">Look Down</a></h3>
                                            <p>
                                                Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
                                                lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                            </p>
                                        </section>
                                    <!-- /Feature -->
                            
                                </div>
                                <div class="3u">
                                    
                                    <!-- Feature -->
                                        <section class="is-feature">
                                            <a href="#" class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/pic03.jpg" alt="" /></a>
                                            <h3><a href="#">Examine Room</a></h3>
                                            <p>
                                                Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
                                                lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                            </p>
                                        </section>
                                    <!-- /Feature -->
                            
                                </div>
                                <div class="3u">
                                    
                                    <!-- Feature -->
                                        <section class="is-feature">
                                            <a href="#" class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/pic04.jpg" alt="" /></a>
                                            <h3><a href="http://getlamp.com">Get Lamp</a></h3>
                                            <p>
                                                Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in 
                                                lectus dolore. Praesent semper mod quis eget sed etiam eu ante risus.
                                            </p>
                                        </section>
                                    <!-- /Feature -->
                            
                                </div>
                            </div>
                        </div>
                    </section>

                <!-- /Features -->

            </div>
        </div>

    </div>
</div>
<!-- /Main -->

<?php get_footer(); ?>
