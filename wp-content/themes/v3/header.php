<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta name="description" content="Personal website for Chase Woodford">
	<meta name="author" content="Chase Woodford">

	<title>
		<?php bloginfo('name'); ?> |
		<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
	</title>

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . "/images/favicon.ico"; ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>

<!--Maybe use this in future-->
<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); // Display the user-defined menu in Appearance > Menus ?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg" id="mainNav">
	<div class="container">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">chasewoodford.com</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
		        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
		        aria-label="Toggle navigation">
			Menu
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">work</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">playground</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">about</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Page Header -->
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
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</header>
<?php else : ?>
	<header class="masthead">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="page-heading">
						<h1><?php the_title(); ?></h1>
						<span class="subheading">TODO: Subtitle goes here</span>
					</div>
				</div>
			</div>
		</div>
	</header>
<?php endif; ?>

<!-- Main Content -->
<main class="container">