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

					<!-- page/post header -->
					<header>
						<h2><?php echo get_the_title(); ?></h2>
						<span class="byline"><?php echo get_post_meta( get_the_ID(), 'page_byline', TRUE ); ?></span>
					<?php if (!is_page()) { ?>
						<ul class="meta">
							<li class="timestamp"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></li>
							<li class="comments"><a href="<?php the_permalink(); ?>">
								<fb:comments-count href="<?php the_permalink(); ?>"></fb:comments-count>
							</a></li>
						</ul>
					<?php } ?>
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

		<?php include (TEMPLATEPATH . '/topfooter.php'); ?>

	</div>
</div>
</div>
</div>
<!-- /Main -->

<?php get_footer(); ?>