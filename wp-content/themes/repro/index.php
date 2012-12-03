
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
        	
            <?php if($tz_slider_display == 'true') : ?>
            
            <?php get_template_part('index', 'slider'); ?>
            
            <?php endif; ?>
            
            <div class="grid_8 alpha omega">
            
                <?php get_template_part('index', 'post-columns'); ?>
                
            </div><!--grid_8 alpha omega-->
            
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
    	<?php if($tz_post_grid_display == 'true') : ?>
            
            <div class="grid_8 alpha omega">
            
                <?php get_template_part('index', 'post-grid'); ?>
            
            </div><!--grid_8 alpha omega-->
            
           <?php endif; ?>
            
            <?php if($tz_top_blocks == 'true') : ?>
    
    
    <div class="container_12">
    	
    </div><!--container_12-->

</div><!--the_body-->

<?php get_footer(); ?>