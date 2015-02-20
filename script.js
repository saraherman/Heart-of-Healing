$(document).ready(function(){
	// if post has image adds a min height so the image doesnt overflow
	$('.post:has(img)').css({'min-height':'270px'});

	// adds down chevron when li has dropdown elements
	$('.menu-item-has-children >a').append('&nbsp;<i class="fa fa-chevron-down"></i>').css({'border-bottom':'none'});

	
	// return scroll position
	function scrollY() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}

function header(){
	// if viewport width is 1160px or greater, use animated header
	var winWidth = $( window ).width();

	if (winWidth == 1160 || winWidth > 1160) {
		//hide mobile nav
		$('.mobile-nav').hide();
		$('.responsive-logo').css({'opacity':'0'});

		// scroll function for fancy header
		$(window).scroll(function () {
			//shuts everything up on scroll 
			$('*').stop(true, true);
			// on scroll pos === top
			if (scrollY() ===0){
				fancyHeader(); 
			}
			// on scroll pos === not top
			else if (scrollY() != 0 || scrollY() > 1) {
				hideFancyHeader();
			}
		});
	}
	else{
		$('spec-wrap, .responsive-logo, .first.header nav').hide();
		$('.mobile-logo').show();
	}
}
header();
	

	function fancyHeader(){
		$('.mobile-nav').hide();
		$('#mobile-logo').hide();
			$('main').stop( true, true ).animate({marginTop: '260px'}, function(){

			});
			$('.first.header').stop( true, true ).slideDown();
			$('.spec-wrap').slideDown(200, function(){
				$('.logo').show(function(){
					$('.logo-text').hide();
					$('.responsive-logo').css({'opacity':'0'});
					$('.logo').css({ 'z-index': '-1'}).animate({top:'10px'}, 250, function(){
						$('.logo').delay(250).css('z-index','0');
					$('.logo-text').fadeIn();
					});
					
				})
			});
	}
	function hideFancyHeader(){
		$('.mobile-nav').hide();

		$('.logo-text').stop( true, true ).fadeOut(250, function(){
				$('.logo').stop( true, true ).css({'z-index': '-1'}).stop( true, true ).animate({top:'103px'}, 500, function(){
					$('.logo').stop( true, true ).slideUp(200);
					$('.spec-wrap').stop( true, true ).slideUp(250);
					$('.first.header').stop( true, true ).animate({}, function(){
						$('main').stop( true, true ).animate({marginTop: '150px'});
						$('.responsive-logo').css({'opacity':'1'});
					});
					
				});

			});
	}




	// fluid resizing of header navs to fit .responsive header without having it fixed pos
		var containerWidth = $('.container').width();
		var logoWidth = $('.responsive-logo').width();
		var navWidth = Math.floor((containerWidth - logoWidth)/2-1);
		$('.navbar').css({width:navWidth});
		console.log('container:'+containerWidth+', logo:'+logoWidth+', nav:'+navWidth);
	// makes responsive on resize
	$( window ).resize(function() {
		header();
		var containerWidth = $('.container').width();
		var logoWidth = $('.responsive-logo').width();
		var navWidth = Math.floor((containerWidth - logoWidth)/2-1);
		$('.navbar').css({width:navWidth});
		
		// log to view sizes
		// console.log('On Resize::: container:'+containerWidth+', logo:'+logoWidth+', nav:'+navWidth);
	

	});


	// add mobile dropdown menu
	$('.fa.fa-bars').click(function(){
		$('.mobile-nav').slideToggle();
	});

	var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0)

	var winHeight = $( window ).width();
	$('.mobile-nav').css({height:h-50});

	$('p:has(img)').css({margin:0});
	
});