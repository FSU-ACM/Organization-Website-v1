<!DOCTYPE HTML>
<html>
<head>
<title><?php bloginfo('name'); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta name="keywords" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700|Open+Sans+Condensed:700" rel="stylesheet" />
<!-- <script src="js/jquery-1.8.3.min.js"></script> -->
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarOverlaid=1"></script>

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
				<h1><a href="#" class="mobileUI-site-name">ACM@FSU</a></h1>
				<!-- <span class="byline">association for computational machinery</span> -->
			</div>
		</div>
	</header>
<!-- /Header -->

<!-- Nav -->
	<nav id="nav" class="mobileUI-site-nav">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 
							  'menu_class' => 'nav-menu',
							  'container' => '' 
					 		) 
					 ); 
	?>
	</nav>
<!-- /Nav -->

<!-- Banner -->
	<div id="banner-wrapper">
		<section id="banner">
			<h2>Not a member?</h2>
			<!-- <span class="byline">signing up is simple.</span> -->
			<a href="#" class="button">Sign Up Here</a>
		</section>
	</div>
<!-- /Banner -->

<!-- Main -->
	<div id="main-wrapper" >
						