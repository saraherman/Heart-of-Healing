$(document).ready(function(){
	// if post has image adds a min height so the image doesnt overflow
	$('.post:has(img)').css({'min-height':'270px'});

	// adds down chevron when li has dropdown elements
	$('.menu-item-has-children >a').append('&nbsp;<i class="fa fa-chevron-down"></i>');

	function scrollY() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}
	// scroll function for responsive header
	$(window).scroll(function () {
		//shuts everything the fuck up on scroll 
		$('*').stop(true, true);
		// on scroll pos === top
		if (scrollY() ===0){
			$('.responsive-logo').css({'opacity':'0'});

			$('main').stop( true, true ).animate({marginTop: '260px'}, function(){

			});
			$('.first.header').stop( true, true ).slideDown();
			$('.spec-wrap').slideDown(250, function(){
				$('.logo').show(function(){
					$('.logo-text').hide();
					
					$('.logo').css({ 'z-index': '-1'}).animate({top:'10px'}, 500, function(){
						$('.logo').delay(1000).css('z-index','0');
					$('.logo-text').fadeIn();
					});
					
				})
			});
			 
		}
		// on scroll pos === not top
		else if (scrollY() != 0 || scrollY() > 1) {
			$('.logo-text').stop( true, true ).fadeOut(250, function(){
				$('.logo').stop( true, true ).css({'z-index': '-1'}).stop( true, true ).animate({top:'103px'}, 500, function(){
					$('.logo').stop( true, true ).hide();
					$('.spec-wrap').stop( true, true ).hide();
					$('.first.header').stop( true, true ).animate({}, function(){
						$('main').stop( true, true ).animate({marginTop: '222px'});
						$('.responsive-logo').css({'opacity':'1'});
					});
					
				});

			});
		}
		
	});

	// fluid resizing of header navs to fit .responsive header without having it fixed pos
		var containerWidth = $('.container').width();
		var logoWidth = $('.responsive-logo').width();
		var navWidth = Math.floor((containerWidth - logoWidth)/2-1);
		$('.navbar').css({width:navWidth});
		console.log('container:'+containerWidth+', logo:'+logoWidth+', nav:'+navWidth);
	// makes responsive on resize
	$( window ).resize(function() {
		var containerWidth = $('.container').width();
		var logoWidth = $('.responsive-logo').width();
		var navWidth = Math.floor((containerWidth - logoWidth)/2-1);
		$('.navbar').css({width:navWidth});
		console.log('On Resize::: container:'+containerWidth+', logo:'+logoWidth+', nav:'+navWidth);
	});



	
});