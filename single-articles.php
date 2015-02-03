<?php get_header(); ?>
<main>
	<div class="container white-wrap col-wrap shadow">
		<div class="column full">
			<div class="column two-thirds">
				<?php while ( have_posts() ) : the_post(); ?>  
				<h1><?php the_title(); ?></h1>  
				<div class="post-content">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('thumbnail', array('class' => 'thumbnail fl-left'));
					} ?>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?> 
			<hr/>
			</div>
			<?php get_sidebar('right'); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>