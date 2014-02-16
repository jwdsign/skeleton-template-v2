<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'content', 'entryheader' ); ?>
<div class="container">		

<div class="map">

<div class="map-description">
<h3 class="sixteen columns"><?php the_field('adresse-name');?></h3>

<div class="row">
<div class="photo one-third column"><?php the_post_thumbnail(); ?> </div>
<div class="map-copy two-thirds column"><?php the_field('adresse-beschreibung');?></div>
</div>

</div>

<div class="row">

<div class="map-address eight columns">
<div><?php the_field('adresse-strasse');?></div>
<div><?php the_field('adresse-plz');?>, <?php the_field('adresse-ort');?></div>
<div><?php the_field('adresse-region');?>, <?php the_field('adresse-land');?></div>
</div>

<div class="map-contact eight columns">
<div><a href="teil:<?php the_field('kontakt-telefon');?>" rel="nofollow"><?php the_field('kontakt-telefon');?></a></div>
<div><a href="mailto:<?php the_field('kontakt-email');?>" rel="nofollow">E-Mail schreiben</a></div>
<div><a href="http://<?php the_field('kontakt-website');?>" target="_blank" title="Die Website von <?php the_field('adresse-name');?>"><?php the_field('kontakt-website');?></a></div>
</div>

</div>

<div class="map-object">
<?php
	
	$adr_title = get_field('adresse-name');
	$adr_body = get_field('adresse-beschreibung');

	//set up the map array
	$adr_arr = array();
	//get the ACF values
	$adr_arr[] = get_field('adresse-strasse');
	$adr_arr[] = get_field('adresse-plz');
	$adr_arr[] = get_field('adresse-ort');
	$adr_arr[] = get_field('adresse-region');
	$adr_arr[] = get_field('adresse-land');
	//convert the array to a string
	$adr_string = implode (' ', $adr_arr);  

	//setting up the map
	$mymap = new Mappress_Map(array("width" => 960, 'height' => 480));
	$address = $adr_string;
	$mypoi_1 = new Mappress_Poi(array("title" => $adr_title, "body" => $adr_body, "address" => $address ));
	$mypoi_1->geocode(); 
	$mymap->pois = array($mypoi_1);
	echo $mymap->display();
?>
</div>

</div>

<?php endwhile; ?>

<?php get_template_part( 'content', 'nexpost' ); ?>

<?php else : ?>

<?php get_template_part( 'content', 'noposts' ); ?>

<?php endif; ?>
</div>

<?php get_footer(); ?>