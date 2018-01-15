<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div class="row">
	<div class="col-lg-8 col-md-10 mx-auto">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>