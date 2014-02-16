<?php get_header(); ?>

<div id="author" class="container">

		<?php if ( have_posts() ) : ?>

			<?php the_post(); ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'All posts by %s'), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
			</header>

			<?php rewind_posts(); ?>

			<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php get_template_part( 'author-bio' ); ?>
			<?php endif; ?>

			<hr />
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

</div>


<?php get_footer(); ?>