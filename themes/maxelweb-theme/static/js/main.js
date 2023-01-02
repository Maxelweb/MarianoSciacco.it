	
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


	function msToggle(id)
    {
		if($(id).css('display') == 'none')
		{
			$(id).show('fast', 'swing');
		} else { 
			$(id).hide('fast', 'linear'); 
		}
    }  

	const darkIconClass = 'far fa-lightbulb'
	const lightIconClass = 'fas fa-lightbulb'
	var darkCSS = $("#ms-theme-style");
	var darkToggle = $("#ms-theme-toggle");
	var darkToggleIcon = $("#ms-theme-toggle i");
	
	// Set theme with the given mode and toggle the theme icon button
	function setThemeMode(mode) {
	  if (mode === "dark") {
		darkCSS.prop('disabled', false)
		darkToggleIcon.attr('class', lightIconClass)
	  } else if (mode === "light") {
		darkCSS.prop('disabled', true)
		darkToggleIcon.attr('class', darkIconClass)
	  }
	}
	
	// Toggle dark mode when user click on the icon button
	darkToggle.click(function () {
	  if (darkToggleIcon.attr("class") == darkIconClass) {
		localStorage.setItem("ms-theme", "dark");
		setThemeMode("dark");
	  } else if (darkToggleIcon.attr("class") == lightIconClass) {
		localStorage.setItem("ms-theme", "light");
		setThemeMode("light");
	  }
	});


    // DOCUMENT READY

	$(document).ready(function() 
	{
		
		// Theme setter
		setThemeMode(localStorage.getItem("ms-theme") || "light");

		// Uncheck menu
		$("#ms_menu_icon").removeAttr("checked");

		// Loading splash
		$(".splash-name").hide();
		$(".splash-desc").hide();
	 	$(".splash-name").fadeIn(1200);
	 	$(".splash-desc").fadeIn(2000);	

	 	// To the top button
		//  $(window).scroll(function() {
		//     if ($(window).scrollTop() > 300) {
		//       $('#TOP').removeClass('hide');
		//     } else {
		//       $('#TOP').addClass('hide');
		//     }
		//   });

		
		// Offsets for side icons
		// if (screen.width >= 900) {
		//   $('.scroll-1').scrollToFixed({ marginTop: 10, limit: $('.limit-1').offset().top - 220 });
		//   $('.scroll-2').scrollToFixed({ marginTop: 10, limit: $('.limit-2').offset().top - 220 });
		//   $('.scroll-3').scrollToFixed({ marginTop: 10, limit: $('.limit-3').offset().top - 220 });
		//   $('.scroll-4').scrollToFixed({ marginTop: 10, limit: $('.limit-4').offset().top - 220 });
		//   $('.scroll-5').scrollToFixed({ marginTop: 10, limit: $('.limit-5').offset().top - 220 });
		// }

		// Add smooth scrolling to all links
		// $("a").on('click', function(event) {
		//     if (this.hash !== "") {
		// 	    event.preventDefault();
		// 	    var hash = this.hash;

		// 	    $('html, body').animate({
		// 	    	scrollTop: $(hash).offset().top
		// 	    }, 800, function(){
		// 	    	window.location.hash = hash;
		// 	    });
		//     } 
		// });

	});


	// var termynal = new Termynal('#termynal');


