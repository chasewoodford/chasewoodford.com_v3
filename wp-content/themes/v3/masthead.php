<!-- if home page -->
<?php if ( is_front_page() ) : ?>
    <header id="masthead" class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>
                            <?php bloginfo( 'name' ); ?>
                        </h1>
                        <span class="subheading">
							<?php bloginfo( 'description' ); ?>
						</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- if post, but not portfolio piece -->
<?php elseif ( is_single() && !in_category('portfolio') ) : ?>
    <header class="masthead" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1><?php single_post_title(); ?></h1>
	                    <?php if ( get_post_meta( $post->ID, 'sub-title', true ) ) : ?>
		                    <span class="subheading">
	                            <?php echo get_post_meta( $post->ID, 'sub-title', true ); ?>
	                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- if portfolio piece -->
<?php elseif ( is_single() && in_category('portfolio') ) : ?>
	<header class="masthead">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="post-heading">
						<h1><?php single_post_title(); ?></h1>
                        <?php if ( get_post_meta( $post->ID, 'sub-title', true ) ) : ?>
							<span class="subheading">
	                            <?php echo get_post_meta( $post->ID, 'sub-title', true ); ?>
	                        </span>
                        <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>

<!-- if category page -->
<?php elseif ( is_category() ) : ?>
	<header class="masthead" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?php single_cat_title(); ?></h1>
                        <?php if ( get_post_meta( $post->ID, 'sub-title', true ) ) : ?>
		                    <span class="subheading">
	                            <?php echo get_post_meta( $post->ID, 'sub-title', true ); ?>
	                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- if other page -->
<?php elseif ( is_page() ) : ?>
	<header class="masthead" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="page-heading">
						<h1><?php the_title(); ?></h1>
                        <?php if ( get_post_meta( $post->ID, 'sub-title', true ) ) : ?>
							<span class="subheading">
	                            <?php echo get_post_meta( $post->ID, 'sub-title', true ); ?>
	                        </span>
                        <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</header>

<?php endif; ?>