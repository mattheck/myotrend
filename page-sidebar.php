<?php 
/*template name: Sidebar*/
get_header(); ?>

<?php nectar_page_header($post->ID); ?>

<div class="container-wrap">
	
	<div class="container main-content">
		
		<div class="row">
			
			<div id="post-area" class="col span_9">
				<?php 
				
				if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					<?php the_content(); ?>
	
				<?php endwhile; endif; ?>
				
			</div><!--/span_9-->
			
			<div id="sidebar" class="col span_3 col_last">
				<?php get_sidebar(); 

				$my_sliders = new RevSlider();
 
				$my_slider_array = $my_sliders->getAllSliderAliases();
 
				$my_slider_keys = array_keys($my_slider_array);
				$my_random_slider_alias = $my_slider_array[$my_slider_keys[rand(0, count($my_slider_keys) - 1)]];

				putRevSlider($my_random_slider_alias); 
				
				?>
				
			</div><!--/span_9-->
			
		</div><!--/row-->
		
	</div><!--/container-->

</div><!--/container-wrap-->

<?php get_footer(); ?>

