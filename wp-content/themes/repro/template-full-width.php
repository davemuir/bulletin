<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>
<div id="the_body">

    <div class="container_12">
        
        <div class="grid_12" id="fullwidth">
            	
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                
                <div class="grid_12 alpha omega">
                
                    <?php if ( function_exists('yoast_breadcrumb') ) : ?> <div class="breadcrumb"><?php yoast_breadcrumb(); ?></div><!--breadcrumb--><?php endif; ?>
                    
                    <div class="description">
                    
                        <h1><?php the_title(); ?></h1>
                         
                    </div><!--description-->
                    
                    <div class="clear"></div>
                    
                </div><!--grid_12 alpha omeg-->
            	
                <div class="grid_12 alpha omega">
                
                	<div id="content">
                    
                    	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        
                        <?php the_post_thumbnail('single-large'); ?>
                        
                        <?php endif; ?>
                        
                        <?php the_content(); ?>
                        
                        <div class="clear"></div>
                    
                    </div><!--content-->

                </div><!--grid_12 alpha omega-->
                
                                
                <?php endwhile; else: ?>
                    
                <div class="description">
                
                <?php
                
                if ( is_category() ) { // If this is a category archive
                    printf(__('<h1>Sorry, but there aren\'t any posts in the %s category yet.</h1>', 'framework'), single_cat_title('',false));
                } else if ( is_date() ) { // If this is a date archive
                    echo(__('<h1>Sorry, but there aren\'t any posts with this date.</h1>', 'framework'));
                } else if ( is_author() ) { // If this is a category archive
                    $userdata = get_userdatabylogin(get_query_var('author_name'));
                    printf(__('<h1>Sorry, but there aren\'t any posts by %s yet.</h1>', 'framework'), $userdata->display_name);
                } else {
                    echo(__('<h1>No posts found.</h1>', 'framework'));
                }
                get_search_form();
                ?>
                </div>
                <?php endif; ?>	
                
                <?php wp_reset_query(); ?>
           
                <?php comments_template('', true); ?>

            </div><!--grid_12-->
    
            <div class="clear"></div>
            
        </div><!--container_12-->
    
    </div><!--the_body-->

<?php get_footer(); ?>