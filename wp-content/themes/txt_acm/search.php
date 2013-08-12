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
				</style>

				<?php if ( have_posts() ) : ?>

					<!-- page/post header -->
						<header>
							<h2><?php printf( __( 'Search Results for: %s' ), '<span class="search-query">' . get_search_query() . '</span>'); ?></h2>
						</header>
				
				<?php else : ?>

					<!-- page/post header -->
						<header>
							<h2>Sorry. No matches found.</h2>
						</header>

				<?php endif; ?>

				<?php
					global $wp_query;
					$total_results = $wp_query->found_posts;
				?>

				</article>

				<h2 class="major" style="margin:0;"><span>Found <?php echo $total_results; ?> Results</span></h2>
				<br />
				<!-- Content -->
					<article class="is-page-content">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- page/post header -->
						<header>
							<a href="<?php the_permalink(); ?>" class="blog_title"><?php echo get_the_title(); ?></a>
						</header>

						<!-- post/page thumbnail -->
						<?php if (has_post_thumbnail( $post->ID ) ):
							  	$img_id = get_post_thumbnail_id($post->ID);
							  	$image = wp_get_attachment_image_src($img_id, $optional_size);
							  	$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
						?>
							<span class="image image-full"><img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" width="150px" align="left"/></span>

						<?php endif; ?>

						<span class="the-excerpt"><?php the_excerpt(); ?></span>

					<?php endwhile; else: ?>

						<section>
							<p>Sorry, no posts matched your criteria.</p>
						</section>

					<?php endif; ?>

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