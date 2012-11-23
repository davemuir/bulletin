<?php include '../../../../wp-load.php';
header("Content-type: text/css"); ?>

<?php

$tz_theme_colour = get_option('tz_theme_colour');

?>


<?php ob_flush(); ?>

a:hover{
	color:<?php echo $tz_theme_colour; ?>;
}

#slider .cats span {
	background:<?php echo $tz_theme_colour; ?>;
}

.post_columns h4, .post_grid h4, .category_list h4, #sidebar .widget h4, #author h4, #related h4{
	color:<?php echo $tz_theme_colour; ?>;
}

.category_list h4 a{
	color:<?php echo $tz_theme_colour; ?>;
}

.post_columns h3 a:hover, #related .column h3 a:hover{
	color:<?php echo $tz_theme_colour; ?>;
}

.category_list li .details h5 a:hover, .tab li .details h5 a:hover, .full_posts .details h5 a:hover{
	color:<?php echo $tz_theme_colour; ?>;
}

#sidebar #twitter_update_list li a, #sidebar a.twitter-link{
	color:<?php echo $tz_theme_colour; ?>;
}

.tab_tags a:hover{
	background:<?php echo $tz_theme_colour; ?>;
}

.widget li a:hover{
	color:<?php echo $tz_theme_colour; ?>;
}

#content a{
	color:<?php echo $tz_theme_colour; ?>;
}

#author a {
	color:<?php echo $tz_theme_colour; ?>;
}

#comments .details .name span.author a:hover, #comments .details .name span.date a:hover, #respond a:hover, ol.pinglist li a:hover{
	color:<?php echo $tz_theme_colour; ?>;
}

.tz_tab_widget .tab_tags a:hover {
	background:<?php echo $tz_theme_colour; ?>;
}


<?php ob_end_flush(); ?>