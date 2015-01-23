$(document).ready(function(){
	function scrollY() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}

	$(window).scroll(function () {
		if (scrollY() < 10){
			$('.responsive.header').stop( true, true ).slideUp();
			$('.first.header').stop( true, false ).slideDown();
			$('header').animate({ "padding-top": "20px" });
			$('.spec-wrap').stop( true, false ).slideDown();
			$('.logo').stop( true, false ).delay( 200 ).fadeIn(1000);
			 
		}
		else {
			$('.logo').stop( true, false ).hide();
			$('.first.header').stop( true, false ).slideUp();
			$('.spec-wrap').stop( true, false ).slideUp();
			$('header').animate({ "padding-top": "0px" });
			setTimeout(function(){
			
			$('.responsive.header').delay(500).stop( true, true ).slideDown();  
			}, 500); 
			       
		}
		if (scrollY() != 0 || scrollY() > 10) {
			$('.responsive.header').stop( true, true ).slideDown(500, function(){
				$('.first.header').stop( true, true ).hide();
			});   
		}
		// if ($('.spec-wrap').css('padding-top') != '138px') {
  // 			$('.logo-text').stop( true, true ).fade(500);
		// }
	});

	$(window).scroll(function( event ){
		var jq = $(this);
		
		
			
	})

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