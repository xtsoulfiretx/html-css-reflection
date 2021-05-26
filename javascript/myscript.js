
// Hambuger click effect //

  function darken() {

    const scrollPosition = $("header").offset();
    
    $(".hamburger").toggleClass("is-active");
    $("#site-body").toggleClass("btn-pressed");
    $(".sidebar").toggleClass("is-visible");
    $(".site-wrap").toggleClass("site-wrap-d");
    $("body").toggleClass("fixed-body");
    $("#head-nav").toggleClass("slide-left");
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
        $("#head-nav").addClass('scrollDown');
        // console.log("Scrolled down, will play animation then unstick");
        $('#head-nav').on('sticky-end', function() { 
          setTimeout(function(){
          $("#head-nav").removeClass('scrollDown');
        },500); 
        $("#head-nav").unstick();
      });
      } else if ($('#head-nav').css('position') === 'relative') {
        // console.log("Scrolled down but don't need to do anything");
      }
    } else if (st === 0 && ($('#head-nav').css('position') === 'fixed')) {
        // console.log("Scrolled to top, will now unstick")
        $("#head-nav").unstick();
    } else if (st <= headerHeight) {
        //Do Nothing
        console.log("Doing nothing")
    } else if (st < lastScrollTop && st > headerHeight) {
        // Scroll Up
        if ($('#head-nav').css('position') === 'relative'){
          $("#head-nav").sticky({topSpacing:0});
          $('#head-nav').on('sticky-start', function() { 
            $("#head-nav").addClass('scrollUp');
          // console.log("Scrolled up, will stick header");
          setTimeout(function(){
            $("#head-nav").removeClass('scrollUp');
          },500); 
        });
        }
        else if ($('head-nav').css('position') === 'fixed') {
          // console.log("Scrolled up, but Header already present");
        }
    } else {
      // console.log("nothing will happen");
    }
    lastScrollTop = Math.abs(st); // For Mobile or negative scrolling

      console.log("Haven't scrolled in 250ms!");
  }, 250));
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

