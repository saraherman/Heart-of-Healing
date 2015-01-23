<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans' rel='stylesheet' type='text/css'>
	
</head>
<body>
	<header class="shadow-outset">
		<div class="container">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
				<div class="logo-text">
					<h1><?php $blog_title = get_bloginfo('name'); echo $blog_title;?></h1>
					<p><?php echo get_bloginfo ( 'description' );  ?></p>
				</div>
			</div>
			<nav class="left">
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'full navbar' ) ); ?>
				</ul>
			</nav>
			
		</div>
	</header>