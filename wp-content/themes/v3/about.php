<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="row">
	<div class="col-12 col-lg-3 offset-lg-1 col-xl-2 offset-xl-1 mt-2 text-center">
		<img class="rounded-circle mb-3" src="<?php echo get_template_directory_uri() . "/img/profile.png"; ?>"/>
	</div>
	<div class="col-12 col-lg-7 col-xl-8">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>