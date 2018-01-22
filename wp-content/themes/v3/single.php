<?php get_header(); ?>

<div class="row">
	<div class="col-lg-8 col-md-10 mx-auto">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

				<hr/>

				<div id="pagination" class="clearfix">
                    <?php $prev_post = get_previous_post(false,''); $next_post = get_next_post(false,''); ?>

                    <?php if (!empty( $next_post )): ?>
						<div class="next-page float-left">
							<a title="<?php echo $next_post->post_title; ?>" href="<?php echo get_permalink( $next_post->ID ); ?>">&larr;&nbsp;Next Post</a>
						</div>
                    <?php endif; ?>

                    <?php if (!empty( $prev_post )): ?>
						<div class="past-page float-right">
							<a title="<?php echo $prev_post->post_title; ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>">Prev Post&nbsp;&rarr;</a>
						</div>
                    <?php endif; ?>
		        </div>

	            <hr/>

			<?php endwhile; ?>

            <?php if ( comments_open() || '0' != get_comments_number() ) comments_template( '', true ); ?>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>