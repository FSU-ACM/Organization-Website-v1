<!-- Footer -->
			<footer id="footer" class="5grid-layout">
				<div class="row">
					<div class="12u">

						<!-- About -->
							<section>
								<h2 class="major"><span>What's this about?</span></h2>
								<p>
									This is <a href="http://html5up.net/txt/">TXT</a>, a free site template designed by
									<a href="http://n33.co">n33</a> for <a href="http://html5up.net/">HTML5 Up!</a>
									It's built on the <a href="http://n33.co/5grid">5grid</a> framework, uses well-thought out
									HTML5 and CSS3, and is fully responsive making it a great starting point for your own
									projects. And, like everything else we make, it's also free to use for pretty much any
									personal or commercial work under the <a href="http://html5up.net/license/">Creative Commons Attribution</a>
									license, so go ahead and use it &ndash; just don't forget to credit us!
								</p>
							</section>
						<!-- /About -->

					</div>
				</div>
				<div class="row">
					<div class="12u">

						<!-- Contact -->
							<section>
								<h2 class="major"><span>Get in touch</span></h2>
								<ul class="contact">
									<li><a href="#" class="facebook">Facebook</a></li>
									<li><a href="http://twitter.com/n33co" class="twitter">Twitter</a></li>
									<li><a href="http://n33.co/feed/" class="rss">RSS</a></li>
									<li><a href="http://dribbble.com/n33" class="dribbble">Dribbble</a></li>
									<li><a href="#" class="linkedin">LinkedIn</a></li>
									<li><a href="#" class="googleplus">Google+</a></li>
								</ul>
							</section>
						<!-- /Contact -->
					
					</div>
				</div>
				<div class="row">

					<!-- Copyright -->
						<div id="copyright">
							&copy; <?php the_time('Y') ?> ACM@FSU | Images: &copy; The Florida State University | Design: <a href="http://html5up.net/">HTML5 Up!</a>
						</div>
					<!-- /Copyright -->

				</div>
			</footer>
		<!-- /Footer -->

<!-- load le javascript -->
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarOverlaid=1"></script>

<script type="text/javascript">
    $(document).ready(function(){
        // $('#nav').localScroll(800);

        // // .parallax(xPosition, speedFactor, outerHeight) options:
        // // xPosition - Horizontal position of the element
        // // inertia - speed to move relative to vertical scroll.

        // // Example: 0.1 is one tenth the speed of scrolling, 
        // // 2 is twice the speed of scrolling
        // // outerHeight (true/false) - 
        // // Whether or not jQuery should use it's outerHeight option to 
        // // determine when a section is in the viewport

        // $('#header').parallax("50%", 0.1);
        // $('#banner-wrapper').parallax("50%", 0.1);
        // $('#banner').parallax("50%", 2.0);
        // // $('.bg').parallax("50%", 0.4);
        // $('#main').parallax("70%", 0.3);

			
			$("#banner-wrapper").scroll(function () {
				s = $("#banner-wrapper").scrollTop();
				$("#banner-wrapper img").css("-webkit-transform","translateY(" +  (s/5)  + "px)");
			})


        <?php if ( is_front_page() ) { ?>
		// load the following only on homepage
		// this js controls the animations and user interactivity for 
		// home page specific events

	        $("#first_trigger").hover(
	          function () {
	          	$('#static_fly').hide();
	          	$('#first_flyin').show();
	          },
	          function () {
		         $('#first_flyin').hide();
	          	$('#static_fly').show();
	        })
	      	$("#second_trigger").hover(
	          function () {
	          	$('#static_fly').hide();
	          	$('#second_flyin').show();
	          },
	          function () {
		         $('#second_flyin').hide();
	          	$('#static_fly').show();
	        })
	        $("#third_trigger").hover(
	          function () {
	          	$('#static_fly').hide();
	          	$('#third_flyin').show();
	          },
	          function () {
		         $('#third_flyin').hide();
	          	$('#static_fly').show();
	        })
	        $("#fourth_trigger").hover(
	          function () {
	          	$('#static_fly').hide();
	          	$('#fourth_flyin').show();
	          },
	          function () {
		         $('#fourth_flyin').hide();
	          	$('#static_fly').show();
	        })

		<? } ?> // end home page specific js
    });

</script>


	</body>
</html>