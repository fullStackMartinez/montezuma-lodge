

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if (is_home() && get_option('page_for_posts') ) {
				$img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'medium');
				$featured_image = $img[0];
			}
			?>

			<div class="page-header">
				<img src="<?php echo $featured_image; ?>" alt="">
			</div>


			<div class="articles">
				<ul class="articles-list">
					<?php

					$myposts = get_posts( array('orderby' => 'menu_order', 'posts_per_page' => -1) );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li>
							<div class="article-summary">
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('article');
								}
								else {
									echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
										. '/img/article-thumb.jpg" />';
								}
								?>
							</div>
							<div class="article-summary2">
								<a href="<?php the_permalink(); ?>">
									<div class="article-title"><?php the_title(); ?></div>
								</a>
								<?php the_excerpt(50); ?>

							</div>

						</li>
					<?php endforeach;
					wp_reset_postdata();?>
				</ul>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>