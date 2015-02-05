$(document).ready(function(){
	$('.post:has(img)').css({'min-height':'270px'});

	$('.menu-item-has-children >a').append('&nbsp;<i class="fa fa-chevron-down"></i>');

	function scrollY() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}

	$(window).scroll(function () {
		if (scrollY() < 10){
			$('.responsive.header').stop( true, true ).hide();

			$('main').stop( true, true ).animate({marginTop: '260px'}, function(){

			});
			$('.first.header').stop( true, true ).slideDown();
			$('.spec-wrap').stop( true, true ).slideDown(250, function(){
				$('.logo').stop( true, true ).show(function(){
					$('.logo-text').stop( true, true ).hide();
					$('.logo').stop( true, true ).css({ 'z-index': '-1'}).stop( true, true ).animate({top:'10px'}, 500, function(){
						$('.logo').stop( true, true ).delay(1000).css('z-index','0');
					$('.logo-text').stop( true, true ).fadeIn();
					});
					
				})
			});
			 
		}
		else if (scrollY() != 0 || scrollY() > 10) {
			$('.logo-text').stop( true, true ).fadeOut(250, function(){
				$('.logo').stop( true, true ).css({'z-index': '-1'}).stop( true, true ).animate({top:'103px'}, 500, function(){
					$('.logo').stop( true, true ).hide();
					$('.spec-wrap').stop( true, true ).slideUp(250);
					$('.first.header').stop( true, true ).animate({}, function(){
						$('main').stop( true, true ).animate({marginTop: '132px'});

					});
					
				});

			});
		}
		// if ($('.spec-wrap').css('padding-top') != '138px') {
  // 			$('.logo-text').stop( true, true ).fade(500);
		// }
	});

	// $(window).scroll(function(){
	//     if($(this).scrollTop() > 0) {
	//         $('.logo-text').fadeOut(500,function(){
	//         	$('.spec-wrap').animate({ "padding-top": "20px" }, "slow", function(){
	//         		$('.sidebar > div').addClass('fixed');
	//         	} );
	        	
	//         });
	        
	//     }
	//     else {
	//     	 $('.sidebar > div').removeClass('fixed');
	//     	 $('.spec-wrap').animate({ "padding-top": "138px" }, "slow",function(){
	//     	 	$('.logo-text').fadeIn();
	    	 	
	//     	 } );
	    	
	//     }
	// });     
});