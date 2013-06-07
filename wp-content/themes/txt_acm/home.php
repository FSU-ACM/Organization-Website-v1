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

<script type="text/javascript">
    $(document).ready(function(){
        $('#nav').localScroll(800);
        //.parallax(xPosition, speedFactor, outerHeight) options:
        //xPosition - Horizontal position of the element
        //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
        //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
        $('#header').parallax("50%", 0.1);
        $('#banner-wrapper').parallax("50%", 0.1);
        $('#banner').parallax("50%", 2.0);
        // $('.bg').parallax("50%", 0.4);
        $('#main').parallax("70%", 0.3);
    })

    $(document).ready(function(){
        // $('#first_flyin_trigger').click(function () {
        //     $('#first_flyin:hidden:first').fadeIn('slow');

        //     // .effect("bounce", { direction:'left', times:5 }, 300);
        // });

        $("a.battery").hover( function () {
            $("#first_flyin").fadeIn('slow');
        }, function () {
        $("#first_flyin").fadeOut('slow');
      }
    );
    })
</script>

<!-- Main -->
<div id="main-wrapper" >
    <div id="main" class="5grid-layout">
        <div class="row">
            <div class="12u">

<!-- Highlight -->
<div id="main" class="5grid-layout">
    <div class="row">
        <div class="12u">
                    <section class="is-highlight">
                        <ul class="special">
                            <li>
                                <a href="#" id="first_flyin_trigger" class="battery">Battery</a>
                            </li>
                            <li><a href="#" class="tablet">Tablet</a></li>
                            <li><a href="#" class="flask">Flask</a></li>
                            <li><a href="#" class="chart">Pie Chart?</a></li>
                        </ul>
                        
                        <!-- static element -->
                        <header>
                            <h2>You check the contents of your inventory</h2>
                            <span class="byline">it contains: many items that seem important but actually aren’t</span>
                        </header>
                        <p>
                            Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper mod quis eget mi. Etiam eu<br />
                            ante risus. Aliquam erat volutpat. Aliquam luctus et mattis lectus amet pulvinar. Nam nec turpis consequat.
                        </p>

                        <!-- first fly in element -->
                        <div id="first_flyin">
                            <header>
                                <h2>First Title of Fly In</h2>
                                <span class="byline">it contains: many items that seem important but actually aren’t</span>
                            </header>
                            <p>
                                Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper mod quis eget mi. Etiam eu<br />
                                ante risus. Aliquam erat volutpat. Aliquam luctus et mattis lectus amet pulvinar. Nam nec turpis consequat.
                            </p>
                        </div>

                        <!-- GET FIRST FLYIN WORKING THEN ADD THESE
                        <!-- second fly in element --
                        <div id="second_flyin">
                            <header>
                                <h2>Second Title of Fly In</h2>
                                <span class="byline">it contains: many items that seem important but actually aren’t</span>
                            </header>
                            <p>
                                Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper mod quis eget mi. Etiam eu<br />
                                ante risus. Aliquam erat volutpat. Aliquam luctus et mattis lectus amet pulvinar. Nam nec turpis consequat.
                            </p>
                        </div>

                        <!-- third fly in element --
                        <div id="third_flyin">
                            <header>
                                <h2>Third Title of Fly In</h2>
                                <span class="byline">it contains: many items that seem important but actually aren’t</span>
                            </header>
                            <p>
                                Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper mod quis eget mi. Etiam eu<br />
                                ante risus. Aliquam erat volutpat. Aliquam luctus et mattis lectus amet pulvinar. Nam nec turpis consequat.
                            </p>
                        </div>

                        <!-- fourth fly in element --
                        <div id="fourth_flyin">
                            <header>
                                <h2>Fourth Title of Fly In</h2>
                                <span class="byline">it contains: many items that seem important but actually aren’t</span>
                            </header>
                            <p>
                                Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper mod quis eget mi. Etiam eu<br />
                                ante risus. Aliquam erat volutpat. Aliquam luctus et mattis lectus amet pulvinar. Nam nec turpis consequat.
                            </p>
                        </div> -->


                    </section>
                <!-- /Highlight -->

            </div>
        </div>
        <div class="row">
            <div class="12u">

                <!-- Features -->
                    <section class="is-features">
                        <h2 class="major"><span>Valid Commands</span></h2>
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
                            <div class="row">
                                <div class="12u">
                                
                                    <div class="actions">
                                        <a href="#" class="button button-big">Do Something</a>
                                        <a href="#" class="button button-alt button-big">Think About It</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                <!-- /Features -->

            </div>
        </div>
        <div class="row">
            <div class="12u">

                <!-- Blog -->
                    <section class="is-blog">
                        <h2 class="major"><span>Adventure Log</span></h2>
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
    </div>
</div>
<!-- /Main -->

<?php get_footer(); ?>
