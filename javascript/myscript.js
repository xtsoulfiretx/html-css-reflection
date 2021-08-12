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
};

$(".hamburger").click(darken);
$(".site-wrap").click(darken); // Onload events

var lastScrollTop = 0;
window.addEventListener('load', function () {
  lastScrollTop = window.pageYOffset;
  var acceptedCookies = document.cookie.split('; ').find(function (row) {
    return row.startsWith('acceptedCookies=');
  });

  if (acceptedCookies == 'acceptedCookies=true') {
  } else {
    $("#cookie-app").addClass("c-visible");
    $("body").addClass("fixed-body");
  }
}); // Cookie details

$(".accept-cookies-btn").click(function () {
  document.cookie = 'acceptedCookies=true';
  $("#cookie-app").removeClass("c-visible");
  $("body").removeClass("fixed-body");
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
        $("#head-nav").addClass("scrollDown");
        setTimeout(function () {
          $("#head-nav").removeClass("sticky");
          $("#site-body").removeClass("no-header");
        }, 250);
        setTimeout(function () {
          $("#head-nav").removeClass("scrollDown");
        }, 750);
      } else if ($('#head-nav').css('position') === 'relative') {
      }
    } else if (st === 0 && $('#head-nav').css('position') === 'fixed') {
      $("#site-body").removeClass("no-header");
      $("#head-nav").removeClass("sticky");
    } else if (st <= headerHeight) {
      //Do Nothing
    } else if (st < lastScrollTop && st > headerHeight) {
      // Scroll Up
      if ($('#head-nav').css('position') === 'relative') {
        $("#site-body").addClass("no-header");
        $("#head-nav").addClass("sticky");
        $("#head-nav").addClass("scrollUp");
        setTimeout(function () {
          $("#head-nav").removeClass("scrollUp");
        }, 750);
      } else if ($('head-nav').css('position') === 'fixed') {
      }
    } else {
    }

    lastScrollTop = Math.abs(st); // For Mobile or negative scrolling
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

window.addEventListener('load', function () {
  $(".accordian_answers").slideUp('0000');
});

$(".accordian-question").click(function (){
  $(".accordian_answers").slideToggle();
});

// will check email input for incorrect values.
var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

var validateEmail = function validateEmail(email) {
  if (email.match(EmailRegex) && email.length > 0) {
    return true;
  } else {
    return false;
  }
};

$("#email").on('input', function () {
  var isValid = validateEmail($("#contact-email").val());

  if (isValid) {
    $("#contact-email").css("border", "3px solid green");
  } else {
    $("#contact-email").css("border", "3px solid red");
  }
});