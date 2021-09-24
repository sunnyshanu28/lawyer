$(document).ready(function(){
	$(".navbar-toggler").click(function(){
		$(".navbar-brand").toggleClass("nav-logo");
		$(".navbar").toggleClass("border-remove");
	});
	$('.dash-carousel').owlCarousel({
		loop: true,
		margin: 10,
		autoplay:true,
		autoplayTimeout:2000,
		nav:false,
		dots:false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 3,
			}
		}
	});
	$('.client-carousel').owlCarousel({
		loop: true,
		margin: 10,
		autoplay:true,
		autoplayTimeout:2000,
		nav:true,
		dots:false,
		responsiveClass: true,
		navText: [
		"<img src='img/Testomonial/back.png' class='back-btn'>",
		"<img src='img/Testomonial/next.png' class='next-btn'>"
		],
		responsive: {
			0: {
				items: 1,
				nav:false,
				dots:true
			},
			600: {
				items: 1,
			},
			1000: {
				items: 1,
			}
		}
	});
	/*  Custom Sticky Menu  */
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 50) {
			$(".header-sticky").removeClass("sticky-bar");
		} else {
			$(".header-sticky").addClass("sticky-bar");
		}
	});

	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 50) {
			$(".header-sticky").removeClass("sticky");
		} else {
			$(".header-sticky").addClass("sticky");
		}
	});


   // Back to top button
   $(window).scroll(function() {
   	if ($(this).scrollTop() > 100) {
   		$('#scroll-to-top').fadeIn('slow');
   	} else {
   		$('#scroll-to-top').fadeOut('slow');
   	}
   });
   $('#scroll-to-top').click(function(){
   	$('html, body').animate({scrollTop : 0},1500);
   	return false;
   });

  // back-btn in modal

  $('.second-modal .back-btn').click(function(){
		// parent.history.back();
		// return false;
		$('.first-modal').show();
		$('.second-modal').hide();
	});
  $("#continue-btn").click(function() {
  	$(".first-modal").hide();
  	$(".second-modal").show();
  });
  $('.third-modal .back-btn').click(function(){
  	$('.second-modal').show();
  	$('.third-modal').hide();
  });
  $("#party").click(function() {
  	$(".second-modal").hide();
  	$(".third-modal").show();
  });
  $('.modal-4 .back-btn').click(function(){
  	$('.second-modal').show();
  	$('.modal-4').hide();
  });
  $("#case-number").click(function() {
  	$(".second-modal").hide();
  	$(".modal-4").show();
  });

  //notification click
  $(".notify").click(function(){
  	$(".notification-menu").toggle();
  })
})

	// add active class
	$(function(){


		jQuery(function($) {
 var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
 $('.navbar-nav a').each(function() {
 	if (this.href === path) {
 		$(this).closest("li").addClass('active');
 	}
 });
});

	});