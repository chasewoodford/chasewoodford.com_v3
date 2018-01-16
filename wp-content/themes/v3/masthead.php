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
<?php elseif ( is_single() ) : ?>
    <!--TODO: replace post-bg.jpg with post thumbnail from wp-->
    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1><?php single_post_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php elseif ( is_category() ) : ?>
    <header class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?php single_cat_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php elseif ( is_page( 'about' ) ) : ?>
	<header class="masthead">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="page-heading">
						<h1><?php the_title(); ?></h1>
                        <span class="subheading">
                            This is what I do.
                        </span>
					</div>
				</div>
			</div>
		</div>
	</header>
<?php endif; ?>