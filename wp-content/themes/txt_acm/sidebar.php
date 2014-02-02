<!-- Sidebar -->

<!-- Search Form -->
		<section id="sidebar-search">
			<h2 class="major"><span>Search</span></h2>
			<?php get_search_form(); ?>
		</section>


	<!-- Recent Posts -->
		<section>
			<h2 class="major"><span>Recent Posts</span></h2>
			<ul class="style2">

			<?php 
		      	  $temp = $wp_query; 
				  $wp_query = null; 
				  $wp_query = new WP_Query();
				  $args = array(
				  	'post_type' => array('post','job_posts'), 
					'posts_per_page' => 3,
					'ignore_sticky_posts' => 1,
					'paged' => False );
				  $wp_query->query( $args ); ?>

			<?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

				<li>
					<article class="is-post-summary">
						<a href="<?php the_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
						<ul class="meta">
							<li class="timestamp"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></li>
							<li class="comments"><a href="<?php the_permalink(); ?>">
								<fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count>
							</a></li>
						</ul>
					</article>
				</li>

			<?php endwhile;?>
			</ul>
			<a href="bulletin/" class="button button-alt">ACM Bulletin</a>
		</section>
	<!-- /Recent Posts -->


	<?php $wp_query = null; $wp_query = $temp; ?>
	<!-- Upcoming Events -->
		<section>
			<h2 class="major"><span>Next Event</span></h2>

			<?php 
		      	  $temp = $wp_query; 
				  $wp_query = null; 
				  $wp_query = new WP_Query();
				  $args = array(
				  	'post_type' => array('events'), 
					'posts_per_page' => 1,
					'ignore_sticky_posts' => 1,
					'paged' => False );
				  $wp_query->query( $args ); ?>

			<?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

			<a href="<?php the_permalink(); ?>" class="image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/curious_Preston.jpg" alt="Curious Preston" /></a>
			<a href="<?php the_permalink(); ?>"><h2><?php echo get_the_title(); ?></h2></a>
			<ul class="meta">
				<li class="timestamp" style="font-size:20px;">
					<?php echo date("D, M d", get_post_meta( get_the_ID(), 'events_startdate', TRUE )); ?> at 
					<?php echo date("h:i a", get_post_meta( get_the_ID(), 'events_startdate', TRUE )); ?></li>
			</ul>
			<?php endwhile;?>
		</section>
	<!-- /Upcoming Events -->


<!-- /Sidebar -->