	<footer>
		<div class="container">
			<div class="col-wrap">
				<div class="column half">
					<p>&copy; <?php 
						$firstDate = 2015;
						if($firstDate ==date('Y')){
						echo $firstDate . " Heart of Healing";
						}
						else{
							echo $firstDate . " - " . date('Y') . " Heart of Healing";
						}; ?></p>
					
				</div>
				<div class="column half">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'white-nav' ) ); ?>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>