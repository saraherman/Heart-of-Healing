<?php
/*
Template Name: No Sidebar Page
*/
get_header(); ?>
	<main>
		<div class="container white-wrap col-wrap shadow">
			<div class="column two-thirds">
				<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</main>

<?php get_footer(); ?>