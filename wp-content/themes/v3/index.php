<?php get_header(); ?>

<div class="row">
	<div class="col-lg-8 col-md-10 mx-auto">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="post-preview">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<h2 class="post-title">
							<?php the_title(); ?>
						</h2>
					</a>
					<?php the_content( 'Continue reading&nbsp;&raquo;' ); ?>
				</article>

				<hr>

			<?php endwhile; ?>

			<div id="pagination" class="clearfix">
				<div class="past-page"><?php previous_posts_link( 'Newer Posts&nbsp;&rarr;' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
				<div class="next-page"><?php next_posts_link( 'Older Posts&nbsp;&rarr;' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
			</div>

		<?php else : ?>

			<article class="post error">
				<h1 class="404">Nothing has been posted like that yet</h1>
			</article>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>