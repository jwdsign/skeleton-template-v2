<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'content', 'entryheader' ); ?>
<div class="container">		
<?php get_template_part( 'content', 'page' ); ?>		

<?php endwhile; ?>

<?php get_template_part( 'content', 'nexpost' ); ?>

<?php else : ?>

<?php get_template_part( 'content', 'noposts' ); ?>

<?php endif; ?>
</div>

<?php get_footer(); ?>