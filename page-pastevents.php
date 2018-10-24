<?php
/**
 *Template Name: Past Events
 */
?>

<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


			<?php get_header(); ?>

			<div class="events">
				<div class="events-title-container">
					<div class="event-title">Past Events at Montezuma lodge</div>
				<a href="<?php the_permalink( get_page_by_title('Events')); ?>" class="button"><span class="event-button">view upcoming events ></span></a>
				</div>
			</div>
				<?php
				// args
				$date_now = date('Y-m-d H:i:s');

				$args = array(
					'posts_per_page'	=> -1,
					'post_type'		=> 'Events',
					'meta_query' 		=> array(
					array(
				        'key'			=> 'event_date',
				        'compare'		=> '<',
				        'value'			=> $date_now,
				        'type'			=> 'DATETIME'
			    ),
				'order'				=> 'ASC',
				'orderby'			=> 'meta_value',
				'meta_key'			=> 'event_date',
				'meta_type'			=> 'DATE'
			));


				// query
				$the_query = new WP_Query( $args );

				?>
				<?php if( $the_query->have_posts() ): ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



				<div class="event-container">
					<p class="p-day">
						<?php the_field('event_day'); ?>
					</p>
					<p class="p-date">
						<?php the_field('event_date'); ?>
					</p>
					<p class="p-start">
				<?php the_field('event_start_time'); ?>&mdash;<?php the_field('event_end_time'); ?>
			</p>
					<p class="p-title">
						<?php the_title();?>
					</p>
					<p class="p-attend">
						<?php the_field('who_can_attend');?>
					</p>
					<a href="<?php the_permalink(); ?>">
						<p class="link">More Info &nbsp;&gt;</p>
					</a>

				</div>

			

		<?php endwhile;?>
		<?php endif;?>
			


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>