<?php
/**
*
* @package WordPress
* @subpackage TXT_ACM
* @since TXT 1.0
*/

/*
Template Name: No Sidebar
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
						<h2><?php echo get_the_title(); ?></h2>
						<span class="byline"><?php echo get_post_meta( get_the_ID(), 'post_byline', TRUE ); ?></span>
						<ul class="meta">
							<li class="timestamp">5 days ago</li>
							<li class="comments"><a href="#">1,024</a></li>
						</ul>
					</header>

					<!-- post/page thumbnail -->
					<?php if (has_post_thumbnail( $post->ID ) ):
						  	$img_id = get_post_thumbnail_id($post->ID);
						  	$image = wp_get_attachment_image_src($img_id, $optional_size);
						  	$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
					?>
						<span class="image image-full"><img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" height="350px"/></span>
					<?php endif; ?>
					
					<!-- post/page content -->
					<section>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							  	the_content();
							  endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
						<?php endif; ?>
					</section>

				</article>

			<!-- /Content -->
			
		</div>
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
				</div>
			</section>
		<!-- /Features -->

	</div>
</div>
</div>
</div>
<!-- /Main -->

<?php get_footer(); ?>