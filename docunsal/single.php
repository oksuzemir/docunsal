<?php get_header(); ?>

<main role="main" class="konten ayarla">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<h1 class="front-title m-30">
				<?php the_title(); ?>
	</h1>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- post title -->
			<!-- /post title -->
			<!-- post thumbnail -->
			<div class="about-img">
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>

					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->
			</div>


			<?php the_content(); // Dynamic Content ?>


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
