<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // force Internet Explorer to use the latest rendering engine available 
	?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title(''); ?></title>

	<?php // mobile meta (hooray!) 
	?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) 
	?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
	<?php // or, set /favicon.ico for IE10 win 
	?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
	<meta name="theme-color" content="#121212">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>


	<?php // wordpress head functions 
	?>
	<?php wp_head(); ?>
	<?php // end of wordpress head 
	?>
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/library/' ?>css/global.less" />
	<script src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>js/libs/less-1.7.3.min.js"></script>



	<?php // drop Google Analytics Here 
	?>
	<?php // end analytics 
	?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<section class="banner-pauta full clear-fix">
		<figure>
			<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/banner-pauta.jpg" alt="">
		</figure>
	</section>
	<header class="full clear-fix">
		<!-- Menú hamburguesa -->
		<div id="nav-toogle">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="wrapper-main center flex flex-center">
			<figure class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri() . '/library/' ?>images/logo-oppen-colombia.png" alt="">
				</a>
			</figure>
			<nav class="main-nav">
				<ul>
					<li><a href="#quienes-somos">Quienes somos</a></li>
					<li><a href="#portafolio">Portafolio</a></li>
					<li><a href="#clientes">Clientes</a></li>
					<li><a href="#aliados">Aliados</a></li>
					<li><a href="#casos-exito">Casos de éxito</a></li>
					<li class="btn-contacto"><a href="#contacto">Contacto</a></li>
				</ul>
			</nav>
			<div class="cont-search">
				<?php echo get_search_form(); ?>
			</div>
		</div>

	</header>