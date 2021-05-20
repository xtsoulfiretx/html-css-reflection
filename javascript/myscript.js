// window.addEventListener('load', function() {
//   $(".sidebar").hide();
// });

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



// Sticky Header event listener

 let lastScrollTop = 1;

 
  window.addEventListener("scroll", function(){

    const scrolled = window.scrollY; 

    let stickyHeight = Math.ceil(scrolled) > 300;

    let st = window.pageYOffset || document.documentElement.scrollTop; 
    if (st > lastScrollTop){
      //  console.log("scrolling down, the header will unstick");
      $("header").unstick();
    } else if (st < lastScrollTop && stickyHeight === true) {
      //  console.log("scrolling Up, the header will stick");
      $("header").sticky({topSpacing:0});
    } else {
      // console.log("nothing will happen");
    }
    lastScrollTop = Math.abs(st); // For Mobile or negative scrolling
 }, false);





// potential animation code

//  document.getElementById('head-nav').setAttribute("style","animation-name: scrollUpAnimation");


