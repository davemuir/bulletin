<?php

$tz_recent_title = get_option('tz_recent_title');
$tz_recent_number = get_option('tz_recent_number');

?>

<div class="post_columns">

    <h4><span><?php echo ("Recent"/*$tz_recent_title*/); ?></span></h4>

    <?php 
	$query = new WP_Query();
	$query->query('posts_per_page=' . $tz_recent_number .'&ignore_sticky_posts=1');
	$i = 1;
	if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
    
    <div class="column <?php if( $i == 8 || $i == 4) : ?>last<?php endif; ?>">
    	
        <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        
        <div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('column-preview'); ?></a></div>
        
        <?php endif; ?>
        
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        
        <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
        
        <div class="excerpt">
            <p><?php echo substr(get_the_excerpt(), 0, 150); ?>
               <?php if(strlen(get_the_excerpt()) > 150) : ?>...<?php endif; ?> </p>
        </div><!--excerpt-->
    
    </div><!--column-->
    
    <?php $i++; ?>
    
    <?php endwhile; else: ?>
    
    <p><?php _e('No recent posts found.', 'framework'); ?></p>
    
    <?php endif; ?>
    
    <?php wp_reset_query(); ?>
    
    <div class="clear"></div>

</div><!--post_columns-->