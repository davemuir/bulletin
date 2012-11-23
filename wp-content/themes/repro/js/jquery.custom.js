jQuery(document).ready(function($) {
	
	// Secondary Navigation
	$("ul.sf-menu").superfish({
		delay: 500,
		animation: {opacity:'show'},
		speed: 200,
		autoArrows: false,
		dropShadows: false
	});
	
	$("#second_nav li li:first, #second_nav li li li:first, #second_nav li li li li:first").addClass('first');
	$("#second_nav li:last-child").addClass('last');
	
	$("#nav li:first, #nav li li:first, #nav li li li:first, #nav li li li li:first").addClass('first');
	$("#nav li:last-child").addClass('last');
    
    $("#sidebar .flickr div:nth-child(5), #sidebar .flickr div:nth-child(9), #sidebar .flickr div:nth-child(13)").addClass('last');
    $("#footer .flickr div:nth-child(4), #footer .flickr div:nth-child(7), #footer .flickr div:nth-child(10)").addClass('last');
    
    $(".tab li:last-child").addClass('last');
    
    $("#twitter_update_list li:last-child").addClass('last');
    $("#twitter_update_list li:first").addClass('first');
    
    $(".category_list li:last-child").addClass('last');
    
    $(".advert li:even").addClass('left');
    
    $('.s').each(
    
    	function() {
        	
            if($(this).val() === '' || $(this).val() === tz.searchterm)
            {
                $(this).val( tz.searchterm );
        
                $(this).blur( 
                    function () {
                       $(this).val( tz.searchterm );
                    });
                    
                $(this).focus( 
                    function () {
                       $(this).val('');
                    });
            }
            
        }
        
    );

	
	// Main Navigation
	$('#nav ul.sf-menu').superfish({ 
		delay: 200,
		animation: {opacity:'show', height:'show'},
		speed: 'fast',
		autoArrows: false,
		dropShadows: false
	});
	
	// Coda Slider
	if( tz.sliderautostart == 'true' ) {
	    $('#coda-slider-1').codaSlider({
            autoSlide: true,
            autoSlideInterval: tz.sliderdelay,
    		dynamicArrows: false,
    		dynamicTabs: false,
    		slideEaseDuration: 1000
    	});
    	
	} else {
	    $('#coda-slider-1').codaSlider({
    		dynamicArrows: false,
    		dynamicTabs: false,
    		slideEaseDuration: 1000
    	});
	}
	
	// Post Grid Tooltips
	$('.tooltip').poshytip({
		className: 'tip-twitter',
		showTimeout: 1,
		alignTo: 'target',
		alignX: 'center',
		offsetY: 5,
		allowTipHover: false,
		fade: false,
		slide: false
	});
	
	// Tab Widget
	$(".tabs").tabs({ 
		fx: { opacity: 'toggle' } 
	});

	// Opacity change for clicked thumbnails
	$('#slider_nav li a').click( 
		function () {
			$('#slider_nav li a').css('opacity', 0.5);
			$(this).css('opacity', 1);
		}
	);
	
	// Opacity change for hovered thumbnails
	$('#slider_nav li a').hover( 
		function () {
			$(this).not(".current").stop(true, true).animate({opacity: 1}, 300);
		}, function () {
			$(this).not(".current").stop(true, true).animate({opacity: 0.5}, 300);
		}
	);
	
	// Input focus css change
	$('input').focus( 
		function () {
			$(this).css('border', '1px solid #d2d2d2');
			$(this).css('color', '#444444');
		}
	);
	
	// Input blur css change
	$('input').blur( 
		function () {
			$(this).css({
				border: '1px solid #e0e0e0',
				color: '#999999'
			});
		}
	);
	
	// Submit buttons
	$('#respond input.btn, #content button').hover( 
		function () {
			$(this).css({background: '#fff'});
		}, function () {
			$(this).css({background: 'url(' + tz.themeurl + '/images/button_bg.gif) repeat-x'});
		}
	);

});