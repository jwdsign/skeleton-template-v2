<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	if ( has_post_thumbnail() ) { 
  		the_post_thumbnail('large');
		}
?>
<?php get_template_part( 'content', 'entrycontent' ); ?>

</article>