<?php /* Template Name: Work */ ?>

<?php get_header(); ?>

<div class="row">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="col-md-4">
				<div class="mb-4 item item-1">
					<div class="item-content">
						<div class="position-relative item-top-content">
							<div class="bg-white p-3 item-top-content-inner">
								<a class="small text-uppercase item-title-link" href="#">Project Name</a>
								<p class="mb-0 text-muted item-description">
									Lorem ipsum dolor sit amet consectetur adipiscing elit labore et dolore magna aliqua.
								</p>
							</div>
						</div>
						<div class="bg-white pt-0 px-3 pb-3 item-add-content">
							<div class="item-add-content-inner">
								<div class="row">
									<div class="col-12">
										<a class="float-left small" href="#">Learn more&nbsp;&raquo;</a>
										<a class="float-right small" href="#">See it live&nbsp;&raquo;</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>