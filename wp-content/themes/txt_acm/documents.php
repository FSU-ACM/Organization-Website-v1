<?php
/**
*
* @package WordPress
* @subpackage TXT_ACM
* @since TXT 1.0
*/

/*
Template Name: Docs
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
							<h2>ACM@FSU Documents</h2>
							<span class="byline"><?php echo get_post_meta( get_the_ID(), 'page_byline', TRUE ); ?></span>
						</header>
				</article>

				<style type="text/css">
					.blog_title {
						font-size: 40px!important;
					}
					.is-page-content header {
						margin-bottom: 0;
					}
					.doc-title {
						margin-bottom: 20px!important;
					}
				</style>

		<!-- Docs -->
				<h2 class="major" style="margin:0;"><span>document archive</span></h2>			
				<br />
				<?php 
				      $temp = $wp_query; 
  					  $wp_query = null; 
  					  $wp_query = new WP_Query();
  					  $args = array(
  					  		'post_type' => array('documents'), 
    						'posts_per_page' => -1,
    						'order' => 'ASC',
    						'ignore_sticky_posts' => 1,
    						'paged' => $paged
    					);
					  $wp_query->query( $args ); ?>
				<?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		
					<article id="post-<?php the_ID(); ?>" class="is-page-content post doc-title">
					<!-- post header -->
						<header>
							<a href="<?php the_permalink(); ?>" class="blog_title"><i class="icon-file-text-alt"></i> <?php echo get_the_title(); ?></a>
						</header>
					</article>
				
        <!-- /Docs -->
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