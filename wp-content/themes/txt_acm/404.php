<?php
/**
*
* @package WordPress
* @subpackage TXT_ACM
* @since TXT 1.0
*/

get_header(); ?>

<!-- Main -->
<div id="main-wrapper" >
	<div id="gold-bar"></div>

<div id="main" class="5grid-layout">
	<div class="row">
		<div class="9u mobileUI-main-content">
			<div class="content content-left">
			
				<!-- Content -->

				<style type="text/css">
					#error-msg p {
						font-size: 30px;
						line-height: 1.4em;
					}
				</style>
		
					<article class="is-page-content">

					<!-- page/post header -->
						<header>
							<h2>404: Page Not Found </h2>
							<span class="byline">Are you making up URL's?</span>

						</header>

					<!-- post/page thumbnail -->
						<span class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/C64-404.png" height="350px"/></span>
					
					<!-- post/page content -->
						<section id="error-msg">
							<p>Maybe this is our fault. If so we're sorry. <br /><br />
								If you feel let down by this infraction then by all
								means, <a href="contact/" >contact us</a>, and we will punish our web developers fiercely!
							<br /><br />Otherwise, just try our <a href="<?php echo get_option('home'); ?>" >homepage</a> instead.</p>
						</section>

					</article>

				<!-- /Content -->
				
			</div>
		</div>

		<!-- Sidebar -->
		<div class="3u">
			<div class="sidebar"><?php get_sidebar(); ?></div>
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