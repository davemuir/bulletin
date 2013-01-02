<?php 

$tz_image_display = get_option('tz_image_display');

?>

<?php get_header(); ?>

<div id="the_body">
    
        <div class="container_12">
            
            <div class="grid_8" id="archive">
            	
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                
                <div class="grid_8 alpha omega">
                
                    <?php if ( function_exists('yoast_breadcrumb') ) : ?> <div class="breadcrumb"><?php yoast_breadcrumb(); ?></div><!--breadcrumb--><?php endif; ?>
                    
                    <div class="description">
                    
                        <h1><?php the_title(); ?></h1>
                         
                    </div><!--description-->
                    
                    <div class="clear"></div>
                    
                </div><!--grid_8 alpha omeg-->
            	
                <div class="grid_8 alpha omega">
                
                	<div id="content">
                    	
                        <?php if($tz_image_display == 'true') : ?>
                        
                    	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        
                        <?php the_post_thumbnail('single-large'); ?>
                        
                        <?php endif; ?>
                        
                        <?php endif; ?>
                        
                        <?php the_content(); ?>
                        
                        <div class="clear"></div>
                    
                    </div><!--content-->

                </div><!--grid_8 alpha omega-->
                
                <?php endwhile; endif; ?>
               
               <?php wp_reset_query(); ?>
                                
                <?php comments_template('', true); ?>

            </div><!--grid_8-->
            
            <div class="grid_4">
            	<div id="socialIcons">
				<div style="float:left;width:150px;height:36px;">
					<div class="fb-like" data-href="http://www.facebook.com/pages/The-Bulletin-Record-Zambia/153672558013677?ref=ts&amp;fref=ts" data-send="true" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>		
				</div>
				<div style="float:left;width:150px;height:36px;">
					    <a href="https://twitter.com/TheBulletinca" class="twitter-follow-button" data-show-screen-name="false" data-show-count="true" show_screen_name="true" data-lang="en">Follow @thebulletinca</a>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				</div>
				<?php get_sidebar(); ?>
              
            </div><!--grid_4-->
    
            <div class="clear"></div>
            
        </div><!--container_12-->
    
    </div><!--the_body-->

<?php get_footer(); ?>