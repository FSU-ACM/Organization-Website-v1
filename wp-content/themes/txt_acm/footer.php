<!-- Footer -->
			<footer id="footer" class="5grid-layout">
				<div class="row">
					<div class="12u">

						<!-- About -->
							<section>
								<h2 class="major"><span>Who is ACM@FSU?</span></h2>
								<p>
									<a href="http://www.acm.org/">ACM (the Association for Computational Machinery)</a> is a U.S.-based international learned society for computing.
									Our student chapter at The Florida State University is a network of student professionals that are interested in computer science. We strive to 
									offer encouragement and inspiration to our student members in the form of workshops, training, and contests. We meet twice a month in 
									<a href="http://map.campus.fsu.edu/index.aspx?LOV">LOV 151.</a>
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
									<li><a href="http://www.facebook.com/groups/cs.fsu.acm/" class="facebook">Facebook</a></li>
									<li><a href="http://twitter.com/acmatfsu" class="twitter">Twitter</a></li>
									<li><a href="<?php bloginfo('rss_url'); ?>" class="rss">RSS</a></li>
									<li><a href="http://www.linkedin.com/pub/acm-fsu/7a/710/875" class="linkedin">LinkedIn</a></li>
									<li><a href="https://plus.google.com/111107497973315279162" rel="publisher" class="googleplus">Google+</a></li>
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
<!-- <script src="<?php echo get_template_directory_uri(); ?>/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarOverlaid=1"></script> -->

<script type="text/javascript">
    $(document).ready(function(){
			// failing parralax scrool effect
			// $("#banner-wrapper").scroll(function () {
			// 	s = $("#banner-wrapper").scrollTop();
			// 	$("#banner-wrapper img").css("-webkit-transform","translateY(" +  (s/5)  + "px)");
			// })
	
		var isDesktop = (function() {
		  return !('ontouchstart' in window) || !('onmsgesturechange' in window);
		})();

		window.isDesktop = isDesktop;
		// if (isDesktop) { alert("WTF!?"); }
		
		if (!isDesktop || navigator.userAgent.match(/(iPod|iPhone|iPad)/) ) {
			$(window).scroll(function(){
	    		$("#gold-bar").hide();
	    	});
		}

        <?php if ( is_page_template('home.php') ) { ?>

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

	        $("#gold-bar").css("top", "699px");

	        if (!isDesktop || navigator.userAgent.match(/(iPod|iPhone|iPad)/) ) {
	        	$("#gold-bar").hide();
	        }

	    });


		$(window).scroll(function(){
    		$("#gold-bar").css("top",Math.max(47,699-$(this).scrollTop()));

		// end home page specific js

		<? } else { ?>
    
		$("#gold-bar").css("top", "135px");

		if (!isDesktop || navigator.userAgent.match(/(iPod|iPhone|iPad)/) ) {
	        	$("#gold-bar").hide();
	        }

    });

		$(window).scroll(function(){
    		$("#gold-bar").css("top",Math.max(47,135-$(this).scrollTop()));

    	<?php } ?>
	});


</script>
<?php wp_footer(); ?>

</body>
</html>