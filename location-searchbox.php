<form name="search" action="" method="get">
  <select name="plz">
<?php 
  
  global $post;
    $tmp_post = $post;
    $args = array( 'post_type' => 'aussendienst', 'posts_per_page'=> -1 );
    $myposts = get_posts( $args );
    $locations = array();
  
  foreach( $myposts as $post ) : setup_postdata($post);
    $adr_plz = get_field('adresse-plz');
    echo "<option value=\"" . $adr_plz . "\">" . $adr_plz . "</option>";
  endforeach;

?>
  </select>
  <input type="submit" value="search" />
</form>

<?php
$myposts = $_GET['plz'];
if ($myposts) {
  
  $args = array(
  'post_type' => 'aussendienst',
  'meta_key' => 'adresse-plz',
  );
  
  query_posts($args);
} else {
  query_posts('post_type=aussendienst&posts_per_page=-1&meta_key=adresse-plz');
}

if ($myposts) { ?>
  <h3>Ihre Suche nach <?php echo $myposts; ?></h3>
  <?php } else { ?>
  <h3>Kürzlich hinzugefügt</h3>
  <?php }

if (have_posts()) :  while (have_posts()) : the_post();

$search_plz = get_post_meta($post->ID, 'adresse-plz', true); ?>

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

<?php endwhile;  ?>
<?php else : ?>
<?php get_template_part( 'content', 'noposts' ); ?>
<?php endif; ?>

<?php wp_reset_query(); ?>