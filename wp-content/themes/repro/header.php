<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<!-- A ThemeZilla design (http://www.themezilla.com) - Proudly powered by WordPress (http://wordpress.org) -->

<!-- BEGIN head -->
<head>

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<!-- Title -->
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        
    <!-- Colour -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/colour.php" type="text/css" media="screen" />
	
	<!-- RSS, Atom & Pingbacks -->
	<!-- RSS & Pingbacks -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php if (get_option('tz_feedburner')) { echo get_option('tz_feedburner'); } else { bloginfo( 'rss2_url' ); } ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php wp_head(); ?>


<!-- END head -->
</head>

<!-- BEGIN body -->
<body <?php body_class(); ?>>

<div id="header">
        
    <div id="top">
    
        <div class="container_12">
        
        	<?php
                
            $tz_feedburner = get_option('tz_feedburner');
            $tz_feedburner_email = get_option('tz_feedburner_email');
            
            ?>
            
            <?php if($tz_feedburner != '' || $tz_feedburner_email != '') : ?>
        
            <div class="grid_3">
                  
                <div id="rss">

                	<span><?php _e('Subscribe', 'framework') ?></span> 
					<?php _e('By', 'framework') ?> 
					
					<?php if($tz_feedburner != '') : ?>
					<a href="<?php echo $tz_feedburner; ?>"><?php _e('RSS', 'framework') ?></a>
					<?php endif; ?>
					
					<?php if($tz_feedburner != '' && $tz_feedburner_email != '') : ?>
					<?php _e('or', 'framework') ?>
					<?php endif; ?> 
					
					<?php if($tz_feedburner_email != ''): ?>
                	<a href="<?php echo $tz_feedburner_email;?>"><?php _e('Email', 'framework') ?></a>
                	<?php endif; ?>
                
                </div><!--rss-->
              
            </div><!--grid_3-->
            
            <?php endif; ?>
            
            <div class="grid_9 right">
            
                <div id="second_nav">
                
                    <?php if ( has_nav_menu( 'secondary-menu' ) ) : /* if menu location 'secondary-menu' exists then use custom menu */ ?>
					<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'menu_class' => 'sf-menu', 'container' => '' ) ); ?>
					<?php else: /* else use wp_page_menu
					if the home link is set to true in theme options then show "home" button
					if excluded categories are set in theme options then exclude from menu */
					
					$tz_home_link = get_option('tz_home_link'); 
					$tz_nav_exclude = get_option('tz_nav_exclude'); 
					$tz_nav_order  = get_option('tz_nav_order'); 
					
					?>
                    <ul class="sf-menu">
                    
                    	<?php if ($tz_home_link == "true") : ?>
                    	<li><a href="<?php bloginfo('url'); ?>"><?php _e('Home', 'framework'); ?></a></li>
                        <?php endif; ?>
                        
                        <?php wp_list_pages( array( 'exclude' => $tz_nav_exclude, 'title_li' => '', 'sort_column' => $tz_nav_order, )); ?>
                        
                    </ul>
                    <?php endif; ?>
                
                </div><!--second_nav-->
            
            </div><!--grid_9-->
            
            <div class="clear"></div>

        </div><!--container_12-->
    
    </div><!--top-->
    
    <div id="bottom">
    
        <div class="container_12">
        
            <div class="grid_5">
            
              <div id="logo">
                
                <?php /*
                
				If "plain text logo" is set in theme options then use text
				if a logo url has been set in theme options then use that
				if none of the above then use the default logo.png */
				
				$tz_plain_logo = get_option('tz_plain_logo');
				$tz_logo_url = get_option('tz_logo_url');
				$tz_banner_header = get_option('tz_banner_header');
				$tz_banner_adsense = get_option('tz_banner_adsense');
				$tz_banner_dest_url = get_option('tz_banner_dest_url');
				$tz_banner_img_url = get_option('tz_banner_img_url');
				$tz_primary_nav_exclude = get_option('tz_primary_nav_exclude');
				
				if ($tz_plain_logo == "true") : ?>
                
				<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<p id="tagline"><?php bloginfo( 'description' ); ?></p>
                
				<?php elseif ($tz_logo_url) : ?>
                
				<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo ($tz_logo_url); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                
				<?php else : ?>
                
				<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
                
				<?php endif; ?>
              
              </div><!--logo-->
              
            </div><!--grid_5-->
			
            <?php if ($tz_banner_header == "true") : /* Display 468x60 banner if checked in theme options */ ?>
            
            <div class="grid_7">
            
              <div id="header_advert">
              	
                <?php if($tz_banner_adsense == '') : // if there is no adsense data, then just display the image?>
                
                <a href="<?php echo ($tz_banner_dest_url); ?>"><img src="<?php echo ($tz_banner_img_url); ?>" alt="banner" width="468" height="60" /></a>
                
                <?php else: ?>
                
                <?php echo stripslashes($tz_banner_adsense); // display adsense ?>
                
                <?php endif; ?>
                
              </div><!--header_advert-->
              
            </div><!--grid_7-->
            
            <?php endif; ?>
            
            <div class="grid_12">
            
                <div id="nav">
                
                    <?php if ( has_nav_menu( 'primary-menu' ) ) : /* if menu location 'primary-menu' exists then use custom menu */ ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'sf-menu', 'container' => '' ) ); ?>
                    <?php else : /* else use wp_list_categories */ ?>
                    <!--<ul class="sf-menu">
                        <?php wp_list_categories( array( 'exclude' => $tz_primary_nav_exclude, 'title_li' => '' )); ?>
                    </ul>-->
                    <?php endif; ?>
                    
                    <div class="clear"></div>
                
                </div><!--nav-->
            
            </div><!--grid_12-->
            
            <div class="clear"></div>
            
        </div><!--container_12-->
    
    </div><!--bottom-->
    
</div><!--header-->
