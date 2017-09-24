 $(document).ready(function () {
 
 $(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	
	
  jQuery(document).ready(function() {
    var offset = 500;
    var duration = 300;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});

//scroll fadeOut

$(window).scroll(function () {
    $('[class^="fadedText"]').each(function () {
        if (($(this).offset().top - $(window).scrollTop()) < 50) {
            $(this).stop().fadeTo(1000, 0);
        } else {
            $(this).stop().fadeTo('slow',10);
        }
    });

	
 });
 
 $(window).scroll(function(){
                    console.log($(window).scrollTop());
                    if(($(window).scrollTop() >= 641 && $(window).scrollTop() <= 8815))
                    {
                        $(".navbar").css("background","rgba(255, 255, 255, 0.8) ");
                        $(".navbar").css("border-bottom","#000 solid thin");     
						$("#brand").css("color","#000"); 
                        $(".navbar .nav li a").css("color","#000"); 
						$(".navbar .nav li a span").css("color","#000"); 
						$(".navbar button span").css("color","#000"); 
						$(".transparentNav #myNavbar").css("color","#000"); 
                    }else{
                        $(".navbar").css("background","none");
                        $(".navbar").css("border-bottom","none");   
                        $("#brand").css("color","#FFF"); 						
                        $(".navbar .nav li a").css("color","#FFF");   
						$(".navbar .nav li a span").css("color","#FFF"); 
						$(".navbar button span").css("color","#FFF"); 
						$(".transparentNav #myNavbar").css("color","#FFF"); 
                    }
    });

$(document).ready(function() {   
            $("button#toggle_toggle").click(function(){
				$("ul").toggleClass("floatLeft");
				
			});
			
});

  
});
				
	
					
 

 