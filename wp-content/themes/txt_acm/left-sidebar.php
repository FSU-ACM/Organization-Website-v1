<?php
/**
*
* @package WordPress
* @subpackage TXT_ACM
* @since TXT 1.0
*/

/*
Template Name: Left Sidebar
*/

get_header(); ?>

<!-- Main -->
<div id="main-wrapper" >
	<div id="gold-bar"></div>

<div id="main" class="5grid-layout">
	<div class="row">
	<!-- Sidebar -->
		<div class="3u">
			<div class="sidebar">
				
				<?php get_sidebar(); ?>
				
			</div>
		</div>
    <!-- /Sidebar -->
		<div class="9u mobileUI-main-content">
			<div class="content content-right">
			
				<!-- Content -->
		
					<article class="is-page-content">

						<header>
							<h2><?php echo get_the_title(); ?></h2>
							<span class="byline">Semper amet scelerisque metus faucibus morbi congue mattis</span>
							<ul class="meta">
								<li class="timestamp">5 days ago</li>
								<li class="comments"><a href="#">1,024</a></li>
							</ul>
						</header>

						<section>
							<span class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/pic05.jpg" alt="" /></span>
							<p>
								Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. 
								Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. 
								Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi 
								consequat etiam lorem ipsum dolor sit amet nullam.
							</p>
						</section>
						
						<section>
							<h3>More intriguing information</h3>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac quam risus, at tempus 
								justo. Sed dictum rutrum massa eu volutpat. Quisque vitae hendrerit sem. Pellentesque lorem felis, 
								ultricies a bibendum id, bibendum sit amet nisl. Mauris et lorem quam. Maecenas rutrum imperdiet 
								vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor. 
								Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis 
								rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien
								vulputate. Nulla quis nibh ipsum, sed egestas justo. Morbi ut ante mattis orci convallis tempor. 
								Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis 
								rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien. 
								Donec sagittis massa et leo semper a scelerisque metus faucibus. Morbi congue mattis mi. 
								Phasellus sed nisl vitae risus tristique volutpat. Cras rutrum commodo luctus.
							</p>
							<p>
								Phasellus odio risus, faucibus et viverra vitae, eleifend ac purus. Praesent mattis, enim 
								quis hendrerit porttitor, sapien tortor viverra magna, sit amet rhoncus nisl lacus nec arcu. 
								Suspendisse laoreet metus ut metus imperdiet interdum aliquam justo tincidunt. Mauris dolor urna, 
								fringilla vel malesuada ac, dignissim eu mi. Praesent mollis massa ac nulla pretium pretium. 
								Etiam a lacus a lacus pharetra porttitor quis accumsan odio. Sed vel euismod nisi. Etiam convallis 
								rhoncus dui quis euismod. Maecenas lorem tellus, congue et condimentum ac, ullamcorper non sapien. 
								Donec sagittis massa et leo semper a scelerisque metus faucibus. Morbi congue mattis mi. 
								Maecenas tortor mauris, consectetur pellentesque dapibus eget, tincidunt vitae arcu. 
								Vestibulum purus augue, tincidunt sit amet iaculis id, porta eu purus.
							</p>
						</section>

						<section>
							<h3>So in conclusion ...</h3>
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
								Vestibulum purus augue, tincidunt sit amet iaculis id, porta eu purus.
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