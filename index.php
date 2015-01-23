<?php get_header(); ?>
<main>
	
		<div class="container">
			<div class="white-wrap">
				<div class='col-wrap'></div>
					<div class="column two-thirds">
						<?php while ( have_posts() ) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
					<?php get_sidebar('right'); ?>
				</div>
			
			</div>
		</div>
	
</main>
<?php get_footer(); ?>