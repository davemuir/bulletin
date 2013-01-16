
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
							  <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
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
								...<a class="readMores" href="<?php the_permalink(); ?>">Read More</a>
								</p>
						 	</div>
						 
						</div> 	
					<?php endwhile; ?>
					
				</div><!--end topnews-->
			</div><!--end grid8-->	
			<div class="new_grid_4">
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
        </div><!--end middle-->
        
    </div><!--container_12-->
    
    <div class="container_12">
        <h4 class="hfour"><span> Down-town Seen </span></h4>
        <div id="the_middle">
			
			<div class="grid_8">
				
				<div id="galleria">
				
					
					<!-- Begin DWUser_EasyRotator -->
					<script type="text/javascript" src="http://c520866.r66.cf2.rackcdn.com/1/js/easy_rotator.min.js"></script>
					<div class="dwuserEasyRotator" style="width: 620px; height: 448px; position:relative; text-align: left;" data-erConfig="{autoplayEnabled:false, lpp:'102-105-108-101-58-47-47-47-85-115-101-114-115-47-49-47-68-111-99-117-109-101-110-116-115-47-69-97-115-121-82-111-116-97-116-111-114-80-114-101-118-105-101-119-47-112-114-101-118-105-101-119-95-115-119-102-115-47', wv:1}" data-erName="main slider" data-erTID="{8s6bdl8rk7395158728531}">
						<div data-ertype="content" style="display: none;"><ul data-erlabel="Main Category">
						<li>
							<img class="main" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/amusement_park_toronto_ontario_canada_photo_ottawa_tourism.jpeg" />
							<img class="thumb" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/amusement_park_toronto_ontario_canada_photo_ottawa_tourism.jpeg" />
						</li>
						<li>
							<img class="main" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/Casa-Loma-Urban-Toronto.jpeg" />
							<img class="thumb" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/Casa-Loma-Urban-Toronto.jpeg" />
						</li>
						<li>
							<img class="main" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/t1.jpeg" />
							<img class="thumb" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/t1.jpeg" />
						</li>
						<li>
							<img class="main" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/tonipic2.jpeg" />
							<img class="thumb" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/tonipic2.jpeg" />
						</li>
						<li>
							<img class="main" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/toronto-old-town-hall.jpeg" />
							<img class="thumb" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/toronto-old-town-hall.jpeg" />
						</li>
						<li>
							<img class="main" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/toronto_05_04_03015.jpeg" />
							<img class="thumb" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/toronto_05_04_03015.jpeg" />
						</li>
						<li>
							<img class="main" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/TorontoEatonCentreGeese_CourtesyTorontoTourism.jpeg" />
							<img class="thumb" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/TorontoEatonCentreGeese_CourtesyTorontoTourism.jpeg" />
						</li>
						<li>
							<img class="main" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/TorontoHummingbirdCentre_CourtesyTorontoTourism.jpeg" />
							<img class="thumb" src="http://bulletinstaging.herokuapp.com/wp-content/themes/repro/tscene/TorontoHummingbirdCentre_CourtesyTorontoTourism.jpeg" />
						</li>
					</ul>
					</div>
						<div data-ertype="layout" data-ertemplateName="NONE" style="">			<div class="erimgMain" style="position: absolute; left:0;right:0;top:0;bottom:0;" data-erConfig="{___numTiles:3, scaleMode:'fillArea', imgType:'main', __loopNextButton:false, arrowButtonMode:'rollover'}">
									<div class="erimgMain_slides" style="position: absolute; left:0px; top:0; bottom:0; right:0px;">
										<div class="erimgMain_slide">
											<div class="erimgMain_img" style="position: absolute; left: 0; right: 0; top: 0; bottom: 0;"></div>
										</div>
									</div>
									<div class="erimgMain_arrowLeft" style="position:absolute; left: 10px; top: 50%; margin-top: -15px;" data-erConfig="{image:'circleSmall', image2:'circleSmall'}"></div>
									<div class="erimgMain_arrowRight" style="position:absolute; right: 10px; top: 50%; margin-top: -15px;"></div>
								</div>
								<div class="erimgMain rotatorTileNav" style="position: absolute; left:27px;width:490px;bottom:20px;height:64px;" data-erConfig="{numTiles:5, scaleMode:'fillArea', imgType:'thumb', loopNextButton:false, arrowButtonMode:'rollover', __slideLinkEvent:'rollover'}">
									<div class="erimgMain_slides" style="position: absolute; left:0px; top:0; bottom:0; right:0px;">
										<div class="erimgMain_slide">
											<div class="selectionArrow visibleWhenSelected" style="position: absolute; top: 0; left: 0; right: 6px; bottom: 0; background: #FFF;"></div>
											<div class="erimgMain_img" style="position: absolute; left: 2px; right: 8px; top: 2px; bottom: 2px; border: 2px solid #FFF;"></div>
										</div>
									</div>
									<!-- 
									<div class="erimgMain_arrowLeft" style="position:absolute; left: 60px; top: 50%; margin-top: -10px;" data-erConfig="{image:'circleSmall', image2:'circleSmall'}"></div>
									<div class="erimgMain_arrowRight" style="position:absolute; right: 60px; top: 50%; margin-top: -10px;"></div>
									-->
								</div><div class="erabout erFixCSS3" style="color: #FFF; text-align: left; background: #000; background:rgba(0,0,0,0.93); border: 2px solid #FFF; padding: 20px; font: normal 11px/14px Verdana,_sans; width: 300px; border-radius: 10px; display:none;">
								This <a style="color:#FFF;" href="http://www.dwuser.com/easyrotator/" target="_blank">jQuery slider</a> was created with the free <a style="color:#FFF;" href="http://www.dwuser.com/easyrotator/" target="_blank">EasyRotator</a> software from DWUser.com.
								<br /><br />
								Use WordPress? The free <a style="color:#FFF;" href="http://www.dwuser.com/easyrotator/wordpress/" target="_blank">EasyRotator for WordPress</a> plugin lets you create beautiful <a style="color:#FFF;" href="http://www.dwuser.com/easyrotator/wordpress/" target="_blank">WordPress sliders</a> in seconds.
								<br /><br />
								<a style="color:#FFF;" href="#" class="erabout_ok">OK</a>   
							</div>
							<noscript>
								Rotator powered by <a href="http://www.dwuser.com/easyrotator/">EasyRotator</a>, a free and easy jQuery slider builder from DWUser.com.  Please enable JavaScript to view.
							</noscript>
							<script type="text/javascript">/*Avoid IE gzip bug*/(function(b,c,d){try{if(!b[d]){b[d]="temp";var a=c.createElement("script");a.type="text/javascript";a.src="http://easyrotator.s3.amazonaws.com/1/js/nozip/easy_rotator.min.js";c.getElementsByTagName("head")[0].appendChild(a)}}catch(e){alert("EasyRotator fail; contact support.")}})(window,document,"er_$144");</script>
						
						</div>
					</div>
					<!-- End DWUser_EasyRotator -->
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
            
           
               	
               <?php $my_query = new WP_Query('category_name=latest&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column_cat">
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
					
					<?php $my_query = new WP_Query('category_name=localnews&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column_cat">
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
                
                	<?php $my_query = new WP_Query('category_name=politics&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column_cat">
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
					
					<?php $my_query = new WP_Query('category_name=arts-life&posts_per_page=1');
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
					      
               <?php $my_query = new WP_Query('category_name=opinion&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column_cat">
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
					
					<?php $my_query = new WP_Query('category_name=law&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column_cat">
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
                
                	<?php $my_query = new WP_Query('category_name=inspiration&posts_per_page=1');
						  while ($my_query->have_posts()) : $my_query->the_post();
						  $do_not_duplicate = $post->ID; ?>
						  
						  <div class="column_cat">
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
					
					<?php $my_query = new WP_Query('category_name=intrigues&posts_per_page=1');
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