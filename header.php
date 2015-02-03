<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '', true, 'right' ); ?></title>
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</head>
<body>
	<header>
		<div class="responsive header">
			<div class="container">
				<nav>
					<ul>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'full navbar' ) ); ?>
					</ul>
				</nav>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png">
				<p><?php $blog_title = get_bloginfo('name'); echo $blog_title;?><p>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'header2-menu', 'container_class' => 'navbar' ) ); ?>
				</nav>
				<p class="fl-right">Get in touch.</p>
			</div>	
		</div>
		<div class="first header">
			<div class="container">
				<div class="col-wrap">
					<nav class="column half left">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'full navbar' ) ); ?>
					</nav>
					<div class="column half right">
						<p><i class="fa fa-phone"></i>Get in touch.</p>
						<nav>
							<?php wp_nav_menu( array( 'theme_location' => 'header2-menu', 'container_class' => 'navbar' ) ); ?>
						</nav>
					</div>
				</div>	
			</div>
		</div>
		<div class="spec-wrap white-wrap">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
				<div class="logo-text">
					<h1><?php $blog_title = get_bloginfo('name'); echo $blog_title;?></h1>
					<p><?php echo get_bloginfo ( 'description' );  ?></p>
				</div>
			</div>
		</div>
	</div>
</header>