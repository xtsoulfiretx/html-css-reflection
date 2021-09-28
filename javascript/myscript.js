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

  if (acceptedCookies == 'acceptedCookies=true') {} else {
    $("#cookie-app").addClass("c-visible");
  }

  $(".accordian_answers").slideUp();
});
window.addEventListener('load', function () {
  $("#namepop").addClass("alert_hidden");
  $("#emailpop").addClass("alert_hidden");
}); // Cookie details

$(".accept-cookies-btn").click(function () {
  document.cookie = 'acceptedCookies=true';
  $("#cookie-app").removeClass("c-visible");
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
      } else if ($('#head-nav').css('position') === 'relative') {}
    } else if (st === 0 && $('#head-nav').css('position') === 'fixed') {
      $("#site-body").removeClass("no-header");
      $("#head-nav").removeClass("sticky");
    } else if (st <= headerHeight) {//Do Nothing
    } else if (st < lastScrollTop && st > headerHeight) {
      // Scroll Up
      if ($('#head-nav').css('position') === 'relative') {
        $("#site-body").addClass("no-header");
        $("#head-nav").addClass("sticky");
        $("#head-nav").addClass("scrollUp");
        setTimeout(function () {
          $("#head-nav").removeClass("scrollUp");
        }, 750);
      } else if ($('head-nav').css('position') === 'fixed') {}
    } else {}

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
$(".accordian-question").click(function () {
  $(".accordian_answers").slideToggle();
}); // will check email input for incorrect values.

var EmailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

var validateEmail = function validateEmail(email) {
  if (email.match(EmailRegex) && email.length > 0) {
    return true;
  } else {
    return false;
  }
}; // this will change the border around the email input presubmit request


$(".email-c").on("input", function () {
  var isValid = validateEmail($(".email-c").val());

  if (isValid != true) {
    $(".email-c").css("border", "1px solid red");
  } else {
    $(".email-c").css("border", "none");
  }
}); // this function will change the borders around the input fields for the contact form 

$('#contact-form').submit(function (e) {
  if (!$.trim($("#contact-name").val()).length) {
    $("#contact-name").css("border", "1px solid red");
    e.preventDefault();
  }

  if (!$.trim($("#contact-email").val()).length) {
    $("#contact-email").css("border", "1px solid red");
    e.preventDefault();
  }

  if (!$.trim($("#contact-telephone").val()).length) {
    $("#contact-telephone").css("border", "1px solid red");
    e.preventDefault();
  }

  if (!$.trim($("#contact-subject").val()).length) {
    $("#contact-subject").css("border", "1px solid red");
    e.preventDefault();
  }

  if (!$.trim($("#contact-message").val()).length) {
    $("#contact-message").css("border", "1px solid red");
    e.preventDefault();
    return false;
  } else {}
}); // this function will remove the the above border lines once something has been typed into the inputs fields

$('#contact-form').change(function (e) {
  if ($.trim($("#contact-name").val()).length) {
    $("#contact-name").css("border", "none");
  }

  if ($.trim($("#contact-telephone").val()).length) {
    $("#contact-telephone").css("border", "none");
  }

  if ($.trim($("#contact-subject").val()).length) {
    $("#contact-subject").css("border", "none");
  }

  if ($.trim($("#contact-message").val()).length) {
    $("#contact-message").css("border", "none");
    return false;
  } else {}
});

$('#sign-up').change(function () {
  var isValid = validateEmail($("#NLEmail").val());
  if (!$.trim($('#NLName').val()).length) {
    $("#namepop").removeClass("alert_hidden");
    $("#namepop").addClass("alert_visible");
    e.preventDefault();
    return false;
  }

  if (!$.trim($('#NLEmail').val()).length || (isValid != true)) {
    $("#emailpop").removeClass("alert_hidden");
    $("#emailpop").addClass("alert_visible");
    $('.newsletter-button').attr("disabled", true);
    e.preventDefault();
    return false;
  }
});
$('#sign-up').on("submit", function (e) {
  var isValid = validateEmail($("#NLEmail").val());
  if (!$.trim($('#NLName').val()).length) {
    $("#namepop").removeClass("alert_hidden");
    $("#namepop").addClass("alert_visible");
    e.preventDefault();
  }

  if (!$.trim($('#NLEmail').val()).length || (isValid != true)) {
    $("#emailpop").removeClass("alert_hidden");
    $("#emailpop").addClass("alert_visible");
    $('.newsletter-button').attr("disabled", true);
    e.preventDefault();
  }
});
$('.nlpn').on("click", function (e) {
  e.preventDefault();
  $("#namepop").addClass("alert_hidden");
  $("#namepop").removeClass("alert_visible");
  return false;
});
$('.nlpe').on("click", function (e) {
  e.preventDefault();
  $("#emailpop").addClass("alert_hidden");
  $("#emailpop").removeClass("alert_visible");
  $('.newsletter-button').attr("disabled", false);
  return false;
});