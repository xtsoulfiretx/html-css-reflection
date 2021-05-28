"use strict";

// Hambuger click effect //
function darken() {
  var scrollPosition = $("header").offset();
  $("#site-body").css("transition", "0.25s");
  $(".hamburger").toggleClass("is-active");
  $("#site-body").toggleClass("btn-pressed");
  $(".sidebar").toggleClass("is-visible");
  $(".site-wrap").toggleClass("site-wrap-d");
  $("body").toggleClass("fixed-body");
  $("#head-nav").toggleClass("slide-left");
  setTimeout(function () {
    $("#site-body").css("transition", "");
  }, 250);
}

;
$(".hamburger").click(darken);
$(".site-wrap").click(darken); // Onload events

var lastScrollTop = 0;
window.addEventListener('load', function () {
  lastScrollTop = window.pageYOffset;
  var acceptedCookies = document.cookie.split('; ').find(function (row) {
    return row.startsWith('acceptedCookies=');
  });

  if (acceptedCookies == 'acceptedCookies=true') {
    console.log("Cookie found");
  } else {
    console.log("Showing Cookie Pop up");
    $("#cookie-app").addClass("c-visible");
  }
}); // Cookie details

$(".accept-cookies-btn").click(function () {
  document.cookie = 'acceptedCookies=true';
  $("#cookie-app").removeClass("c-visible");
  console.log("Cookie Got");
}); // Sticky Header event listener

window.addEventListener('scroll', function () {
  clearTimeout($.data(this, 'scrollTimer'));
  $.data(this, 'scrollTimer', setTimeout(function () {
    var scrolled = window.scrollY;
    var headerHeight = $('#head-nav').height();
    var stickyHeight = scrolled > 300;
    var st = window.pageYOffset || document.documentElement.scrollTop;

    if (st > lastScrollTop) {
      //  Scroll down
      if ($('#head-nav').css('position') === 'fixed') {
        console.log("Scrolled down, will play animation then unstick");
        $("#head-nav").addClass("scrollDown");
        setTimeout(function () {
          $("#head-nav").removeClass("sticky");
          $("#site-body").removeClass("no-header");
        }, 250);
        setTimeout(function () {
          $("#head-nav").removeClass("scrollDown");
        }, 750);
      } else if ($('#head-nav').css('position') === 'relative') {
        console.log("Scrolled down but don't need to do anything");
      }
    } else if (st === 0 && $('#head-nav').css('position') === 'fixed') {
      console.log("Scrolled to top, will now unstick");
      $("#site-body").removeClass("no-header");
      $("#head-nav").removeClass("sticky");
    } else if (st <= headerHeight) {
      //Do Nothing
      console.log("Doing nothing");
    } else if (st < lastScrollTop && st > headerHeight) {
      // Scroll Up
      if ($('#head-nav').css('position') === 'relative') {
        console.log("Scrolled up, will stick header");
        $("#site-body").addClass("no-header");
        $("#head-nav").addClass("sticky");
        $("#head-nav").addClass("scrollUp");
        setTimeout(function () {
          $("#head-nav").removeClass("scrollUp");
        }, 750);
      } else if ($('head-nav').css('position') === 'fixed') {
        console.log("Scrolled up, but Header already present");
      }
    } else {
      console.log("nothing will happen");
    }

    lastScrollTop = Math.abs(st); // For Mobile or negative scrolling

    console.log("Haven't scrolled in 250ms!");
  }));
}); // potential animation code
//  document.getElementById('head-nav').setAttribute("style","animation-name: scrollUpAnimation");
// Slick Banner Carousel 

$(".content-main").slick({
  autoplay: true,
  autoplaySpeed: 4000,
  arrows: false,
  dots: true
});