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

					<!-- page/post header -->
						<header>
							<h2>Jobs and Internships</h2>
							<span class="byline">your CS career may start here</span>
						</header>
				</article>

		<!-- Blog -->
				<h2 class="major" style="margin:0;"><span>most recent</span></h2>			
				<br />
				<?php 
				      $temp = $wp_query; 
  					  $wp_query = null; 
  					  $wp_query = new WP_Query();
  					  $args = array(
  					  		'post_type' => array('job_posts'), 
    						'posts_per_page' => 3,
    						'ignore_sticky_posts' => 1,
    						'paged' => $paged
    					);
					  $wp_query->query( $args ); ?>
				<?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		
					<article id="post-<?php the_ID(); ?>" class="is-page-content post">

					<!-- post header -->
						<header>
							<a href="<?php the_permalink(); ?>" class="blog_title"><h2><?php echo get_the_title(); ?></h2></a>
							<span class="byline"><?php echo get_post_meta( get_the_ID(), 'post_byline', TRUE ); ?></span>
							<ul class="meta">
								<li class="timestamp"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></li>
								<li class="comments"><a href="#">1,024</a></li>
							</ul>
						</header>

				<!-- Content -->
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
                    <a href="<?php the_permalink(); ?>" class="button">Continue Reading</a>

					</article>

					<hr>

				<!-- /Content -->
				
        <!-- /Blog -->
<?php endwhile;?>

	<center>
		<?php if (function_exists("pagination")) {
    		pagination($additional_loop->max_num_pages);
		} ?>
	</center>

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