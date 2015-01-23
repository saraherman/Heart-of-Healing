<?php get_header(); ?>
<main>
	<div class="container">
		<div class="white-wrap col-wrap shadow">
			
				<div class="column two-thirds">
					<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('medium', array('class' => 'thumbnail fl-left'));
					} ?>
					<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
				<?php get_sidebar('right'); ?>
			
		
		</div>
	</div>
	
</main>
<?php get_footer(); ?>