
// document ready function
$(document).ready(function(){
	
	var homeOwl = $(".about-slider");
		homeOwl.owlCarousel({
		autoplay: true,
		nav: true,
		smartSpeed: 1000,
		autoplay: true,
		loop: true,		
		responsive:{
        0:{
            items:2
        },
        600:{
            items:2,
            stagePadding: 175,
        },
         
    }
	});

	$(".mscroll_bx").mCustomScrollbar({
		autoHideScrollbar:true,
		axis:"y" 
	});	

	$('#menu_icon').click(function(){					 
		if($(this).hasClass('open')){
			$('.overlay_desk').fadeOut(); 
			$('#menu_icon').removeClass('open');
			$('.menu-list').css("display","none");
		}else{
			$('.menu-list').css("display","block");
			$('.overlay_desk').fadeIn();
			$(this).toggleClass('open');
		}
	});

	//$(".header_panel").outerHeight()) + 10;

	if ($(window).width() > 767) {

		$(".menu-list li a").click(function(){
			var $self = $(this);			 
			var rel = $self.data("section");
			var top_offset = ($("#"+rel).offset().top - $(".menu-list").height()+ 40);
			//$("#"+rel).addClass("active");

			$("a").removeClass("active");
			$(this).addClass("active");

			$("html,body").animate({
				scrollTop:top_offset
			},1000,function(){
				//$("#"+rel).removeClass("active");		
			});
		});
	}

	if ($(window).width() < 767) {
		$(".menu-list li a").click(function(){
			var $self = $(this);
			var rel = $self.data("section");
			var top_offset = ($("#"+rel).offset().top - $(".menu_icon").height() + 10);
			$("#"+rel).addClass("active");
			$("html,body").animate({
				scrollTop:top_offset
			},1000,function(){
				$("#"+rel).removeClass("active");
			});
		});
	}

	if ($(window).width() < 767) {
	
		$(".menu-list li a").click(function(){
			$('.overlay_desk').fadeOut();
			$('.menu-list').css("display","none");
			$('#menu_icon').removeClass('open');
		})

		// $(".right-arrow").click(function(){
		// 	$(".right-arrow").toggleClass("dropdown");
		// })

		

	}

	$(".phase ul li").click(function(){	

		$(this).siblings().removeClass("activephase");
		$(this).addClass("activephase");	

			 
		var phases = $(this).attr("data-phase");
		console.log(phases)	;
		$("#"+phases).fadeIn();
		$("#"+phases).siblings('.flip-box').hide();
		 
	});


	//form select 2 
	// $(".select-option").select2();

	//$('.js-example-basic-multiple').select2();

	 
});



	if ($(window).width() > 767) {

		$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
		    if (scroll > 150) {			        
		        //$(".logo").fadeOut("slow");
		       // $(".menu-list").fadeOut("slow");

		        $(".desktop_menu").fadeIn();
	        	
		    } 
		    else {
		        //$(".logo").fadeIn();
		        //$(".menu-list").fadeIn();

		        $(".desktop_menu").fadeOut();
		    }
		});

 }


$(window).scroll(function() {


	 // if($(window).scrollTop() > 10) {
	 // 	$(".menu-list").addClass("fixed");
	 // }
	 // else{
	 // 	$(".menu-list").removeClass("fixed");
	 // }




   $('.hideme').each( function(i){        
        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();        
        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){
            
            $(this).animate({'opacity':'1'},300) + 50;
                
        }
        
    }); 


})


// window load function
$(window).load(function(){

	
	
})