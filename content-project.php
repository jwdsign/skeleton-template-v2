<?php $infos = get_post_custom_values('_url'); ?>
	
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php get_template_part( 'content', 'entryheader' ); ?>

<div class="entry-content">
	<?php the_content(__('Continue reading', 'example')); ?>
	<a href="http://<?php echo $infos[0]; ?>" rel="preview" target="_blank">Live Preview &rarr;</a>
</div>

</article>