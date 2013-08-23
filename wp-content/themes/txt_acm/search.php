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

				<article class="is-page-content">


				<style type="text/css">
					.search-query {
						color: #540115;
					}
					.the-excerpt p{
						margin-top: -2em;
					}
					.error-msg {
						font-size: 30px;
					}
				</style>

				<?php if ( have_posts() ) : ?>

						<header>
							<h2><?php printf( __( 'Search Results for: %s' ), '<span class="search-query">' . get_search_query() . '</span>'); ?></h2>
						</header>
				</article>

				<?php
					global $wp_query;
					$total_results = $wp_query->found_posts;
				?>

				<h2 class="major" style="margin:0;">
					<span>Found <?php echo $total_results; ?> Result<?php echo ($total_results > 1) ? 's': ''; ?></span>
				</h2>
				
				<?php else : ?>

						<header>
							<h2>Sorry. No matches found.</h2>
						</header>
				</article>
				<h2 class="major" style="margin:0;"></h2>

				<?php endif; ?>

				<br />
				<!-- Content -->
					<article class="is-page-content">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- page/post header -->
						<header>
							<a href="<?php the_permalink(); ?>" class="blog_title"><?php echo get_the_title(); ?></a>
							<span class="blog_subtitle"><?php echo get_post_meta( get_the_ID(), 'post_byline', TRUE ); ?></span>
							<ul class="meta">
								<li class="timestamp"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></li>
								<li class="comments"><a href="<?php the_permalink(); ?>">
									<fb:comments-count href="<?php the_permalink(); ?>"></fb:comments-count>
								</a></li>
								<li class="post_type"><?php echo 'Posted in  ';
															if (get_post_type( get_the_ID() ) == 'post') {
																echo 'Blog, ';
																echo 'under ';
																the_category(', ');
															}
															elseif (get_post_type( get_the_ID() ) == 'job_posts') echo 'Jobs';
													  ?>
								</li>
							</ul>
						</header>

					<!-- post/page thumbnail -->
					<?php if (has_post_thumbnail( $post->ID ) ):
						  	$img_id = get_post_thumbnail_id($post->ID);
						  	$image = wp_get_attachment_image_src($img_id, $optional_size);
						  	$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
					?>
						<span class="image image-full"><img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" height="250px"/></span>
					<?php endif; ?>
					<!-- /post thumbnail -->
                        
                        <?php the_excerpt(); ?>

					</article>

					<hr>

				<!-- /Content -->
				<?php endwhile; else: ?>

					<section>
						<p class="error-msg">No posts matched your search criteria.</p>
					</section>

				<?php endif; ?>

				<?php if (function_exists("pagination")) {
		    		pagination($additional_loop->max_num_pages);
				} ?>

				<?php 
				  $wp_query = null; 
				  $wp_query = $temp;  // Reset
				?>
			
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