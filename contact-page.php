<?php
/**
 *Template Name: Contact Page
 */

get_header(); ?>

<div id="primary" class="content-area">

		<main id="main-page2" class="site-main" role="main">

			<div class="page-header">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6480.713857454875!2d-105.9386935207718!3d35.69283328029315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87185039b187bbc3%3A0x23436d91a24404eb!2s431+Paseo+De+Peralta%2C+Santa+Fe%2C+NM+87501!5e0!3m2!1sen!2sus!4v1533941238986" width="1400" height="375" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<h2 class="subheading"><?php the_field( "subheading"); ?></h2>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>

		</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>