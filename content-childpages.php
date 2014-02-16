<div class="entry-subpages clearfix">
<h2 class="sixteen columns">Also of note:</h2>

<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

    <?php get_template_part( 'content', 'pageteaser' ); ?>

    <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>

</div>