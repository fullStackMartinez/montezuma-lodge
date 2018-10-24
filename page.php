<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package New_Montezuma
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main-page" class="site-main" role="main">

			<div class="page-header">
				<?php the_post_thumbnail('fuller'); ?>
			</div>

			<?php while(have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
					<h2 class="subheading"><?php the_field("subheading"); ?></h2>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<?php if(sizeof(get_field('gallery')) > 1) { ?>

						<div class="colorbox">
							<?php $images = get_field('gallery');
							foreach($images as $image): ?>
								<a href="<?php echo $image['sizes']['large'] ?>" title="<?php echo $image['title'] ?>">
									<img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="<?php echo $image['alt']; ?>"/>
								</a>
							<?php endforeach; ?>
						</div>
					<?php } ?>

				</article>
			<?php endwhile; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>