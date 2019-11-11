	
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

		if (screen.width >= 800) {
		  $('.scroll-1').scrollToFixed({ marginTop: 10, limit: $('.limit-1').offset().top - 220 });
		  $('.scroll-2').scrollToFixed({ marginTop: 10, limit: $('.limit-2').offset().top - 220 });
		  $('.scroll-3').scrollToFixed({ marginTop: 10, limit: $('.limit-3').offset().top - 220 });
		  $('.scroll-4').scrollToFixed({ marginTop: 10, limit: $('.limit-4').offset().top - 220 });
		  $('.scroll-5').scrollToFixed({ marginTop: 10, limit: $('.limit-5').offset().top - 220 });
		}


		// Add smooth scrolling to all links

		$("a").on('click', function(event) {

		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		});

	});


			
	// Title animations

	$("#js-morph").Morphext({
	    animation: "jackInTheBox",
	    separator: ",",
	    speed: 3000,
	    complete: function () {}
	});


