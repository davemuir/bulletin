
<?php get_header(); ?>

<?php

$tz_slider_display = get_option('tz_slider_display');
$tz_post_grid_display = get_option('tz_post_grid_display');
$tz_top_blocks = get_option('tz_top_blocks');
$tz_bottom_blocks = get_option('tz_bottom_blocks');

?>

<div id="the_body">

    <div class="container_12">
        
        <div class="grid_8">
        	<h4 class="hfour">&embsp;<span>&embsp; Toronto Scene </span></h4>
        	<div id="galleria">
        		<!--make looping photo addition-->
        		<a href="./wp-content/themes/repro/tscene/1Eq7Y.jpg"><img src="./wp-content/themes/repro/tscene/1Eq7Y.jpg" data-description="a universe"></a>
        		<a href="./wp-content/themes/repro/tscene/551135_10150827479526173_506396172_9902842_477219287_n.jpg"><img src="./wp-content/themes/repro/tscene/551135_10150827479526173_506396172_9902842_477219287_n.jpg "></a>
        		<a href="./wp-content/themes/repro/tscene/game-of-thrones-jon-snow.jpg"><img src="./wp-content/themes/repro/tscene/game-of-thrones-jon-snow.png "></a>
        		<a href="./wp-content/themes/repro/tscene/Orion-M43-nebula-enhanced.jpg"><img src="./wp-content/themes/repro/tscene/Orion-M43-nebula-enhanced.jpg "></a>
        		<a href="./wp-content/themes/repro/tscene/deran.jpg"><img src="./wp-content/themes/repro/tscene/deran.jpg " data-title="guitar" data-big="./wp-content/themes/repro/images/deran.jpg"></a>
        		<a href="./wp-content/themes/repro/tscene/Uwy8J.jpg"><img src="./wp-content/themes/repro/tscene/Uwy8J.jpg "></a>
        		<a href="./wp-content/themes/repro/images/1Eq7Y.jpg"><img src="./wp-content/themes/repro/tscene/1Eq7Y.jpg "></a>
        		<a href="./wp-content/themes/repro/tscene/deran.jpg"><img src="./wp-content/themes/repro/tscene/551135_10150827479526173_506396172_9902842_477219287_n.jpg "></a>
        		<a href="./wp-content/themes/repro/tscene/deran.jpg"><img src="./wp-content/themes/repro/tscene/game-of-thrones-jon-snow.png "></a>
        		<a href="./wp-content/themes/repro/tscene/Orion-M43-nebula-enhanced.jpg"><img src="./wp-content/themes/repro/tscene/Orion-M43-nebula-enhanced.jpg "></a>
        		<a href="./wp-content/themes/repro/tscene/deran.jpg"><img src="./wp-content/themes/repro/tscene/deran.jpg " data-title="guitar" data-big="./wp-content/themes/repro/images/deran.jpg"></a>
        		<a href="./wp-content/themes/repro/tscene/Uwy8J.jpg"><img src="./wp-content/themes/repro/tscene/Uwy8J.jpg "></a>
        		<script>
   				 Galleria.loadTheme('./wp-content/themes/repro/themes/classic/galleria.classic.min.js');
   				 Galleria.run('#galleria', {
    				transition: 'fade'
				});
				</script>
        	</div>
        	
            <?php if($tz_slider_display == 'true') : ?>
            
            <?php get_template_part('index', 'slider'); ?>
            
            <?php endif; ?>
            
            
            
            <?php if($tz_post_grid_display == 'true') : ?>
            
            <div class="grid_8 alpha omega">
            
                <?php get_template_part('index', 'post-grid'); ?>
            
            </div><!--grid_8 alpha omega-->
            
            <?php endif; ?>
            
            <?php if($tz_top_blocks == 'true') : ?>
            
            <div class="grid_8 alpha omega">
            
                <div class="grid_4 alpha">
            
                    <?php get_template_part('index', 'category-list-one'); ?>
                    
                </div><!--grid_4-->
                
                <div class="grid_4 omega">
                
                    <?php get_template_part('index', 'category-list-two'); ?>
                    
                </div><!--grid_4-->
            
            </div><!-- grid_8 alpha omega-->
            
            <?php endif; ?>
            
            <?php if($tz_bottom_blocks == 'true') : ?>
            
            <div class="grid_8 alpha omega">
            
                <div class="grid_4 alpha">
            
                    <?php get_template_part('index', 'category-list-three'); ?>
                    
                </div><!--grid_4-->
                
                <div class="grid_4 omega">
                
                    <?php get_template_part('index', 'category-list-four'); ?>
                    
                </div><!--grid_4-->
            
            </div><!-- grid_8 alpha omega-->
            
            <?php endif; ?>
    
        </div><!--grid_8-->
        
        <div class="grid_4" style="margin-right: 0;">
        
            <?php get_sidebar(); ?>
          
        </div><!--grid_4-->

        <div class="clear"></div>
        
    </div><!--container_12-->
    	
    
    
    <div class="container_12">
    	
    	<div class="grid_12 alpha omega">
            
                <?php get_template_part('index', 'post-columns'); ?>
                
            </div><!--grid_8 alpha omega-->
    	
    	
    	<div class="clear"></div>
    </div><!--container_12-->

</div><!--the_body-->

<?php get_footer(); ?>