	
/*
 *
 *  Personal Web Page - MarianoSciacco.it
 *  JS
 *  
 *  Developed by Maxelweb
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
	if($(id).css('display') == 'none'){
		$(id).show('fast', 'swing');
	} else { 
		$(id).hide('fast', 'linear');
	}
}  

// Theme Switcher
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
	} else {
		console.log("error")
	}
});

// Check system theme color preference
function isSystemPreferenceDark() {
	return window.matchMedia("(prefers-color-scheme: dark)").matches;
}

function setThemeAuto() {
	var preferredThemeMode = isSystemPreferenceDark() ? "dark" : "light";
	setThemeMode(localStorage.getItem("ms-theme") || preferredThemeMode);
}

// DOCUMENT READY
$(document).ready(function() 
{
	// Theme setter
	setThemeAuto()
	
	// Uncheck menu
	$("#ms_menu_icon").removeAttr("checked");

	// Loading splash
	$(".splash-name").hide();
	$(".splash-desc").hide();
	$(".splash-name").fadeIn(1200);
	$(".splash-desc").fadeIn(2000);	
});
