<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '', true, 'right' ); ?></title>
	
	<meta name="viewport" content="width=device-width">
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</head>
<body>
	<header>
		<div class="first header">
			<div class="container">
				
				<div class="col-wrap">
					<nav class="column left">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'full navbar' ) ); ?>
					</nav>
					
					<div class="column responsive-logo">
							<h2><i class="fa fa-bars"></i><?php $blog_title = get_bloginfo('name'); echo $blog_title;?></h2>
					</div>
				
					<nav class="column right">
						<?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'navbar' ) ); ?>
					</nav>
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