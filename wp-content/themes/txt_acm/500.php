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
							<h2>500: Internal Server Error </h2>
							<span class="byline">Umm... Oops... We broke the internet.</span>

						</header>

					<!-- post/page thumbnail -->
						<span class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/500error.jpg" height="350px"/></span>
					
					<!-- post/page content -->
						<section id="error-msg">
							<p>This is definitely our fault. So we're really sorry. <br /><br />
								We either let the chimps loose in the server room again,
								or we forgot to feed Sam our sys admin again. <strong>Sorry Sam!</strong>
							<br /><br />Try our <a href="<?php echo get_option('home'); ?>" >homepage</a> instead. It should work!</p>
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