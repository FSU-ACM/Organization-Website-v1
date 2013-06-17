<?php
/**
*
* @package WordPress
* @subpackage TXT_ACM
* @since TXT 1.0
*/

/*
Template Name: Blog
*/

get_header(); ?>

<!-- Main -->
<div id="main-wrapper" >
	<div id="gold-bar"></div>

<div id="main" class="5grid-layout">
	<div class="row">
		<div class="9u mobileUI-main-content">
			<div class="content content-left">

				<article class="is-page-content">

					<!-- page/post header -->
						<header>
							<h2>The ACM@FSU Bulletin</h2>
							<span class="byline"><?php echo get_post_meta( get_the_ID(), 'page_byline', TRUE ); ?></span>
						</header>
				</article>

		<!-- Blog -->
				<h2 class="major" style="margin:0;"><span>what's new</span></h2>			
				<br />
				<?php $latest = new WP_Query('showposts=-1'); ?>
				<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
		
					<article id="post-<?php the_ID(); ?>" class="is-page-content blog_post">

					<!-- post header -->
						<header>
							<a href="<?php the_permalink(); ?>" class=""><h2><?php echo get_the_title(); ?></h2></a>
							<span class="byline"><?php echo get_post_meta( get_the_ID(), 'post_byline', TRUE ); ?></span>
						<?php if (!is_page()) { ?>
							<ul class="meta">
								<li class="timestamp">5 days ago</li>
								<li class="comments"><a href="#">1,024</a></li>
							</ul>
						<?php } ?>
						</header>

				<!-- Content -->
					<!-- post/page thumbnail -->
					<?php if (has_post_thumbnail( $post->ID ) ):
						  	$img_id = get_post_thumbnail_id($post->ID);
						  	$image = wp_get_attachment_image_src($img_id, $optional_size);
						  	$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
					?>
						<span class="image image-full"><img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" height="350px"/></span>
					<?php endif; ?>
					<!-- /post thumbnail -->
                        
                        <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="button">Continue Reading</a>

					</article>

				<!-- /Content -->
				
        <!-- /Blog -->
<?php endwhile;?>

			  <div class="navigation index">
			    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
			    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
			  </div><!--end navigation-->
			
			</div>
		</div>


		<!-- Sidebar -->
		<div class="3u">
			<div class="sidebar"><?php get_sidebar(); ?></div>
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