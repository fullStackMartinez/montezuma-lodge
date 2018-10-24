<?php
/**
 * Template Name: Home
 */ ?>

<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="home-slideshow">
				<ul>
					<?php $images = get_field('slideshow');
					while(have_rows('slideshow')) : the_row(); ?>
						<li>
							<?php $image = get_sub_field('image'); ?>
							<a class="link" href="<?php the_sub_field('link'); ?>">
								<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
				<div class="nav-boxes">
					<?php for($i = 0; $i < count($images); $i++) { ?>
						<a href="javascript:void"></a>
					<?php } ?>
				</div>
				<div class="slideshow-logo"></div>
			</div>

			<section id="content-section">
				<div class="content-box-1">
					<h3 class="content-title"><?php the_title(); ?></h3>
					<p class="content-p"><?php echo get_post_field('post_content', $post->ID); ?></p>
				</div>
				<div class="quicklinks-box">
					<h3 class="quicklinks-title">QUICKLINKS</h3>
					<ul>
						<?php
						if(have_rows('content_info')):

							while(have_rows('content_info')) : the_row();
								?>


								<li><a href="<?php the_sub_field("page_url"); ?>"><?php the_sub_field("link_title"); ?></a></li>


							<?php
							endwhile;
						endif;
						?>
					</ul>
				</div>
			</section>

			<div class="events-title-container">
				<div class="event-title">Upcoming Events at Montezuma lodge</div>
				<div class="event-title-mobile">Upcoming Events</div>


				<a href="<?php the_permalink(get_page_by_title('Events')); ?>"><span class="event-button">view full calendar ></span></a>
			</div>
			<?php
			$date_now = date('Y-m-d H:i:s');
			// args
			$args = array(
				'posts_per_page' => 5,
				'post_type' => 'events',
				'meta_query' => array(
					array(
						'key' => 'event_date',
						'compare' => '>',
						'value' => $date_now,
						'type' => 'DATETIME'
					),
					'meta_key' => 'event_date',
					'orderby' => 'meta_value',
					'order' => 'ASC',
					'meta_type' => 'DATETIME'


				));

			// query
			$the_query = new WP_Query($args);

			?>
			<?php if($the_query->have_posts()): ?>
				<?php while($the_query->have_posts()) : $the_query->the_post(); ?>


					<div class="event-container">
						<p class="p-day">
							<?php the_field('event_day'); ?>
						</p>
						<p class="p-date">
							<?php the_field('event_date'); ?>
						</p>
						<p class="p-start">
							<?php the_field('event_start_time'); ?>&ndash;<?php the_field('event_end_time'); ?>
						</p>
						<p class="p-title">
							<?php the_title(); ?>:
						</p>
						<p class="p-attend">
							<?php the_field('who_can_attend'); ?>
						</p>
						<a href="<?php the_permalink(); ?>">
							<p class="link">More Info &nbsp;&gt;</p>
						</a>

					</div>


				<?php endwhile; ?>
			<?php endif; ?>
			<div class="events-title-container">
				<a href="<?php the_permalink(get_page_by_title('Events')); ?>"><span class="event-button-mobile">view full calendar ></span></a>
			</div>
			<?php wp_reset_postdata(); ?>

			<div id="main-banner">
				<a href="<?php the_permalink(); ?>">
					<?php
					$image = get_field('image1');
					$size = 'large';
					$large = $image['sizes'][$size];

					if($image): ?>

						<img src="<?php echo $large ?>" alt="<?php echo $image['alt']; ?>"/>

					<?php endif; ?>
				</a>
			</div>

			<div class="articles">
				<ul class="articles-list">
					<?php

					$myposts = get_posts(array('orderby' => 'date', 'posts_per_page' => 4));
					foreach($myposts as $post) : setup_postdata($post); ?>
						<li>
							<div class="article-summary">
								<?php
								if(has_post_thumbnail()) {
									the_post_thumbnail('article');
								} else {
									echo '<img src="' . get_bloginfo('stylesheet_directory')
										. '/img/article-thumb.jpg" />';
								}
								?>
							</div>
							<div class="article-summary2">
								<a href="<?php the_permalink(); ?>">
									<div class="article-title"><?php the_title(); ?></div>
								</a>
								<?php the_excerpt(50); ?>
								<p><a class="link2" href="<?php the_permalink(); ?>">More &#62;</a></p>

							</div>

						</li>
					<?php endforeach;
					wp_reset_postdata(); ?>
				</ul>
			</div>

			<!--OTHER IMAGES-->
			<div id="main-banner2">
				<a href="<?php the_permalink(); ?>">
					<?php
					$image = get_field('image2');
					$size = 'large';
					$large = $image['sizes'][$size];

					if($image): ?>

						<img src="<?php echo $large ?>" alt="<?php echo $image['alt']; ?>"/>

					<?php endif; ?>
				</a>
			</div>
			<div id="main-banner2">
				<a href="<?php the_permalink(); ?>">
					<?php
					$image = get_field('image3');
					$size = 'large';
					$large = $image['sizes'][$size];

					if($image): ?>

						<img src="<?php echo $large ?>" alt="<?php echo $image['alt']; ?>"/>

					<?php endif; ?>
				</a>
			</div>

		</main>
	</div>

<?php get_footer(); ?>