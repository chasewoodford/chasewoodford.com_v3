<?php get_header(); ?>

<div class="row">
	<div class="col-lg-8 col-md-10 mx-auto">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

				<hr/>

				<div class="meta clearfix">
					<div class="category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>
					<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
				</div><!-- Meta -->

			<?php endwhile; ?>

            <?php if ( comments_open() || '0' != get_comments_number() ) comments_template( '', true ); ?>

		<?php else : ?>

			<article class="post error">
				<h1 class="404">Nothing has been posted like that yet</h1>
			</article>

		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>
