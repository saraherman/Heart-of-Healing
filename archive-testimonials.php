<?php get_header(); ?>
<main>
	<div class="container white-wrap col-wrap shadow">
		<div class="column full">
			<div class="column two-thirds">
				<h2><?php post_type_archive_title(); ?></h2>
				<?php $args = array( 'post_type' => 'testimonials', 'order' => 'DESC' );
				$the_query = new WP_Query( $args );
				// The Loop
				if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {

				$the_query->the_post();?>
				<div class="post">
					<?php the_post_thumbnail(); ?>
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?><h3></a>
					<p><?php the_excerpt(); ?></p>

				</div>
				<?php 
			} } else {
					// no posts found
			}; 
			?>
			</div>
			<?php get_sidebar('right'); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>