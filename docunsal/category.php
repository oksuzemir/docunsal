<?php get_header(); ?>

<main role="main" class="ayarla">

<section class="konten">

<h1 class="front-title m-20"><?php single_cat_title(); ?></h1>
<?php the_archive_description( '<div class="cat-wrap">', '</div>' ); ?>
</section>
<section class="category-bg  m-50">
	<div class="konten">
		<div class="eleventh-blog">
		<?php get_template_part('loop'); ?>
		</div>
	</div>	
</section>
</main>

<?php get_footer(); ?>
