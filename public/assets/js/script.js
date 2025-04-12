"use strict";
/* ==== Jquery Functions ==== */
(function($) {
	
	/* ==== Tool Tip ==== */	
    $('[data-toggle="tooltip"]').tooltip();	
		
	
	/* ==== Testimonials Slider ==== */	
  	$(".testimonialsList").owlCarousel({      
	    loop:true,
		autoplay:1,
		margin:30,
		nav:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				//nav:false
			},
			768:{
				items:1,
				//nav:false
			},
			1170:{
				items:1,
				//nav:false,
				//loop:true
			}
		}
  	});
	
	
	/* ==== Revolution Slider ==== */
	if($('.tp-banner').length > 0){
		$('.tp-banner').show().revolution({
			delay:6000,
	        startheight:550,
	        startwidth: 1140,
	        hideThumbs: 1000,
	        navigationType: 'none',
	        touchenabled: 'on',
	        onHoverStop: 'on',
	        navOffsetHorizontal: 0,
	        navOffsetVertical: 0,
	        dottedOverlay: 'none',
	        fullWidth: 'on'
		});
	}
	
	/*Custom Script Starts here*/
	
	
	jQuery('.similar-jobs').owlCarousel({
		loop:false,
		navRewind:false,
		margin:10,
		dots: false,
		nav:true,
		//autoplay: true,
		responsive:{
			0:{
				items:2
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		},
		//navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
		navText: ["<div class='nav-button owl-prev'><i class='fa fa-chevron-left'></i></div>", "<div class='nav-button owl-next'><i class='fa fa-chevron-right'></i></div>"]
});


$('.highlighted-jobs').owlCarousel({
    loop:false,
	navRewind:false,
    margin:10,
	dots: false,
    nav:true,
	//autoplay: true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    },
	//navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]	
	
	navText: ["<div class='nav-button owl-prev'><i class='fa fa-chevron-left'></i></div>", "<div class='nav-button owl-next'><i class='fa fa-chevron-right'></i></div>"],

	
	
	/*navigation: true,
	navText: ['<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span>', '<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'] */

});


$('.job-carousel').owlCarousel({
    loop:false,
	navRewind:false,
    margin:10,
	dots: false,
    nav:true,
	//autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
	
	navText: ["<div class='nav-button owl-prev'><i class='fa fa-chevron-left'></i></div>", "<div class='nav-button owl-next'><i class='fa fa-chevron-right'></i></div>"],

	

});


	
	

// find elements
var banner = $(".all-jobs")
var button = $("#showMoreJobs")
// when first load the window
if($('.job-list').length>12){

$('.job-list').each(function(index){
var option=$(this);
if(index>11){
option.toggleClass('hidden');
}
})
}

// handle click and add class
button.on("click", function(){
var text = button.attr('data-text');
//alert('text===='+text);
if(text=='Show More')
{
button.attr('data-text','Show Less');
button.text(show_less+"...");
}
else
{
button.attr('data-text','Show More');
button.text(show_more+"...");
}
 if($('.job-list').length>12){

$('.job-list').each(function(index){
var option=$(this);
if(index>11){
option.toggleClass('hidden');
}
});
}
});	
	
	
	
	/*Custom Script Ends here*/
})(jQuery);