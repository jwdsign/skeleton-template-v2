	<div class="entry-header">
	<div class="container">
	<?php 
		if (function_exists('nav_breadcrumb')) nav_breadcrumb(); 
		the_title( $before = '<h1 class="page-title">', $after = '</h1>', $echo = true );
	?>
	</div>
	</div>
