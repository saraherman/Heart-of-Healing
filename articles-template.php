<?php
/*
Template Name: Articles template
*/
get_header(); ?>
<main>
	<div class="container white-wrap col-wrap shadow">
		<div class="column full">
			<div class="column two-thirds">
				<?php $args = array( 'post_type' => 'articles', 'order' => 'DESC' );
				$the_query = new WP_Query( $args );
				// The Loop
				echo "<h1><i class='fa fa-comments'></i>Articles</h1>";
				if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {

				$the_query->the_post();?>
				<div class="post">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><small class="fl-right"><i class="fa fa-map-marker"></i>San Diego, Ca</small></h2>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('thumbnail', array('class' => 'fl-left featured'));
					} ?>
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