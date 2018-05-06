
	<?php
	
		/*
	
			Script in JS

		*/
	
	?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="script/fadeInScroll.js"></script>
	<script src="script/jquery-scrolltofixed.js"></script>
	<script src="script/morphext.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>

	<script> 
		$(document).ready(function() {
		 	$(".name").fadeIn(2000);
		 	//$(".image").fadeIn(3000);
		 	$(".desc").fadeIn(3000);	
		});
			/*$(function(){
				$('.fade').fadeInScroll();
			});*/


	    window.cookieconsent_options = {"message":"Questo sito utilizza i cookie per assicurare la migliore esperienza di navigazione all'utente.","dismiss":"Ho capito!","learnMore":"Maggiori Informazioni sui Cookie e sulle condizioni d'uso.","link":"http://imaxel.net/terms","theme":"dark-bottom"};



		$(document).ready(function() {

			if (screen.width >= 800) {
			  $('.scroll-1').scrollToFixed({ marginTop: 10, limit: $('.limit-1').offset().top - 220 });
			  $('.scroll-2').scrollToFixed({ marginTop: 10, limit: $('.limit-2').offset().top - 220 });
			  $('.scroll-3').scrollToFixed({ marginTop: 10, limit: $('.limit-3').offset().top - 220 });
			  $('.scroll-4').scrollToFixed({ marginTop: 10, limit: $('.limit-4').offset().top - 220 });
			}

		});


        function displayId(id){
          if(document.getElementById(id).style.display=="none")
            document.getElementById(id).style.display="block";
          else
            document.getElementById(id).style.display="none";
          }  


		$(document).ready(function(){
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



	$("#js-morph").Morphext({
	    // The [in] animation type. Refer to Animate.css for a list of available animations.
	    animation: "jackInTheBox",
	    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
	    separator: ",",
	    // The delay between the changing of each phrase in milliseconds.
	    speed: 3000,
	    complete: function () {
	        // Called after the entrance animation is executed.
			 
	    }
	});


	$("#js-morph-top").Morphext({
	    // The [in] animation type. Refer to Animate.css for a list of available animations.
	    animation: "bounce",
	    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
	    separator: ",",
	    // The delay between the changing of each phrase in milliseconds.
	    speed: 5000,
	    complete: function () {
	        // Called after the entrance animation is executed.
	        }
	});


	</script> 
	