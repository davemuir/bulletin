
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
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
						 <?php if ( in_category('1') ) { ?>
								   <div id="top_news">
						 <?php } else { ?>
								   <div class="post">
						 <?php } ?>
						
						
						 <!-- Display the Title as a link to the Post's permalink. -->
						
						 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						
						
						 <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
						
						 <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
						
						
						 <!-- Display the Post's content in a div box. -->
						
						 <div class="entry">
						   <?php the_content(); ?>
						 </div>
						
						
						 <!-- Display a comma separated list of the Post's Categories. -->
						
						 <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
						 </div> <!-- closes the first div box -->
						
						
						 <!-- Stop The Loop (but note the "else:" - see next line). -->
					
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>

				</div>
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