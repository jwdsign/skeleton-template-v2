<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
<article class="child-page eight columns">
<?php 
		if ( has_post_thumbnail() ) { 
  		the_post_thumbnail('medium');
		} 
		the_title( $before = '<h3 class="page-teaser">', $after = '</h3>', $echo = true );
	?>
</article>
</a>