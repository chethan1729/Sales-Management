// jQuery to collapse the navbar on scroll
$(document).ready(function(){
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
  if ($(this).attr('class') != 'dropdown-toggle active' && $(this).attr('class') != 'dropdown-toggle') {
    $('.navbar-toggle:visible').click();
  }
});


	
	/* *******************automatic hover dropdowns *************************** */
		$('.nav li.dropdown').hover(function(){
		$('.dropdown-menu',this).fadeIn();}
		,function()
		{	$('.dropdown-menu',this).fadeOut('fast');
		}); //hover
		

/* ************************carousel****************************** */

$('#myCarousel1').carousel({ interval: 7000 }) ;
$('#myCarousel2').carousel({ interval: 7020 }) ;

new WOW().init();
	  
});