<?php

add_action('init','tz_options');

if (!function_exists('tz_options')) {
function tz_options(){
	
// VARIABLES
if( function_exists( 'wp_get_theme' ) ) {
    if( is_child_theme() ) {
        $temp_obj = wp_get_theme();
        $theme_obj = wp_get_theme( $temp_obj->get('Template') );
    } else {
        $theme_obj = wp_get_theme();
    }
    $themeversion = $theme_obj->get('Version');
    $themename = $theme_obj->get('Name');
} else { 
    $theme_data = get_theme_data(STYLESHEETPATH . '/style.css');
    $themename = $theme_data['Name'];
    $themeversion = $theme_data['Version'];
}
$shortname = "tz";

// Populate option in array for use in theme
global $tz_options;
$tz_options = get_option('tz_options');

$GLOBALS['template_path'] = TZ_DIRECTORY;

//Access the WordPress Categories via an Array
$tz_categories = array();  
$tz_categories_obj = get_categories('hide_empty=0');
foreach ($tz_categories_obj as $tz_cat) {
    $tz_categories[$tz_cat->cat_ID] = $tz_cat->cat_name;}
$categories_tmp = array_unshift($tz_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$tz_pages = array();
$tz_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($tz_pages_obj as $tz_page) {
    $tz_pages[$tz_page->ID] = $tz_page->post_name; }
$tz_pages_tmp = array_unshift($tz_pages, "Select a page:");       

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$options_select = array("one","two","three","four","five"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 

//Stylesheets Reader
$alt_stylesheet_path = TZ_FILEPATH . '/css/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('tz_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Set the Options Array
$options = array();




$options[] = array( "name" => __('General Settings','framework'),
                    "type" => "heading");
                    
$options[] = array( "name" => "",
					"message" => __('Control and configure the general setup of your theme. Upload your preferred logo, setup your feeds and insert your analytics tracking code.','framework'),
					"type" => "intro");
 
                    
$options[] = array( "name" => __('Enable Plain Text Logo','framework'),
					"desc" => __('Check this to enable a plain text logo rather than an image.','framework'),
					"id" => $shortname."_plain_logo",
					"std" => "fa;se",
					"type" => "checkbox");

$options[] = array( "name" => __('Custom Logo','framework'),
					"desc" => __('Upload a logo for your theme, or specify the image address of your online logo. (http://example.com/logo.png)','framework'),
					"id" => $shortname."_logo_url",
					"std" => "",
					"type" => "upload");

$options[] = array( "name" => __('Custom Favicon','framework'),
					"desc" => __('Upload a 16px x 16px Png/Gif image that will represent your website\'s favicon.','framework'),
					"id" => $shortname."_custom_favicon",
					"std" => "",
					"type" => "upload");
					
$options[] = array( "name" => __('Contact Form Email Address','framework'),
					"desc" => __('Enter the email address where you\'d like to receive emails from the contact form, or leave blank to use admin email.','framework'),
					"id" => $shortname."_email",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => __('FeedBurner URL','framework'),
					"desc" => __('Enter your full FeedBurner URL (or any other preferred feed URL) if you wish to use FeedBurner over the standard WordPress Feed e.g. http://feeds.feedburner.com/yoururlhere','framework'),
					"id" => $shortname."_feedburner",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => __('FeedBurner Email URL','framework'),
					"desc" => __('Enter your full FeedBurner email URL if you wish to enable users to subscribe to posts by email e.g. http://feedburner.google.com/fb/a/mailverify?uri=usernamehere','framework'),
					"id" => $shortname."_feedburner_email",
					"std" => "",
					"type" => "text");
					

$options[] = array( "name" => __('Tracking Code','framework'),
					"desc" => __('Paste your Google Analytics (or other) tracking code here. It will be inserted before the closing body tag of your theme.','framework'),
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");                                                    
					
					
					
					
$options[] = array( "name" => __('Styling Options','framework'),
					"type" => "heading");
					
					
$options[] = array( "name" => "",
					"message" => __('Configure the visual appearance of you theme by selecting a stylesheet if applicable, choosing your overall layout and inserting any custom CSS necessary.','framework'),
					"type" => "intro");
					
$options[] = array( "name" => __('Colorpicker (default #2098a8)','framework'),
					"desc" => __('Choose a colour scheme for your site.','framework'),
					"id" => $shortname."_theme_colour",
					"std" => "#2098a8",
					"type" => "color");  
					
$options[] = array( "name" => __('Custom CSS','framework'),
                    "desc" => __('Quickly add some CSS to your theme by adding it to this block.','framework'),
                    "id" => $shortname."_custom_css",
                    "std" => "",
                    "type" => "textarea");
                    

					
					
					
$options[] = array( "name" => __('Banner Settings','framework'),
					"type" => "heading");

$options[] = array( "name" => "",
					"message" => __('Enable and configure a banner advert in your header area. Choose to insert a static image and link or use your adsense code.','framework'),
					"type" => "intro");
					
$options[] = array( "name" => __('Show Header Advert','framework'),
					"desc" => __('Check this to show a banner in the header of your site (468px x 60px).','framework'),
					"id" => $shortname."_banner_header",
					"std" => "false",
					"type" => "checkbox");
					
$options[] = array( "name" => __('Banner Image URL','framework'),
					"desc" => __('Enter the full image URL of your banner (468px x 60px) e.g. http://www.example.com/banner.gif','framework'),
					"id" => $shortname."_banner_img_url",
					"std" => "",
					"type" => "text");
					
$options[] = array( "name" => __('Banner Destination URL','framework'),
					"desc" => __('Enter the full destination URL for your banner e.g. http://www.example.com','framework'),
					"id" => $shortname."_banner_dest_url",
					"std" => "",
					"type" => "text");
					
					
$options[] = array( "name" => __('Adsense Code','framework'),
                    "desc" => __('Include your adsense code here or leave empty if you wish to use an image.','framework'),
                    "id" => $shortname."_banner_adsense",
                    "std" => "",
                    "type" => "textarea");	
                    
                    
                    
                    
                    
$options[] = array( "name" => __('Menu Settings','framework'),
					"type" => "heading");
					 
$options[] = array( "name" => "",
					"message" => __('The following options allow you to configure your menus. Note: These settings will be overwritten if you are using custom menus functionality.','framework'),
					"type" => "intro");

$options[] = array( "name" => __('Show Home Link','framework'),
					"desc" => __('Check this box to show a "home" link in the main navigation.','framework'),
					"id" => $shortname."_home_link",
					"std" => "false",
					"type" => "checkbox");         
				
$options[] = array( "name" => __('Exclude from Navigation','framework'),
					"desc" => __('Enter a comma-separated list of any Page IDs you wish to exclude from the navigation (e.g. 1,5,6,).','framework'),
					"id" => $shortname."_nav_exclude",
					"std" => "",
					"type" => "text");   	
					
$options[] = array( "name" => __('Exclude from Secondary Navigation','framework'),
					"desc" => __('Enter a comma-separated list of any Category IDs you wish to exclude from the navigation (e.g. 1,5,6,).','framework'),
					"id" => $shortname."_primary_nav_exclude",
					"std" => "",
					"type" => "text"); 
					
$options[] = array( "name" => __('Menu Order','framework'),
					"desc" => __('Choose what order the navigation will be in, either the order you set in WordPress settings (menu_order) or alphabetically (post_title).','framework'),
					"id" => $shortname."_nav_order",
					"type" => "select2",
					"class" => "small", //mini, tiny, small
					"options" => array("post_title" => "Post Title", "menu_order" => "Menu Order"));
					
					
					
					
					
$options[] = array( "name" => __('Homepage Settings','framework'),
					"type" => "heading");
					
					
$options[] = array( "name" => "",
					"message" => __('Slider Settings','framework'),
					"type" => "intro");


$options[] = array( "name" => __('Enable Slider','framework'),
					"desc" => __('Check this to show the slider section. Posts tagged with \'slider\' will display here.','framework'),
					"id" => $shortname."_slider_display",
					"std" => "false",
					"type" => "checkbox"); 
					
$options[] = array( "name" => __('Enable Autostart','framework'),
					"desc" => __('Check this to enable autoscrolling on the slider.','framework'),
					"id" => $shortname."_slider_autostart",
					"std" => "false",
					"type" => "checkbox");  
					
$options[] = array( "name" => __('Autoscroll Delay','framework'),
					"desc" => __('Enter the time in milliseconds of the delay before transitions (where 1000 = 1second).','framework'),
					"id" => $shortname."_slider_delay",
					"std" => '',
					"type" => "text");  
					
					
					
					
					
$options[] = array( "name" => "",
					"message" => __('Recent Post Settings','framework'),
					"type" => "intro");

					
$options[] = array( "name" => __('Recent Post Title','framework'),
					"desc" => __('Choose your title for the recent posts section.','framework'),
					"id" => $shortname."_recent_title",
					"std" => "",
					"type" => "text");  
					
$options[] = array( "name" => __('Number of Recent Posts','framework'),
					"desc" => __('Enter the number of recent posts you wish to display.','framework'),
					"id" => $shortname."_recent_number",
					"std" => "",
					"type" => "text");  
					
					
					
					
					
$options[] = array( "name" => "",
					"message" => __('Post Grid Settings','framework'),
					"type" => "intro");
					
$options[] = array( "name" => __('Enable Post Grid','framework'),
					"desc" => __('Check this to enable the post grid, all posts with the tag \'grid\' will show','framework'),
					"id" => $shortname."_post_grid_display",
					"std" => "false",
					"type" => "checkbox"); 
					
$options[] = array( "name" => __('Post Grid Title','framework'),
					"desc" => __('Choose your title for the post grid section.','framework'),
					"id" => $shortname."_post_grid_title",
					"std" => "",
					"type" => "text");  
					
$options[] = array( "name" => __('Number of Post Grid Posts','framework'),
					"desc" => __('Enter the number of posts you wish to display.','framework'),
					"id" => $shortname."_post_grid_number",
					"std" => "",
					"type" => "text");  
					
					
					
					

$options[] = array( "name" => "",
					"message" => __('Category Block Settings','framework'),
					"type" => "intro");

					
$options[] = array(	"name" => __("Enable Top 2 Blocks", 'framework'),
					"desc" => __("Check this to enable the top 2 category blocks", 'framework'),
					"id" => $shortname."_top_blocks",
					"std" => "false",
					"type" => "checkbox");
	
$options[] = array( "name" => __("Block One Category", 'framework'),
					"desc" => "Choose a category for 'block one' from which the posts are displayed",
					"id" => $shortname."_cat_one_select",
					"type" => "select-cat",
					"std" => "");
	
$options[] = array(	"name" => __("No. of Block One Posts", 'framework'),
					"desc" => __("Enter the number of posts you wish to display in block one", 'framework'),
					"id" => $shortname."_cat_one_number",
					"std" => "4",
					"type" => "text");
	
$options[] = array( "name" => __("Block Two Category", 'framework'),
					"desc" => "Choose a category for 'block two' from which the posts are displayed",
					"id" => $shortname."_cat_two_select",
					"type" => "select-cat",
					"std" => "");
	
$options[] = array(	"name" => __("No. of Block Two Posts", 'framework'),
					"desc" => __("Enter the number of posts you wish to display in block two", 'framework'),
					"id" => $shortname."_cat_two_number",
					"std" => "4",
					"type" => "text");
	
$options[] = array(	"name" => __("Enable Bottom 2 Blocks", 'framework'),
					"desc" => __("Check this to enable the bottom 2 category blocks", 'framework'),
					"id" => $shortname."_bottom_blocks",
					"std" => "false",
					"type" => "checkbox");
					
$options[] = array( "name" => __("Block Three Category", 'framework'),
					"desc" => "Choose a category for 'block three' from which the posts are displayed",
					"id" => $shortname."_cat_three_select",
					"type" => "select-cat",
					"std" => "");
	
$options[] = array(	"name" => __("No. of Block Three Posts", 'framework'),
					"desc" => __("Enter the number of posts you wish to display in block three", 'framework'),
					"id" => $shortname."_cat_three_number",
					"std" => "4",
					"type" => "text");
					
$options[] = array( "name" => __("Block Four Category", 'framework'),
					"desc" => "Choose a category for 'block four' from which the posts are displayed",
					"id" => $shortname."_cat_four_select",
					"type" => "select-cat",
					"std" => "");
	
$options[] = array(	"name" => __("No. of Block Four Posts", 'framework'),
					"desc" => __("Enter the number of posts you wish to display in block four", 'framework'),
					"id" => $shortname."_cat_four_number",
					"std" => "4",
					"type" => "text");
					
					

$options[] = array( "name" => __('Post Settings','framework'),
					"type" => "heading");
					
$options[] = array( "name" => "",
					"message" => __('Here you can configure how you would like your posts to function. Choose whether to display author bios, related posts and more.','framework'),
					"type" => "intro");
					
$options[] = array(	"name" => __("Show Author Bios", 'framework'),
					"desc" => __("Check this to show an author bio panel on each post page.", 'framework'),
					"id" => $shortname."_author_bio",
					"std" => "false",
					"type" => "checkbox");
	
$options[] = array(	"name" => __("Enable Featured Image", 'framework'),
					"desc" => __("Check this to show the featured image on the post page", 'framework'),
					"id" => $shortname."_image_display",
					"std" => "false",
					"type" => "checkbox");
					
$options[] = array(	"name" => __("Show Related Posts", 'framework'),
					"desc" => __("Check this to show related posts (same category) on post pages", 'framework'),
					"id" => $shortname."_show_related",
					"std" => "false",
					"type" => "checkbox");
	
$options[] = array(	"name" => __("No. of Related Posts", 'framework'),
					"desc" => __("Enter the number of related posts you wish to display", 'framework'),
					"id" => $shortname."_related_number",
					"std" => "4",
					"type" => "text");
	
$options[] = array(	"name" => __("Related Post Type", 'framework'),
					"desc" => __("Would you like to relate posts by tag or category?", 'framework'),
					"id" => $shortname."_related_type",
					"class" => "small",
					"std" => "",
					"options" => array('tags' => 'Tags', 'categories' => 'Categories'),
					"type" => "select2");


update_option('tz_template',$options); 					  
update_option('tz_themename',$themename);   
update_option('tz_shortname',$shortname);

}
}
?>
