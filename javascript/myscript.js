
// Hambuger click effect //

  function darken() {

    const scrollPosition = $("header").offset();
    
    $("#site-body").css("transition","0.25s");
    $(".hamburger").toggleClass("is-active");
    $("#site-body").toggleClass("btn-pressed");
    $(".sidebar").toggleClass("is-visible");
    $(".site-wrap").toggleClass("site-wrap-d");
    $("body").toggleClass("fixed-body");
    $("#head-nav").toggleClass("slide-left");

    setTimeout(function(){
      $("#site-body").css("transition","");
    }, 250);
};

$(".hamburger").click(darken);
$(".site-wrap").click(darken);


// Onload events

  let lastScrollTop = 0;

window.addEventListener('load', function() {
   lastScrollTop = window.pageYOffset;

   const acceptedCookies = document.cookie.split('; ').find(row => row.startsWith('acceptedCookies='));
   if (acceptedCookies == 'acceptedCookies=true') {
    console.log("Cookie found")
   } else {
     console.log("Showing Cookie Pop up");
    $("#cookie-app").addClass("c-visible");
   }
   $(".accordian_answers").slideUp(0000);
});

// Cookie details

$(".accept-cookies-btn").click(function (){
  document.cookie = 'acceptedCookies=true';
  $("#cookie-app").removeClass("c-visible");
  console.log("Cookie Got");
});

// Sticky Header event listener

 
 window.addEventListener('scroll',function() {
  clearTimeout($.data(this, 'scrollTimer'));
  $.data(this, 'scrollTimer', setTimeout(function() {
    const scrolled = window.scrollY; 
    const headerHeight = $('#head-nav').height();
    let stickyHeight = scrolled > 300;
    let st = window.pageYOffset || document.documentElement.scrollTop;

    if (st > lastScrollTop){
      //  Scroll down
      if ($('#head-nav').css('position') === 'fixed') {
        console.log("Scrolled down, will play animation then unstick");
        $("#head-nav").addClass("scrollDown");
        setTimeout(function() {
          $("#head-nav").removeClass("sticky");
          $("#site-body").removeClass("no-header");
        }, 250);
        setTimeout (function(){
          $("#head-nav").removeClass("scrollDown");
        }, 750);
      }
      
      else if ($('#head-nav').css('position') === 'relative') {
        console.log("Scrolled down but don't need to do anything");
      }
    }
    
    else if (st === 0 && ($('#head-nav').css('position') === 'fixed')) {
        console.log("Scrolled to top, will now unstick");
        $("#site-body").removeClass("no-header");
        $("#head-nav").removeClass("sticky");
    } 
    
    else if (st <= headerHeight) {
        //Do Nothing
        console.log("Doing nothing")
    } 
    
    else if (st < lastScrollTop && st > headerHeight) {

        // Scroll Up
        if ($('#head-nav').css('position') === 'relative'){
          console.log("Scrolled up, will stick header");
          $("#site-body").addClass("no-header");
          $("#head-nav").addClass("sticky");
          $("#head-nav").addClass("scrollUp");
          setTimeout (function(){
            $("#head-nav").removeClass("scrollUp");
          }, 750);
        }


        else if ($('head-nav').css('position') === 'fixed') {
          console.log("Scrolled up, but Header already present");
        }
    }
    
    else {
      console.log("nothing will happen");
    }
    lastScrollTop = Math.abs(st); // For Mobile or negative scrolling

      console.log("Haven't scrolled in 250ms!");
  }));
});



// potential animation code

//  document.getElementById('head-nav').setAttribute("style","animation-name: scrollUpAnimation");
     

// Slick Banner Carousel 

$(".content-main").slick({
  autoplay: true,
  autoplaySpeed: 4000,
  arrows: false,
  dots: true
});

$(".accordian-question").click(function(){
  $(".accordian_answers").slideToggle();
});

// will check email input for incorrect values.
const EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

let validateEmail = function validateEmail(email) {
  if (email.match(EmailRegex) && email.length > 0) {
    return true;
  } else {
    return false;
  }
};

$(".email-c").on("input", function () {
  let isValid = validateEmail($(".email-c").val());

  if (isValid != true) {
    $(".email-c").css("border", "1px solid red");
  } else {
    $(".email-c").css("border", "none");
  }
});

$('#contact-form').submit(function() {
  if (!$.trim($("#contact-name").val()).length){
      $("#contact-name").css("border", "1px solid red");
      

  } if (!$.trim($("#contact-email").val()).length) {
      $("#contact-email").css("border", "1px solid red");


  } if (!$.trim($("#contact-telephone").val()).length) {
    $("#contact-telephone").css("border", "1px solid red");
   

  } if (!$.trim($("#contact-subject").val()).length) {
    $("#contact-subject").css("border", "1px solid red");
    

  } if (!$.trim($("#contact-message").val()).length) {
    $("#contact-message").css("border", "1px solid red");
    return false;

  } else {

  }
});

$('#contact-form').change(function() {
  if ($.trim($("#contact-name").val()).length){
      $("#contact-name").css("border", "none");
  } if ($.trim($("#contact-telephone").val()).length) {
    $("#contact-telephone").css("border", "none");
  } if ($.trim($("#contact-subject").val()).length) {
    $("#contact-subject").css("border", "none");
  } if ($.trim($("#contact-message").val()).length) {
    $("#contact-message").css("border", "none");
    return false;
  } else {

  }
});

