<?php  
/* 
Template Name: News Sidebar
*/  
?>  

<?php get_header(); ?>

<div id="index" class="container">
<header>Sidebar</header>
<section id="posts" class="twelve columns"><?php get_template_part( 'loop', 'index' );?></section>

<aside id="sidebar" class="four columns"><?php get_sidebar(); ?></aside>


</div>

<?php get_footer(); ?>