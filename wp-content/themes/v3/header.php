<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-XXXXXXXX-1');
	</script>

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

<?php include 'nav.php'; ?>

<?php include 'masthead.php'; ?>

<main class="container">