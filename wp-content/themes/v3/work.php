<?php /* Template Name: Work */ ?>

<?php get_header(); ?>

<div class="row">

    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'portfolio', // slug
        'posts_per_page' => -1, // show all
        'orderby' => 'date',
        'order'   => 'DESC'
    );
    $work_query = new WP_Query($args);
    while($work_query->have_posts()) : $work_query->the_post(); ?>

		<div class="col-md-4">
			<div class="mb-4 item item-1">
				<div class="item-content">
					<div class="position-relative item-top-content">
						<div class="bg-white p-3 w-100 item-top-content-inner">
							<a class="small text-uppercase item-title-link" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							<p class="mb-0 text-muted item-description">
								<?php $item_description = get_post_meta($post->ID, 'item-description', true); echo $item_description; ?>
							</p>
						</div>
					</div>
					<div class="bg-white pt-0 px-3 pb-3 item-add-content">
						<div class="item-add-content-inner">
							<div class="row">
								<div class="col-12">
									<a class="float-left small" href="<?php the_permalink() ?>">Learn more&nbsp;&raquo;</a>
									<a class="float-right small" href="#">See it live&nbsp;&raquo;</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>