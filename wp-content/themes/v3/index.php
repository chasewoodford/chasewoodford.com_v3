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
				<div class="past-page float-left"><?php previous_posts_link( '&larr;&nbsp;Newer Posts' ); ?></div>
				<div class="next-page float-right"><?php next_posts_link( 'Older Posts&nbsp;&rarr;' ); ?></div>
			</div>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>