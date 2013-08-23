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

					<style type="text/css">

					#contact-form_216 {
						margin-bottom: 1em;
					}
					.wpcf7-form-control.wpcf7-textarea {
						height: 100px;
					}
					.wpcf7-response-output.wpcf7-validation-errors {
						font-size: 13px;
						color: #fff;
						line-height: 15px;
						background: #ff0000;
						padding: 15px;
						border-radius: 5px;
						width: 208px;
					}
					.wpcf7-response-output.wpcf7-mail-sent-ok {
						font-size: 13px;
						color: #fff;
						line-height: 15px;
						background: #008000;
						padding: 15px;
						border-radius: 5px;
						width: 208px;
					}

					/* GLOBAL FORM STYLES */
					input[type="text"], input[type="email"] {
						height: 40px;
					}
					.wpcf7-form-control.wpcf7-submit.button.button-alt {
						height: 40px;
						line-height: 3px;
						width: 122%;
					}
					.wpcf7-not-valid-tip-no-ajax {
						font-size: 12px;
						color: #ff0000;
					}

					</style>

					<section>
						<div class="row">
                            <div class="9u" style="width:65%;">
                                <div class="content content-left" style="text-align:left;">
        							<h3>for other inquiries</h3>
                                        <p>
                                            Students and faculty should already know; <strong>we're here to help</strong>. ACM serves as
                                            both a social club and incubator. We want everyone to know that we have an open door policy.
                                            So if you're looking for a tutor for COP-3330 or you need help finding your next undergraduate
                                            RA, we are the go to people for those questions. <br />
                                            If you have an idea for how we can improve ACM or it's events, or if you have an idea for a 
                                            great workshop, we'd love to hear that as well!
                                        </p>
                                </div>
                            </div>
                            <div class="3u">
                                <div id="floater" style="padding:20%;margin-top: -56px;"> 
									<div class="sidebar">
										<h3>Contact Us</h3>
										<?php echo do_shortcode('[contact-form-7 id="216" title="Contact Form"]'); ?></div>
                                </div>
                            </div>
                        </div>
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