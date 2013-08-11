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
							<li class="timestamp"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></li>
							<li class="comments"><a href="<?php the_permalink(); ?>"><fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count></a></li>
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

		<style type="text/css">

		h2.major span {
			top: -27px;
			padding: 0 1.5em 0 1.5em;
		}
		.major span {
			font-size: 23px;
		}
		</style>

		<div class="row">
            <div class="12u">
                    <section class="is-blog">
                        <h2 class="major"><span>Comments</span></h2>
                        <div class="5grid">
                            <div class="row">
                                <div class="9u">
                                    <div class="content content-left">
                                    		<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="863"></div>
                                    </div>
                                </div>
                                <div class="3u">
                                    <div class="sidebar">

                                    <?php 
                                          $temp = $wp_query; 
                                          $wp_query = null; 
                                          $wp_query = new WP_Query();
                                          $args = array(
                                                'post_type' => array('post','job_posts', 'documents', 'events'), 
                                                'posts_per_page' => 5,
                                                'ignore_sticky_posts' => 1,
                                            );
                                          $wp_query->query( $args ); ?>

                                        <!-- Archives -->
                                            <ul class="style2">
                                            <?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                                                <li>
                                                    <article class="is-post-summary">
                                                        <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                                        <ul class="meta">
                                                            <li class="timestamp"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></li>
                                                            <li class="comments"><a href="#">34</a></li>
                                                        </ul>
                                                    </article>
                                                </li>
                                            <?php endwhile;?>
                                            <?php $wp_query = null; $wp_query = $temp; ?>
                                            </ul>
                                            <a href="<?php echo site_url(); ?>/bulletin/" class="button button-alt">Back To Bulletin</a>
                                        <!-- /Archives -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

				</article>

			<!-- /Content -->
			
		</div>
	</div>
</div>
<div class="row">
	<div class="12u"><?php include (TEMPLATEPATH . '/topfooter.php'); ?></div>
</div>
</div>
</div>
<!-- /Main -->

<style type="text/css">.mainCommentForm {border-radius: 5px!important;margin-bottom: 20px!important;}</style>

<?php get_footer(); ?>