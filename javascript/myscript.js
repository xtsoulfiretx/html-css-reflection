// window.addEventListener('load', function() {
//   $(".sidebar").hide();
// });

// Hambuger click effect //

  function darken() {
    $(".hamburger").toggleClass("is-active");
    $("#main").toggleClass("btn-pressed");
    $(".sidebar").toggleClass("is-visible");
    $(".site-wrap").toggleClass("site-wrap-d");
    $("body").toggleClass("fixed-body");
};

$(".hamburger").click(darken);
$(".site-wrap").click(darken);
