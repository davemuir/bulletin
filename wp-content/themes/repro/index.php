
<?php get_header(); ?>

<?php

$tz_slider_display = get_option('tz_slider_display');
$tz_post_grid_display = get_option('tz_post_grid_display');
$tz_top_blocks = get_option('tz_top_blocks');
$tz_bottom_blocks = get_option('tz_bottom_blocks');
$tz_recent_title = get_option('tz_recent_title');
$tz_recent_number = get_option('tz_recent_number');

?>

<div id="the_body">

	   
	   <div class="container_12">
        <h4><span>Toronto's Latest</span></h4>
        <div id="the_middle">
			<div class="grid_8">
				<div id="top_news">
					
					
					<?php 
						  $my_query = new WP_Query('category_name=latest&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div id="latest_head">
							  <h1><?php the_title() ?></h1>
							 <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
						</div>
						<div id="latest_image">
							 <!--image-->
							 <?php the_post_thumbnail(array(300,220)) ?>
						</div>
						<div id="latest_excerpt">
							<div id="col1">
								<p>
								<?php echo substr(get_the_excerpt(), 0,340);
								?>
								</p>
						 	</div>
						 	<div id="col2">
								<p>
								<?php echo substr(get_the_excerpt(), 340,340);
										
								?>
								
								</p>
						 	</div>
						 
						</div> 	
					<?php endwhile; ?>

					

				</div><!--end topnews-->
			</div><!--end grid8-->	
			<div class="new_grid_4">
				<div id="socialIcons">
				
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FThe-Bulletin-Record-Zambia%2F153672558013677%3Fref%3Dts%26fref%3Dts&amp;send=false&amp;layout=box_count&amp;width=150&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=90&amp;appId=323978084354873" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:90px;" allowTransparency="true"></iframe>				
				
				</div>
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
					
					<a href="./wp-content/themes/repro/tscene/amusement_park_toronto_ontario_canada_photo_ottawa_tourism.jpeg"><img src="./wp-content/themes/repro/tscene/amusement_park_toronto_ontario_canada_photo_ottawa_tourism.jpeg "></a>
					<a href="./wp-content/themes/repro/tscene/Casa-Loma-Urban-Toronto.jpeg"><img src="./wp-content/themes/repro/tscene/Casa-Loma-Urban-Toronto.jpeg "></a>
					<a href="./wp-content/themes/repro/tscene/t1.jpeg"><img src="./wp-content/themes/repro/tscene/t1.jpeg "></a>
					<a href="./wp-content/themes/repro/tscene/tonipic2.jpeg"><img src="./wp-content/themes/repro/tscene/tonipic2.jpeg " data-title="guitar" data-big="./wp-content/themes/repro/images/tonipic2.jpeg"></a>
					<a href="./wp-content/themes/repro/tscene/toronto_05_04_03015.jpeg"><img src="./wp-content/themes/repro/tscene/toronto_05_04_03015.jpeg "></a>
					<a href="./wp-content/themes/repro/tscene/toronto-old-town-hall.jpeg"><img src="./wp-content/themes/repro/tscene/toronto-old-town-hall.jpeg "></a>
					<a href="./wp-content/themes/repro/tscene/TorontoEatonCentreGeese_CourtesyTorontoTourism.jpeg"><img src="./wp-content/themes/repro/tscene/TorontoEatonCentreGeese_CourtesyTorontoTourism.jpeg " data-title="guitar" data-big="./wp-content/themes/repro/images/TorontoEatonCentreGeese_CourtesyTorontoTourism.jpeg"></a>
					<a href="./wp-content/themes/repro/tscene/TorontoHummingbirdCentre_CourtesyTorontoTourism.jpeg"><img src="./wp-content/themes/repro/tscene/TorontoHummingbirdCentre_CourtesyTorontoTourism.jpeg "></a>
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
        	  <h4><span>Sectionals</span></h4>
              <div class="post_columns">
            
           
               	
               <?php $my_query = new WP_Query('category_name=arts-life&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column">
						  	  <h4><span><?php the_category();?></span></h4>
						  	  
						  	   <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        						<div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('column-preview'); ?></a></div>
        					<?php endif; ?>
        					
							  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							  <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
						
							
        					
							<div class="excerpt">
								<p><?php echo substr(get_the_excerpt(), 0, 150); ?>
								   <?php if(strlen(get_the_excerpt()) > 150) : ?>...<?php endif; ?> </p>
							</div><!--excerpt-->
						 
						 
						</div> 	
					<?php endwhile; ?>
					
					<?php $my_query = new WP_Query('category_name=business&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column">
						  	<h4><span><?php the_category();?></span></h4>
						  	 <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        						<div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('column-preview'); ?></a></div>
        					<?php endif; ?>
							 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							 <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
						
							
        					
							<div class="excerpt">
								<p><?php echo substr(get_the_excerpt(), 0, 150); ?>
								   <?php if(strlen(get_the_excerpt()) > 150) : ?>...<?php endif; ?> </p>
							</div><!--excerpt-->
						 
						 
						</div> 	
					<?php endwhile; ?>
                
                	<?php $my_query = new WP_Query('category_name=conspiracy&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column">
						  	<h4><span><?php the_category();?></span></h4>
						  	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        						<div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('column-preview'); ?></a></div>
        					<?php endif; ?>
							 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							 <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
						
							
        					
							<div class="excerpt">
								<p><?php echo substr(get_the_excerpt(), 0, 150); ?>
								   <?php if(strlen(get_the_excerpt()) > 150) : ?>...<?php endif; ?> </p>
							</div><!--excerpt-->
						 
						 
						</div> 	
					<?php endwhile; ?>
					
					<?php $my_query = new WP_Query('category_name=police&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column last">
						  	<h4><span><?php the_category();?></span></h4>
						  	 <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        						<div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('column-preview'); ?></a></div>
        					<?php endif; ?>
        					
							 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							 <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
						
							
							<div class="excerpt">
								<p><?php echo substr(get_the_excerpt(), 0, 150); ?>
								   <?php if(strlen(get_the_excerpt()) > 150) : ?>...<?php endif; ?> </p>
							</div><!--excerpt-->
						 
						 
						</div> 	
					<?php endwhile; ?>
					      
					      <div class="clear"></div>
					      
               <?php $my_query = new WP_Query('category_name=sports&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column">
						  	<h4><span><?php the_category();?></span></h4>
						  	 <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        						<div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('column-preview'); ?></a></div>
        					<?php endif; ?>
							  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							 <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
						
							
        					
							<div class="excerpt">
								<p><?php echo substr(get_the_excerpt(), 0, 150); ?>
								   <?php if(strlen(get_the_excerpt()) > 150) : ?>...<?php endif; ?> </p>
							</div><!--excerpt-->
						 
						 
						</div> 	
					<?php endwhile; ?>
					
					<?php $my_query = new WP_Query('category_name=talk&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column">
						  	<h4><span><?php the_category();?></span></h4>
						  	<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        						<div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('column-preview'); ?></a></div>
        					<?php endif; ?>
							 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							 <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
						
							 
        					
							<div class="excerpt">
								<p><?php echo substr(get_the_excerpt(), 0, 150); ?>
								   <?php if(strlen(get_the_excerpt()) > 150) : ?>...<?php endif; ?> </p>
							</div><!--excerpt-->
						 
						 
						</div> 	
					<?php endwhile; ?>
                
                	<?php $my_query = new WP_Query('category_name=latest&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column">
						  	<h4><span><?php the_category();?></span></h4>
						  	 <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        						<div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('column-preview'); ?></a></div>
        					<?php endif; ?>
							 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							 <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
						
							
        					
							<div class="excerpt">
								<p><?php echo substr(get_the_excerpt(), 0, 150); ?>
								   <?php if(strlen(get_the_excerpt()) > 150) : ?>...<?php endif; ?> </p>
							</div><!--excerpt-->
						 
						 
						</div> 	
					<?php endwhile; ?>
					
					<?php $my_query = new WP_Query('category_name=latest&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column last">
						  	<h4><span><?php the_category();?></span></h4>
						  	 <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) : /* if post has post thumbnail */ ?>
        						<div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('column-preview'); ?></a></div>
        					<?php endif; ?>
							 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							 <div class="date"><?php the_time( get_option('date_format') ); ?>,<br/><?php the_category('$seperator');?>, <?php comments_popup_link(__('No comments', 'framework'), __('1 Comment', 'framework'), __('% Comments', 'framework')); ?></div>
						
							
        					
							<div class="excerpt">
								<p><?php echo substr(get_the_excerpt(), 0, 150); ?>
								   <?php if(strlen(get_the_excerpt()) > 150) : ?>...<?php endif; ?> </p>
							</div><!--excerpt-->
						 
						 
						</div> 	
					<?php endwhile; ?>
            </div><!--grid_8 alpha omega or news8Col-->
    	
    	
    	<div class="clear"></div>
    </div><!--container_12-->

</div><!--the_body-->

<?php get_footer(); ?>