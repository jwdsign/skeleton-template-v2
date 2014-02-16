<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php get_template_part( 'content', 'entryheader' ); ?>

<div class="entry-content">
	


		<?php
				 $terms = get_terms("tagportfolio");
				 $count = count($terms);
				 echo '<ul id="portfolio-filter">';
					echo '<li><a href="#all" title="">All</a></li>';
				 if ( $count > 0 ){
					
						foreach ( $terms as $term ) {
							
							$termname = strtolower($term->name);
							$termname = str_replace(' ', '-', $termname);
							echo '<li><a href="#'.$termname.'" title="" rel="'.$termname.'">'.$term->name.'</a></li>';
						}
				 }
				 echo "</ul>";
			?>
			
	
			<?php 
				$loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => -1));
				$count =0;
			?>
			
			<div id="portfolio-wrapper">
				<ul id="portfolio-list">
			
				<?php if ( $loop ) : 
					 
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
						<?php
						$terms = get_the_terms( $post->ID, 'tagportfolio' );
								
						if ( $terms && ! is_wp_error( $terms ) ) : 
							$links = array();

							foreach ( $terms as $term ) 
							{
								$links[] = $term->name;
							}
							$links = str_replace(' ', '-', $links);	
							$tax = join( " ", $links );		
						else :	
							$tax = '';	
						endif;
						?>
						
						<?php $infos = get_post_custom_values('_url'); ?>
						
						<li class="portfolio-item one-third column <?php echo strtolower($tax); ?> all">
							<a href="<?php the_permalink(); ?>">
							<div class="thumb"><?php the_post_thumbnail('medium'); ?></div>
							<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true )?>
							</a>
							<p class="links"><a href="http://<?php echo $infos[0]; ?>" rel="preview" target="_blank">Live Preview &rarr;</a> 
							<a href="<?php the_permalink() ?>" rel="details">More Details &rarr;</a></p>
						</li>
						
					<?php endwhile; else: ?>
					 
					<li class="error-not-found"><?php get_template_part( 'content', 'noposts' ); ?></li>
						
				<?php endif; ?>
			

				</ul>

				<div class="clearboth"></div>
			
			</div> <!-- end #portfolio-wrapper-->
		


</div>

</article>