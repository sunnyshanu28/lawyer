$(document).ready(function () {
  $(".navbar-toggler").click(function () {
    $(".navbar-brand").toggleClass("nav-logo");
    $(".navbar").toggleClass("border-remove");
  });
  $(".dash-carousel").owlCarousel({
    autoplayHoverPause: true,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    nav: false,
    dots: false,
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
      },
    },
  });
  $(".client-carousel").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    nav: true,
    dots: false,
    responsiveClass: true,
    navText: [
      "<img src='img/Testomonial/back.png' class='back-btn'>",
      "<img src='img/Testomonial/next.png' class='next-btn'>",
    ],
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  // add active class
  $(function () {
    jQuery(function ($) {
      var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
      $(".navbar-nav a").each(function () {
        if (this.href === path) {
          $(this).closest("li").addClass("active");
        }
      });
    });
  });
});
