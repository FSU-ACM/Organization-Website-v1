<?php
/**
*
* @package WordPress
* @subpackage TXT_ACM
* @since TXT 1.0
*/

/*
Template Name: Contact
*/

get_header(); ?>

<!-- Main -->
<div id="main-wrapper" >
	<div id="gold-bar"></div>

<div id="main" class="5grid-layout">
	<div class="row">
		<div class="12u mobileUI-main-content">
			<div class="content">
			
			<!-- Content -->
	
				<article class="is-page-content">

					<header>
						<h2>Contacting ACM@FSU</h2>
						<span class="byline">Professor? Student? Recruiter? Let us know how we can help.</span>
					</header>

					<section>
						<span class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/contact_header.jpg" alt="" /></span>
						<p>
							
						</p>
					</section>
					
					<section style="margin-bottom:20px;">
						<div class="row">
                            <div class="9u" style="width:65%;">
                                <div class="content content-left" style="text-align:left;">
                                	<h3>are you a recruiter hoping to talk to our members?</h3>
                                        <p>
                                            Many times throughout the year our members assemble to meet with company recruiters looking to hire 
                                            the best and the brightest. Our school sends highly capable graduates to all corners of the world. 
                                            If you represent a company looking to hire or speak to a talented group of up and coming computer 
                                            science  students then we'd really like to hear from you. <br />
											To expedite the process we've created a simple recruiter application that'll take you five minutes.
                                        </p>
                                </div>
                            </div>
                            <div class="3u">
                                <!-- floater should display:none; on mobile browsers!!!  -->
                                <div id="floater" style="padding:20%;"> 
                                <div class="sidebar"><a href="#" class="button button-alt" style="width:254px;">Recruiter Application</a></div>
                                </div>
                            </div>
                        </div>
					</section>

					<section>
						<h3>for other inquiries</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac quam risus, at tempus 
							justo. Sed dictum rutrum massa eu volutpat. Quisque vitae hendrerit sem. Pellentesque lorem felis, 
							ultricies a bibendum id, bibendum sit amet nisl. Mauris et lorem quam. Maecenas rutrum imperdiet 
							vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor. 
							Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis 
							rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien. 
							Donec sagittis massa et leo semper a scelerisque metus faucibus. Morbi congue mattis mi. 
							Phasellus sed nisl vitae.
						</p>
						<p>
							Suspendisse laoreet metus ut metus imperdiet interdum aliquam justo tincidunt. Mauris dolor urna, 
							fringilla vel malesuada ac, dignissim eu mi. Praesent mollis massa ac nulla pretium pretium. 
							Maecenas tortor mauris, consectetur pellentesque dapibus eget, tincidunt vitae arcu. 
						</p>
					</section>

				</article>

			<!-- /Content -->
			
		</div>
	</div>
</div>
<div class="row">
	<div class="12u">

		<?php include (TEMPLATEPATH . '/topfooter.php'); ?>

	</div>
</div>
</div>
</div>
<!-- /Main -->

<?php get_footer(); ?>