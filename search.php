<?php get_header(); ?>

<div class="container">
<h1 class="page-title"><?php printf( __( 'Search Results for: %s' ), get_search_query() ); ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
<article id="page-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<div class="entry-header">
	<a href="<?php the_permalink(); ?>">
	<?php the_title( $before = '<h2 class="entry-title sixteen columns">', $after = '</h2>', $echo = true )?>
	</a>
	<div class="one-third column"><?php	if ( has_post_thumbnail() ) { 
  			the_post_thumbnail('medium');
			} 
	?>
	</div>

<div class="two-thirds column"><?php the_excerpt(); ?></div>


</article>	

<?php endwhile; ?>

<?php get_template_part( 'content', 'nexpost' ); ?>

<?php else : ?>

<?php get_template_part( 'content', 'noposts' ); ?>

<?php endif; ?>
</div>

<?php get_footer(); ?>