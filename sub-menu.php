<nav id="sub-navigation">
<div class="container">
<?php
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul class="sixteen columns">
  <?php echo $children; ?>
  </ul>
  <?php } ?>
</div>
</nav>
