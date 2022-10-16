	
/*
 *
 *  Personal Web Page - MarianoSciacco.it
 *  JS
 *  
 *  Developed by Maxel
 *  Github - this.marianosciacco.it
 *
 */


	// Convenient display ID function 

    function displayId(id)
    {
      if(document.getElementById(id).style.display=="none")
        document.getElementById(id).style.display="block";
      else
        document.getElementById(id).style.display="none";
    }  


    // DOCUMENT READY

	$(document).ready(function() 
	{
	 	// Loading splash

	 	$(".name").fadeIn(2000);
	 	$(".desc").fadeIn(3000);	


	 	// To the top button

		 $(window).scroll(function() {
		    if ($(window).scrollTop() > 300) {
		      $('#TOP').removeClass('hide');
		    } else {
		      $('#TOP').addClass('hide');
		    }
		  });

		
		// Offsets for side icons

		// if (screen.width >= 900) {
		//   $('.scroll-1').scrollToFixed({ marginTop: 10, limit: $('.limit-1').offset().top - 220 });
		//   $('.scroll-2').scrollToFixed({ marginTop: 10, limit: $('.limit-2').offset().top - 220 });
		//   $('.scroll-3').scrollToFixed({ marginTop: 10, limit: $('.limit-3').offset().top - 220 });
		//   $('.scroll-4').scrollToFixed({ marginTop: 10, limit: $('.limit-4').offset().top - 220 });
		//   $('.scroll-5').scrollToFixed({ marginTop: 10, limit: $('.limit-5').offset().top - 220 });
		// }


		// Add smooth scrolling to all links

		$("a").on('click', function(event) {


		    if (this.hash !== "") {
			    event.preventDefault();
			    var hash = this.hash;

			    $('html, body').animate({
			    	scrollTop: $(hash).offset().top
			    }, 800, function(){
			    	window.location.hash = hash;
			    });
		    } 
		});

	});


	var termynal = new Termynal('#termynal');


