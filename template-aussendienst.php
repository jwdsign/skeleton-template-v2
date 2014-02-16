<?php  
/* 
Template Name: Aussendienst 
*/  
?>  

<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'content', 'entryheader' ); ?>
<div class="container">		


<section id="adm-liste" class="row">

<div class="adm-list one-third column">

<ul>
<?php

$args = array (
	'post_type' => 'aussendienst',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>

<li>
<a href="<?php the_permalink();?>" target="_blank">
<article class="adm-entry">
<?php the_post_thumbnail(array(32,32)); ?>
<div><strong><?php the_field('adresse-name');?></strong></div>
<div><?php the_field('adresse-strasse');?></div>
<div><?php the_field('adresse-plz');?>, <?php the_field('adresse-ort');?></div>
<div><?php the_field('adresse-region');?>, <?php the_field('adresse-land');?></div>
</article>
</a>
</li>

<?php	}
} else { 
get_template_part( 'content', 'noposts' ); 
 }
wp_reset_postdata(); ?>
</ul>
</div>

<div class="two-thirds column">
<?php 

$mymap = new Mappress_Map(array("width" => 800, "height" => 800));

global $post;
$tmp_post = $post;
$args = array( 'post_type' => 'aussendienst', 'posts_per_page'=> -1 );
$myposts = get_posts( $args );

$locations = array();
foreach( $myposts as $post ) : setup_postdata($post);

	$adr_title = get_field('adresse-name');
	$adr_body = get_field('adresse-beschreibung');

	$adr_arr = array();
	$adr_arr[] = get_field('adresse-strasse');
	$adr_arr[] = get_field('adresse-plz');
	$adr_arr[] = get_field('adresse-ort');
	$adr_arr[] = get_field('adresse-region');
	$adr_arr[] = get_field('adresse-land');
	$adr_string = implode (' ', $adr_arr); 

    $mypoi = new Mappress_Poi(array(
        "title" => $adr_title, 
        "body" => $adr_body, 
        "address" => $adr_string
    ));

    $mypoi->geocode(); 

    $locations[] = $mypoi;
endforeach;

$post = $tmp_post; 

$mymap->pois = $locations; 
echo $mymap->display();
?>
</div>


</section>
		

<?php endwhile; ?>

<?php get_template_part( 'content', 'nexpost' ); ?>

<?php else : ?>

<?php get_template_part( 'content', 'noposts' ); ?>

<?php endif; ?>

<?php get_footer(); ?>