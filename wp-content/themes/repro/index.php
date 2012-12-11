
<?php get_header(); ?>

<?php

$tz_slider_display = get_option('tz_slider_display');
$tz_post_grid_display = get_option('tz_post_grid_display');
$tz_top_blocks = get_option('tz_top_blocks');
$tz_bottom_blocks = get_option('tz_bottom_blocks');

?>

<div id="the_body">

	   <div class="container_12">
        <h4><span>Toronto's Latest</span></h4>
        <div id="the_middle">
			<!--includes slider-->
			<div class="grid_8">
				<div id="top_news">
					
					
					<?php $my_query = new WP_Query('category_name=latest&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div id="latest_head">
							  <h1><?php the_title() ?></h1>
							  <h6><?php the_time(get_option('date_format')) ?></h6>
						</div>
						<div id="latest_image">
							 <!--image-->
							 <?php the_post_thumbnail(array(300,228)) ?>
						</div>
						<div id="latest_excerpt">
						
						 	<!--<?php the_excerpt_max_charlength(100);?>-->
						 
						</div> 	
					<?php endwhile; ?>

					

				</div><!--end topnews-->
			</div><!--end grid8-->	
			<div class="new_grid_4">
	
				<?php get_sidebar(); ?>
	  
			 </div><!--grid_4-->
			 
			 <div class="clear"></div>
        </div><!--end middle-->
        
    </div><!--container_12-->
    
    <div class="container_12">
        <h4 class="hfour"><span> Toronto Scene </span></h4>
        <div id="the_middle">
			<!--includes slider-->
			<div class="grid_8">
				
				<div id="galleria">
					<!--make looping photo addition-->
					
					<a href="./wp-content/themes/repro/tscene/551135_10150827479526173_506396172_9902842_477219287_n.jpg"><img src="./wp-content/themes/repro/tscene/551135_10150827479526173_506396172_9902842_477219287_n.jpg "></a>
					<a href="./wp-content/themes/repro/tscene/game-of-thrones-jon-snow.png"><img src="./wp-content/themes/repro/tscene/game-of-thrones-jon-snow.png "></a>
					<a href="./wp-content/themes/repro/tscene/Orion-M43-nebula-enhanced.jpg"><img src="./wp-content/themes/repro/tscene/Orion-M43-nebula-enhanced.jpg "></a>
					<a href="./wp-content/themes/repro/tscene/deran.jpg"><img src="./wp-content/themes/repro/tscene/deran.jpg " data-title="guitar" data-big="./wp-content/themes/repro/images/deran.jpg"></a>
					<a href="./wp-content/themes/repro/tscene/Uwy8J.jpg"><img src="./wp-content/themes/repro/tscene/Uwy8J.jpg "></a>
					<a href="./wp-content/themes/repro/tscene/Orion-M43-nebula-enhanced.jpg"><img src="./wp-content/themes/repro/tscene/Orion-M43-nebula-enhanced.jpg "></a>
					<a href="./wp-content/themes/repro/tscene/deran.jpg"><img src="./wp-content/themes/repro/tscene/deran.jpg " data-title="guitar" data-big="./wp-content/themes/repro/images/deran.jpg"></a>
					<a href="./wp-content/themes/repro/tscene/Uwy8J.jpg"><img src="./wp-content/themes/repro/tscene/Uwy8J.jpg "></a>
					<script>
					 Galleria.loadTheme('./wp-content/themes/repro/themes/classic/galleria.classic.min.js');
					 Galleria.run('#galleria', {
						transition: 'fade',
						autoplay:true,
						autoplay:4000,
						pauseOnInteraction:true,
						thumbCrop:true
					});
					</script>
				</div>
			</div><!--end grid8-->	
			<div class="new_grid_4">
	
				<?php get_sidebar(); ?>
	  
			 </div><!--grid_4-->
			 
			 <div class="clear"></div>
        </div><!--end middle-->
        
    </div><!--container_12-->
    	
    
    
    <div class="container_12">
    	
    	<div class="grid_12 alpha omega">
            
                <?php get_template_part('index', 'post-columns'); ?>
                
            </div><!--grid_8 alpha omega-->
    	
    	
    	<div class="clear"></div>
    </div><!--container_12-->

</div><!--the_body-->

<?php get_footer(); ?>