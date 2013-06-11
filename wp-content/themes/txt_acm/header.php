<!DOCTYPE HTML>
<html>
<head>
<title><?php bloginfo('name'); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700|Open+Sans+Condensed:700" rel="stylesheet" />
<noscript>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/5grid/core.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/5grid/core-desktop.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/5grid/core-1200px.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/5grid/core-noscript.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-desktop.css" />
</noscript>
<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" /><![endif]-->
<!--[if lte IE 7]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie7.css" /><![endif]-->
</head>

<body class="homepage">

<!-- Header -->
	<header id="header">
		<div class="logo">
			<div>
				<h1><a href="/" class="mobileUI-site-name"><?php bloginfo('name'); ?></a></h1>
				<span class="byline"> | <?php bloginfo('description'); ?></span>
			</div>
		</div>
	</header>
<!-- /Header -->

<!-- Nav -->
	<nav id="nav" class="mobileUI-site-nav">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 
							  'menu_class' => 'nav-menu',
							  'container' => '' 
					 		)); ?>
	</nav>
<!-- /Nav -->

<!-- Display banner only on home template -->
<?php if ( is_page_template('home.php') ) { ?>
<!-- Banner -->
	<div id="banner-wrapper">
		<section id="banner">
			<h2>Not a member?</h2>
			<!-- <span class="byline">signing up is simple.</span> -->
			<a href="https://studentgroups.fsu.edu/account/logonrequired?ReturnUrl=%2forganization%2fassociationofcomputingmachinery%2fhome%2fjoin" class="button" target="blank">Sign Up Here</a>
		</section>
	</div>
<!-- /Banner -->
<?php } ?>						