$(document).ready(function(){
	$('.post:has(img)').css({'min-height':'270px'});

	function scrollY() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}

	$(window).scroll(function () {
		if (scrollY() < 10){
			$('.responsive.header').stop( true, true ).hide();

			$('main').stop( true, true ).animate({marginTop: '280px'}, function(){

			});
			$('.first.header').stop( true, true ).slideDown();
			$('.spec-wrap').stop( true, true ).slideDown(500, function(){
				$('.logo').stop( true, true ).show(function(){
					$('.logo-text').stop( true, true ).hide();
					$('.logo').stop( true, true ).css({ 'z-index': '-1'}).animate({top:'33px'}, 500, function(){
						$('.logo').stop( true, true ).delay(1000).css('z-index','0');
					$('.logo-text').stop( true, true ).fadeIn();
					});
					
				})
			});
			 
		}
		else {
			
			       
		}
		if (scrollY() != 0 || scrollY() > 10) {
			$('.first.header').stop( true, true ).hide();
			$('.spec-wrap').stop( true, true ).hide();
			$('.responsive.header').stop( true, true ).show();
			$('main').stop( true, true ).animate({marginTop: '132px'});
			$('.logo').stop( true, true ).delay(500).css({'top':'103px', 'z-index': '-1'}).hide();

			
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