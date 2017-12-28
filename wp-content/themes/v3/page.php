<?php get_header(); ?>

<div class="row">
	<div class="col-lg-8 col-md-10 mx-auto">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="post">

					<h1 class="title"><?php the_title(); // Display the title of the page ?></h1>

					<div class="the-content">
						<?php the_content(); ?>

						<?php wp_link_pages(); ?>
					</div>

				</article>

			<?php endwhile; ?>

		<?php else : ?>

			<article class="post error">
				<h1 class="404">Nothing posted yet</h1>
			</article>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>